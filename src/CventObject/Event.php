<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Event extends BaseCventObject
{
    // Available event fields
    const FIELD_CODE = 'EventCode';
    const FIELD_TITLE = 'EventTitle';
    const FIELD_STATUS = 'EventStatus';

    public function __construct()
    {
        parent::__construct(ObjectType::EVENT);
    }
}
