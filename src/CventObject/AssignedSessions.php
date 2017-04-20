<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class AssignedSessions extends BaseCventObject
{
    const FIELD_ID = 'SessionId';
    const FIELD_NAME = 'SessionName';
    const FIELD_START_DATE = 'SessionStartDate';
    const FIELD_END_DATE = 'SessionEndDate';

    public function __construct()
    {
        parent::__construct(ObjectType::ASSIGNED_SESSION);
    }
}
