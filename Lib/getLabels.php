<?php

namespace DhlWsdlClass\Lib;

class getLabels
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfItemtoprint $itemsToPrint
     */
    protected $itemsToPrint = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfItemtoprint $itemsToPrint
     */
    public function __construct($authData, $itemsToPrint)
    {
      $this->authData = $authData;
      $this->itemsToPrint = $itemsToPrint;
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
     * @return \DhlWsdlClass\Lib\getLabels
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfItemtoprint
     */
    public function getItemsToPrint()
    {
      return $this->itemsToPrint;
    }

    /**
     * @param ArrayOfItemtoprint $itemsToPrint
     * @return \DhlWsdlClass\Lib\getLabels
     */
    public function setItemsToPrint($itemsToPrint)
    {
      $this->itemsToPrint = $itemsToPrint;
      return $this;
    }

}
