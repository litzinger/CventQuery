<?php

namespace CventQuery\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static Status EVENT()
 * @method static Status SESSION()
 */
class ObjectType extends Enum
{
    const EVENT = 'Event';
    const SESSION = 'Session';
    const SPEAKER = 'Speaker';
}
