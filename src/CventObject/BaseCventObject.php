<?php

namespace CventQuery\CventObject;

class BaseCventObject implements CventObjectInterface
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var mixed
     */
    protected $parameters;

    /**
     * @param string $type
     */
    public function __construct($type = "")
    {
        if (empty($type)) {
            throw new \InvalidArgumentException("The CventObject type must be delcared");
        }

        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }

    public function prepared()
    {
        throw new \BadMethodCallException("This method must be implemented in child class");
    }

    public function parameters()
    {
        return $this->parameters;
    }

    public function setParameter($name, $value)
    {
        throw new \BadMethodCallException("You have to implement this function for each query type");
    }
}
