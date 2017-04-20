<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Session extends BaseCventObject
{
    // Available event fields
    const FIELD_NAME = 'ProductName';
    const FIELD_STATUS = 'Status';
    const FIELD_ID = 'ProductId';
    const FIELD_LAST_MODIFIED = 'LastModifiedDate';
    const FIELD_SESSION_ID = 'SessionId';

    public function __construct()
    {
        parent::__construct(ObjectType::SESSION);
    }
}
