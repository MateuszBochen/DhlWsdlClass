<?php

namespace DhlWsdlClass\Lib;

class getPnpResponse
{

    /**
     * @var PnpResponse $getPnpResult
     */
    protected $getPnpResult = null;

    /**
     * @param PnpResponse $getPnpResult
     */
    public function __construct($getPnpResult)
    {
      $this->getPnpResult = $getPnpResult;
    }

    /**
     * @return PnpResponse
     */
    public function getGetPnpResult()
    {
      return $this->getPnpResult;
    }

    /**
     * @param PnpResponse $getPnpResult
     * @return \DhlWsdlClass\Lib\getPnpResponse
     */
    public function setGetPnpResult($getPnpResult)
    {
      $this->getPnpResult = $getPnpResult;
      return $this;
    }

}
