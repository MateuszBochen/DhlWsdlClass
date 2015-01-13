<?php

namespace DhlWsdlClass\Lib;

class Service
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var float $serviceValue
     */
    protected $serviceValue = null;

    /**
     * @var string $textInstruction
     */
    protected $textInstruction = null;

    /**
     * @var string $collectOnDeliveryForm
     */
    protected $collectOnDeliveryForm = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \DhlWsdlClass\Lib\Service
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getServiceValue()
    {
      return $this->serviceValue;
    }

    /**
     * @param float $serviceValue
     * @return \DhlWsdlClass\Lib\Service
     */
    public function setServiceValue($serviceValue)
    {
      $this->serviceValue = $serviceValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextInstruction()
    {
      return $this->textInstruction;
    }

    /**
     * @param string $textInstruction
     * @return \DhlWsdlClass\Lib\Service
     */
    public function setTextInstruction($textInstruction)
    {
      $this->textInstruction = $textInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectOnDeliveryForm()
    {
      return $this->collectOnDeliveryForm;
    }

    /**
     * @param string $collectOnDeliveryForm
     * @return \DhlWsdlClass\Lib\Service
     */
    public function setCollectOnDeliveryForm($collectOnDeliveryForm)
    {
      $this->collectOnDeliveryForm = $collectOnDeliveryForm;
      return $this;
    }

}
