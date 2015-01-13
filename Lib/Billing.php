<?php

namespace DhlWsdlClass\Lib;

class Billing
{

    /**
     * @var string $shippingPaymentType
     */
    protected $shippingPaymentType = null;

    /**
     * @var int $billingAccountNumber
     */
    protected $billingAccountNumber = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $costsCenter
     */
    protected $costsCenter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShippingPaymentType()
    {
      return $this->shippingPaymentType;
    }

    /**
     * @param string $shippingPaymentType
     * @return \DhlWsdlClass\Lib\Billing
     */
    public function setShippingPaymentType($shippingPaymentType)
    {
      $this->shippingPaymentType = $shippingPaymentType;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingAccountNumber()
    {
      return $this->billingAccountNumber;
    }

    /**
     * @param int $billingAccountNumber
     * @return \DhlWsdlClass\Lib\Billing
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
      $this->billingAccountNumber = $billingAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return \DhlWsdlClass\Lib\Billing
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostsCenter()
    {
      return $this->costsCenter;
    }

    /**
     * @param string $costsCenter
     * @return \DhlWsdlClass\Lib\Billing
     */
    public function setCostsCenter($costsCenter)
    {
      $this->costsCenter = $costsCenter;
      return $this;
    }

}
