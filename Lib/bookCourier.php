<?php

namespace DhlWsdlClass\Lib;

class bookCourier
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var string $pickupDate
     */
    protected $pickupDate = null;

    /**
     * @var string $pickupTimeFrom
     */
    protected $pickupTimeFrom = null;

    /**
     * @var string $pickupTimeTo
     */
    protected $pickupTimeTo = null;

    /**
     * @var string $additionalInfo
     */
    protected $additionalInfo = null;

    /**
     * @var ArrayOfString $shipmentIdList
     */
    protected $shipmentIdList = null;

    /**
     * @var ShipmentOrderInfo $shipmentOrderInfo
     */
    protected $shipmentOrderInfo = null;

    /**
     * @param AuthData $authData
     * @param string $pickupDate
     * @param string $pickupTimeFrom
     * @param string $pickupTimeTo
     * @param string $additionalInfo
     * @param ArrayOfString $shipmentIdList
     * @param ShipmentOrderInfo $shipmentOrderInfo
     */
    public function __construct($authData, $pickupDate, $pickupTimeFrom, $pickupTimeTo, $additionalInfo, $shipmentIdList, $shipmentOrderInfo)
    {
      $this->authData = $authData;
      $this->pickupDate = $pickupDate;
      $this->pickupTimeFrom = $pickupTimeFrom;
      $this->pickupTimeTo = $pickupTimeTo;
      $this->additionalInfo = $additionalInfo;
      $this->shipmentIdList = $shipmentIdList;
      $this->shipmentOrderInfo = $shipmentOrderInfo;
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
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
      return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setPickupDate($pickupDate)
    {
      $this->pickupDate = $pickupDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeFrom()
    {
      return $this->pickupTimeFrom;
    }

    /**
     * @param string $pickupTimeFrom
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setPickupTimeFrom($pickupTimeFrom)
    {
      $this->pickupTimeFrom = $pickupTimeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo()
    {
      return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setPickupTimeTo($pickupTimeTo)
    {
      $this->pickupTimeTo = $pickupTimeTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
      return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setAdditionalInfo($additionalInfo)
    {
      $this->additionalInfo = $additionalInfo;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getShipmentIdList()
    {
      return $this->shipmentIdList;
    }

    /**
     * @param ArrayOfString $shipmentIdList
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setShipmentIdList($shipmentIdList)
    {
      $this->shipmentIdList = $shipmentIdList;
      return $this;
    }

    /**
     * @return ShipmentOrderInfo
     */
    public function getShipmentOrderInfo()
    {
      return $this->shipmentOrderInfo;
    }

    /**
     * @param ShipmentOrderInfo $shipmentOrderInfo
     * @return \DhlWsdlClass\Lib\bookCourier
     */
    public function setShipmentOrderInfo($shipmentOrderInfo)
    {
      $this->shipmentOrderInfo = $shipmentOrderInfo;
      return $this;
    }

}
