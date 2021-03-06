<?php

namespace DhlWsdlClass\TestLib;

class PnpRequest
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuthData
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthData $authData
     * @return \DhlWsdlClass\TestLib\PnpRequest
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \DhlWsdlClass\TestLib\PnpRequest
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \DhlWsdlClass\TestLib\PnpRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
