<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class Session extends BaseCventObject
{
    const FIELD_ID = 'Id';
    const FIELD_NAME = 'ProductName';
    const FIELD_CODE = 'ProductCode';
    const FIELD_TYPE = 'ProductType';
    const FIELD_START_TIME = 'StartTime';
    const FIELD_END_TIME = 'EndTime';
    const FIELD_DATA_TAG_CODE = 'DataTagCode';
    const FIELD_DESCRIPTION = 'ProductDescription';
    const FIELD_SESSION_LOCATION_NAME = 'SessionLocationName';
    const FIELD_SESSION_LOCATION_CODE = 'SessionLocationCode';
    const FIELD_REGISTRANT_INFO = 'RegistrantInformation';
    const FIELD_STATUS = 'Status';
    const FIELD_AUTO_CLOSE_DATE = 'AutoCloseDate';
    const FIELD_CAPACITY = 'Capacity';
    const FIELD_ENABLE_WAIT_LIST = 'EnableWaitlist';
    const FIELD_WAIT_LIST_CAPACITY = 'WaitlistCapacity';

    public function __construct()
    {
        parent::__construct(ObjectType::SESSION);
    }
}
