<?php

namespace CventQuery\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static Status COMPLETED()
 * @method static Status PENDING()
 * @method static Status ACTIVE()
 * @method static Status CLOSED()
 */
class Status extends Enum
{
    const COMPLETED = "Completed";
    const PENDING = "Pending";
    const ACTIVE = "Active";
    const CLOSED = "Closed";
}
