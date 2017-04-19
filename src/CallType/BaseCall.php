<?php namespace CventQuery\CallType;

use CventQuery\CventConnection;
use CventQuery\CventObject\CventObjectType;
use CventQuery\CallType\CallTypeInterface;
use stdClass;

abstract class BaseCall implements CallTypeInterface
{
    /**
     * @var String
     */
    protected $callName;

    /**
     * @var stdClass
     */
    protected $data;

    /**
     * @param $callName
     * @param $objectType
     */
    public function __construct($callName, $objectType)
    {
        $this->callName = $callName;

        $this->data = new stdClass();
        $this->data->ObjectType = $objectType;
    }

    /**
     * @param \CventQuery\CventConnection $connection
     *
     * @return mixed
     */
    public function runQuery(CventConnection $connection)
    {
        return $connection->request($this->callName, $this->data);
    }

    /**
     * @param $paramName
     * @param $value
     */
    public function setParameter($paramName, $value)
    {
        $this->data->{$paramName} = $value;
    }

    /**
     * @param stdClass $data
     * @return $this
     */
    public function withData(stdClass $data)
    {
        $this->data = $data;

        return $this;
    }

    public function method()
    {
        return $this->callName;
    }

    public function data()
    {
        return $this->data;
    }
}
