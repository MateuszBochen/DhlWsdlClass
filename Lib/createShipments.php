<?php

namespace DhlWsdlClass;

class createShipments
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfShipmentfulldata $shipments
     */
    protected $shipments = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfShipmentfulldata $shipments
     */
    public function __construct($authData, $shipments)
    {
      $this->authData = $authData;
      $this->shipments = $shipments;
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
     * @return \DhlWsdlClass\createShipments
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfShipmentfulldata
     */
    public function getShipments()
    {
      return $this->shipments;
    }

    /**
     * @param ArrayOfShipmentfulldata $shipments
     * @return \DhlWsdlClass\createShipments
     */
    public function setShipments($shipments)
    {
      $this->shipments = $shipments;
      return $this;
    }

}
