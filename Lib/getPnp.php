<?php

namespace DhlWsdlClass\Lib;

class getPnp
{

    /**
     * @var PnpRequest $pnpRequest
     */
    protected $pnpRequest = null;

    /**
     * @param PnpRequest $pnpRequest
     */
    public function __construct($pnpRequest)
    {
      $this->pnpRequest = $pnpRequest;
    }

    /**
     * @return PnpRequest
     */
    public function getPnpRequest()
    {
      return $this->pnpRequest;
    }

    /**
     * @param PnpRequest $pnpRequest
     * @return \DhlWsdlClass\Lib\getPnp
     */
    public function setPnpRequest($pnpRequest)
    {
      $this->pnpRequest = $pnpRequest;
      return $this;
    }

}
