<?php

namespace DhlWsdlClass\TestLib;

class getMyShipmentsCountResponse
{

    /**
     * @var int $getMyShipmentsCountResult
     */
    protected $getMyShipmentsCountResult = null;

    /**
     * @param int $getMyShipmentsCountResult
     */
    public function __construct($getMyShipmentsCountResult)
    {
      $this->getMyShipmentsCountResult = $getMyShipmentsCountResult;
    }

    /**
     * @return int
     */
    public function getGetMyShipmentsCountResult()
    {
      return $this->getMyShipmentsCountResult;
    }

    /**
     * @param int $getMyShipmentsCountResult
     * @return \DhlWsdlClass\TestLib\getMyShipmentsCountResponse
     */
    public function setGetMyShipmentsCountResult($getMyShipmentsCountResult)
    {
      $this->getMyShipmentsCountResult = $getMyShipmentsCountResult;
      return $this;
    }

}
