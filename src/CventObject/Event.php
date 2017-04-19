<?php

namespace CventQuery\CventObject;

/**
 * File: EventCventObject.php
 * Author: goce
 * Created:  2015.11.05
 *
 * Description:
 */
class Event extends BaseCventObject
{
    //Event status
    const EVENT_STATUS_COMPLETED = "Completed";
    const EVENT_STATUS_PENDING = "Pending";
    const EVENT_STATUS_ACTIVE = "Active";
    const EVENT_STATUS_CLOSED = "Closed";

    //available event fields
    const FIELD_EVENT_CODE = 'EventCode';
    const FIELD_EVENT_TITLE = 'EventTitle';
    const FIELD_EVENT_STATUS = 'EventStatus';

    public function __construct()
    {
        parent::__construct(CventObjectType::EVENT);
    }
}
