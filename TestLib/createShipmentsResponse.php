<?php

namespace DhlWsdlClass\TestLib;

class createShipmentsResponse
{

    /**
     * @var ArrayOfShipmentbasicdata $createShipmentsResult
     */
    protected $createShipmentsResult = null;

    /**
     * @param ArrayOfShipmentbasicdata $createShipmentsResult
     */
    public function __construct($createShipmentsResult)
    {
      $this->createShipmentsResult = $createShipmentsResult;
    }

    /**
     * @return ArrayOfShipmentbasicdata
     */
    public function getCreateShipmentsResult()
    {
      return $this->createShipmentsResult;
    }

    /**
     * @param ArrayOfShipmentbasicdata $createShipmentsResult
     * @return \DhlWsdlClass\TestLib\createShipmentsResponse
     */
    public function setCreateShipmentsResult($createShipmentsResult)
    {
      $this->createShipmentsResult = $createShipmentsResult;
      return $this;
    }

}
