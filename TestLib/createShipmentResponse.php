<?php

namespace DhlWsdlClass\TestLib;

class createShipmentResponse
{

    /**
     * @var CreateShipmentResponse $createShipmentResult
     */
    protected $createShipmentResult = null;

    /**
     * @param CreateShipmentResponse $createShipmentResult
     */
    public function __construct($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
    }

    /**
     * @return CreateShipmentResponse
     */
    public function getCreateShipmentResult()
    {
      return $this->createShipmentResult;
    }

    /**
     * @param CreateShipmentResponse $createShipmentResult
     * @return \DhlWsdlClass\TestLib\createShipmentResponse
     */
    public function setCreateShipmentResult($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
      return $this;
    }

}
