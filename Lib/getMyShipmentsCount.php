<?php

namespace DhlWsdlClass;

class getMyShipmentsCount
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $createdFrom
     */
    protected $createdFrom = null;

    /**
     * @var string $createdTo
     */
    protected $createdTo = null;

    /**
     * @param AuthData $authData
     * @param string $createdFrom
     * @param string $createdTo
     */
    public function __construct($authData, $createdFrom, $createdTo)
    {
      $this->authData = $authData;
      $this->createdFrom = $createdFrom;
      $this->createdTo = $createdTo;
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
     * @return \DhlWsdlClass\getMyShipmentsCount
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedFrom()
    {
      return $this->createdFrom;
    }

    /**
     * @param string $createdFrom
     * @return \DhlWsdlClass\getMyShipmentsCount
     */
    public function setCreatedFrom($createdFrom)
    {
      $this->createdFrom = $createdFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedTo()
    {
      return $this->createdTo;
    }

    /**
     * @param string $createdTo
     * @return \DhlWsdlClass\getMyShipmentsCount
     */
    public function setCreatedTo($createdTo)
    {
      $this->createdTo = $createdTo;
      return $this;
    }

}
