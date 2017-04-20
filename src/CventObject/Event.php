<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Event extends BaseCventObject
{
    const FIELD_ID = 'EventId';
    const FIELD_CODE = 'EventCode';
    const FIELD_TITLE = 'EventTitle';
    const FIELD_STATUS = 'EventStatus';
    const FIELD_LAST_MODIFIED = 'LastModifiedDate';

    public function __construct()
    {
        parent::__construct(ObjectType::EVENT);
    }
}
