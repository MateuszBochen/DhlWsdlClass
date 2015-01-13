<?php

namespace DhlWsdlClass;

class ShipmentTime
{

    /**
     * @var string $shipmentDate
     */
    protected $shipmentDate = null;

    /**
     * @var string $shipmentStartHour
     */
    protected $shipmentStartHour = null;

    /**
     * @var string $shipmentEndHour
     */
    protected $shipmentEndHour = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
      return $this->shipmentDate;
    }

    /**
     * @param string $shipmentDate
     * @return \DhlWsdlClass\ShipmentTime
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentStartHour()
    {
      return $this->shipmentStartHour;
    }

    /**
     * @param string $shipmentStartHour
     * @return \DhlWsdlClass\ShipmentTime
     */
    public function setShipmentStartHour($shipmentStartHour)
    {
      $this->shipmentStartHour = $shipmentStartHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentEndHour()
    {
      return $this->shipmentEndHour;
    }

    /**
     * @param string $shipmentEndHour
     * @return \DhlWsdlClass\ShipmentTime
     */
    public function setShipmentEndHour($shipmentEndHour)
    {
      $this->shipmentEndHour = $shipmentEndHour;
      return $this;
    }

}
