<?php

namespace DhlWsdlClass\Lib;

class CreateShipmentResponse
{

    /**
     * @var string $shipmentNotificationNumber
     */
    protected $shipmentNotificationNumber = null;

    /**
     * @var string $shipmentTrackingNumber
     */
    protected $shipmentTrackingNumber = null;

    /**
     * @var string $packagesTrackingNumbers
     */
    protected $packagesTrackingNumbers = null;

    /**
     * @var string $dispatchNotificationNumber
     */
    protected $dispatchNotificationNumber = null;

    /**
     * @var Label $label
     */
    protected $label = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentNotificationNumber()
    {
      return $this->shipmentNotificationNumber;
    }

    /**
     * @param string $shipmentNotificationNumber
     * @return \DhlWsdlClass\Lib\CreateShipmentResponse
     */
    public function setShipmentNotificationNumber($shipmentNotificationNumber)
    {
      $this->shipmentNotificationNumber = $shipmentNotificationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
      return $this->shipmentTrackingNumber;
    }

    /**
     * @param string $shipmentTrackingNumber
     * @return \DhlWsdlClass\Lib\CreateShipmentResponse
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber)
    {
      $this->shipmentTrackingNumber = $shipmentTrackingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackagesTrackingNumbers()
    {
      return $this->packagesTrackingNumbers;
    }

    /**
     * @param string $packagesTrackingNumbers
     * @return \DhlWsdlClass\Lib\CreateShipmentResponse
     */
    public function setPackagesTrackingNumbers($packagesTrackingNumbers)
    {
      $this->packagesTrackingNumbers = $packagesTrackingNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchNotificationNumber()
    {
      return $this->dispatchNotificationNumber;
    }

    /**
     * @param string $dispatchNotificationNumber
     * @return \DhlWsdlClass\Lib\CreateShipmentResponse
     */
    public function setDispatchNotificationNumber($dispatchNotificationNumber)
    {
      $this->dispatchNotificationNumber = $dispatchNotificationNumber;
      return $this;
    }

    /**
     * @return Label
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param Label $label
     * @return \DhlWsdlClass\Lib\CreateShipmentResponse
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

}
