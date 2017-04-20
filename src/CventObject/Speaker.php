<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Speaker extends BaseCventObject
{
    // Available event fields
    const FIELD_ID = 'SpeakerId';
    const FIELD_FIRST_NAME = 'FirstName';
    const FIELD_LAST_NAME = 'LastName';
    const FIELD_EMAIL = 'EmailAddress';
    const FIELD_SPEAKER_CODE = 'SpeakerCode';
    const FIELD_ASSIGNED_SESSIONS = 'AssignedSessions';
    const FIELD_LAST_MODIFIED = 'LastModifiedDate';

    public function __construct()
    {
        parent::__construct(ObjectType::SPEAKER);
    }
}
