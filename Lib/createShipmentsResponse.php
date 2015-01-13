<?php

namespace DhlWsdlClass;

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
     * @return \DhlWsdlClass\createShipmentsResponse
     */
    public function setCreateShipmentsResult($createShipmentsResult)
    {
      $this->createShipmentsResult = $createShipmentsResult;
      return $this;
    }

}
