<?php namespace CventQuery;

class CventLoginCredentials
{
    /*
     * @var String
     */
    public $AccountNumber;

    /**
     * @var String
     */
    public $UserName;

    /**
     * @var String
     */
    public $Password;


    /**
     * CventLoginCredentials constructor.
     * @param null $accountNumber
     * @param null $username
     * @param null $password
     */
    public function __construct($accountNumber = null, $username = null, $password = null)
    {
        $this->AccountNumber = $accountNumber;
        $this->UserName = $username;
        $this->Password = $password;
    }

    /**
     * @return array
     */
    public function __toArray() {
        return [
            'AccountNumber' => $this->AccountNumber,
            'UserName' => $this->UserName,
            'Password' => $this->Password,
        ];
    }
}
