<?php

namespace DhlWsdlClass\TestLib;

class deleteShipmentResponse
{

    /**
     * @var DeleteShipmentResponse $deleteShipmentResult
     */
    protected $deleteShipmentResult = null;

    /**
     * @param DeleteShipmentResponse $deleteShipmentResult
     */
    public function __construct($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
    }

    /**
     * @return DeleteShipmentResponse
     */
    public function getDeleteShipmentResult()
    {
      return $this->deleteShipmentResult;
    }

    /**
     * @param DeleteShipmentResponse $deleteShipmentResult
     * @return \DhlWsdlClass\TestLib\deleteShipmentResponse
     */
    public function setDeleteShipmentResult($deleteShipmentResult)
    {
      $this->deleteShipmentResult = $deleteShipmentResult;
      return $this;
    }

}
