<?php

namespace CventQuery\CventObject;

class Session extends BaseCventObject
{
    //available event fields
    const FIELD_EVENT_CODE = 'EventCode';
    const FIELD_EVENT_TITLE = 'EventTitle';
    const FIELD_EVENT_STATUS = 'EventStatus';

    public function __construct()
    {
        parent::__construct(CventObjectType::EVENT);
    }
}
