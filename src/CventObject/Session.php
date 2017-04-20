<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Session extends BaseCventObject
{
    // Available event fields
    const FIELD_NAME = 'ProductName';
    const FIELD_STATUS = 'Status';

    public function __construct()
    {
        parent::__construct(ObjectType::SESSION);
    }
}
