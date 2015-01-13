<?php

namespace DhlWsdlClass;

class createShipment
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var CreateShipmentRequest $shipment
     */
    protected $shipment = null;

    /**
     * @param AuthData $authData
     * @param CreateShipmentRequest $shipment
     */
    public function __construct($authData, $shipment)
    {
      $this->authData = $authData;
      $this->shipment = $shipment;
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
     * @return \DhlWsdlClass\createShipment
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return CreateShipmentRequest
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param CreateShipmentRequest $shipment
     * @return \DhlWsdlClass\createShipment
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
