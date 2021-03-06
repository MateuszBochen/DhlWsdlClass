<?php

namespace DhlWsdlClass\Lib;

class deleteShipmentsResponse
{

    /**
     * @var ArrayOfDeletenotification $deleteShipmentsResult
     */
    protected $deleteShipmentsResult = null;

    /**
     * @param ArrayOfDeletenotification $deleteShipmentsResult
     */
    public function __construct($deleteShipmentsResult)
    {
      $this->deleteShipmentsResult = $deleteShipmentsResult;
    }

    /**
     * @return ArrayOfDeletenotification
     */
    public function getDeleteShipmentsResult()
    {
      return $this->deleteShipmentsResult;
    }

    /**
     * @param ArrayOfDeletenotification $deleteShipmentsResult
     * @return \DhlWsdlClass\Lib\deleteShipmentsResponse
     */
    public function setDeleteShipmentsResult($deleteShipmentsResult)
    {
      $this->deleteShipmentsResult = $deleteShipmentsResult;
      return $this;
    }

}
