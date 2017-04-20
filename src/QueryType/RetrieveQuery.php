<?php

namespace CventQuery\QueryType;

class RetrieveQuery extends BaseQuery
{
    const RETRIEVE_CALL_NAME = "Retrieve";

    protected $ids;

    /**
     * RetrieveQuery constructor.
     * @param \CventQuery\CventConnection $connection
     */
    public function __construct(\CventQuery\CventConnection $connection)
    {
        parent::__construct($connection, self::RETRIEVE_CALL_NAME);

        $this->ids = [];
    }

    public function id(array $ids)
    {
        if (empty($ids)) {
            throw new \InvalidArgumentException("Invalid values detected. ");
        }

        $this->ids = $ids;

        return $this;
    }

}
