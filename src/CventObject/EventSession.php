<?php

namespace CventQuery\CventObject;

use CventQuery\Enum\ObjectType;

class EventSession extends BaseCventObject
{
    const FIELD_PRODUCT_ID = 'ProductId';
    const FIELD_NAME = 'ProductName';
    const FIELD_CODE = 'ProductCode';
    const FIELD_TYPE = 'ProductType';
    const FIELD_DESCRIPTION = 'ProductDescription';
    const FIELD_CATEGORY_NAME = 'SessionCategoryName';
    const FIELD_CATEGORY_ID = 'SessionCategoryId';
    const FIELD_IS_INCLUDED = 'IsIncluded';
    const FIELD_START_TIME = 'StartTime';
    const FIELD_END_TIME = 'EndTime';
    const FIELD_STATUS = 'Status';
    const FIELD_CAPACITY = 'Capacity';

    public function __construct()
    {
        parent::__construct(ObjectType::SESSION);
    }
}
