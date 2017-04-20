<?php

namespace CventQuery\CallType;

interface CallTypeInterface
{
    /**
     * @return String Returns the name of the function to call
     */
    public function method();

    /**
     * @return stdClass Returns formatted data to be sent.
     */
    public function data();
}
