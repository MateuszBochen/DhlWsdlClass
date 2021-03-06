<?php

namespace DhlWsdlClass\TestLib;

class getMyShipmentsResponse
{

    /**
     * @var ArrayOfShipmentbasicdata $getMyShipmentsResult
     */
    protected $getMyShipmentsResult = null;

    /**
     * @param ArrayOfShipmentbasicdata $getMyShipmentsResult
     */
    public function __construct($getMyShipmentsResult)
    {
      $this->getMyShipmentsResult = $getMyShipmentsResult;
    }

    /**
     * @return ArrayOfShipmentbasicdata
     */
    public function getGetMyShipmentsResult()
    {
      return $this->getMyShipmentsResult;
    }

    /**
     * @param ArrayOfShipmentbasicdata $getMyShipmentsResult
     * @return \DhlWsdlClass\TestLib\getMyShipmentsResponse
     */
    public function setGetMyShipmentsResult($getMyShipmentsResult)
    {
      $this->getMyShipmentsResult = $getMyShipmentsResult;
      return $this;
    }

}
