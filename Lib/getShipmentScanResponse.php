<?php

namespace DhlWsdlClass;

class getShipmentScanResponse
{

    /**
     * @var ScanToPrintResponse $getShipmentScanResult
     */
    protected $getShipmentScanResult = null;

    /**
     * @param ScanToPrintResponse $getShipmentScanResult
     */
    public function __construct($getShipmentScanResult)
    {
      $this->getShipmentScanResult = $getShipmentScanResult;
    }

    /**
     * @return ScanToPrintResponse
     */
    public function getGetShipmentScanResult()
    {
      return $this->getShipmentScanResult;
    }

    /**
     * @param ScanToPrintResponse $getShipmentScanResult
     * @return \DhlWsdlClass\getShipmentScanResponse
     */
    public function setGetShipmentScanResult($getShipmentScanResult)
    {
      $this->getShipmentScanResult = $getShipmentScanResult;
      return $this;
    }

}