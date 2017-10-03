# CventQuery
Php library used to interact and query Cvent Soap API

```
<?php

namespace Foo\Services\Cvent;

use CventQuery\CventLoginCredentials;
use CventQuery\CventObject\AssignedSessions;
use CventQuery\CventObject\EventSession;
use CventQuery\CventObject\Session;
use CventQuery\CventObject\Speaker;
use CventQuery\CventQuery;
use CventQuery\CventSoapClient;
use CventQuery\CventConnection;
use CventQuery\Enum\ObjectType;
use CventQuery\Enum\Status;
use CventQuery\SearchOperator;
use CventQuery\CventObject\Event;
use SoapFault;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cvent
{
    private $options;
    private $client;
    private $credentials;
    private $session;
    private $connection;

    /**
     * Cvent constructor.
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $this->configureOptions($options);
        $this->authenticate();
    }

    private function authenticate()
    {
        $this->client = CventSoapClient::connect($this->options['wdslUrl'], true);
        $this->credentials = new CventLoginCredentials($this->options['account'], $this->options['username'], $this->options['password']);
        $this->session = $this->client->client()->Login($this->credentials);
        $this->connection = new CventConnection($this->client, $this->credentials, (array) $this->session);
    }

    /**
     * @param $event
     * @return array|null
     */
    public function getSessions($event)
    {
        $eventSessions = array_values(array_filter($event->ProductDetail, function($productDetail) {
            return ($productDetail->ProductType === ObjectType::SESSION);
        }));

        $sessionIds = array_values(array_map(function($object) {
            return $object->{EventSession::FIELD_PRODUCT_ID};
        }, $eventSessions));

        // Get all Sessions for the event
        $query = new CventQuery($this->connection, new Session());
        $query->find($sessionIds);

        return $this->getQueryResult($query);
    }

    /**
     * @param $event
     * @return array
     */
    public function getSpeakers($event)
    {
        $query = new CventQuery($this->connection, new Speaker());
        $query->where(Speaker::FIELD_EVENT_ID, $event->Id);

        $sessionSpeakers = [];

        $speakers = $this->getQueryResult($query);

        foreach ($speakers as $speaker) {
            if (!isset($speaker->{Speaker::FIELD_ASSIGNED_SESSIONS})) {
                continue;
            }
            foreach ($speaker->{Speaker::FIELD_ASSIGNED_SESSIONS} as $assignedSession) {
                $sessionSpeakers[$assignedSession->{AssignedSessions::FIELD_ID}][] = $speaker;
            }
        }

        return $sessionSpeakers;
    }

    /**
     * @return Event
     * @throws \Exception
     */
    public function getCurrentEvent()
    {
        $event = new Event();
        $query = new CventQuery($this->connection, $event);
        $query->where(Event::FIELD_STATUS, Status::ACTIVE, SearchOperator::EQUALS);
        $query->where(Event::FIELD_TITLE, $this->options['event'], SearchOperator::EQUALS);

        $event = $this->getQueryResult($query);

        if ($event === null || count($event) > 1) {
            throw new \Exception('Event not found.');
        }

        return current($event);
    }

    /**
     * @param CventQuery $query
     * @return array|null
     */
    private function getQueryResult(CventQuery $query)
    {
        $objects = null;

        try {
            $objects = $query->get();
        } catch (SoapFault $exception) {
            print_r($exception);
        }

        return $objects;
    }

    /**
     * @param array $options
     * @return array
     */
    private function configureOptions(Array $options = [])
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired([
            'event',
            'wdslUrl',
            'soapUrl',
            'account',
            'username',
            'password',
        ]);

        return $resolver->resolve($options);
    }
}
```
