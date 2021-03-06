<?php

namespace DhlWsdlClass\TestLib;

class PaymentData
{

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $payerType
     */
    protected $payerType = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

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
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return \DhlWsdlClass\TestLib\PaymentData
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayerType()
    {
      return $this->payerType;
    }

    /**
     * @param string $payerType
     * @return \DhlWsdlClass\TestLib\PaymentData
     */
    public function setPayerType($payerType)
    {
      $this->payerType = $payerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return \DhlWsdlClass\TestLib\PaymentData
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
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
     * @return \DhlWsdlClass\TestLib\PaymentData
     */
    public function setCostsCenter($costsCenter)
    {
      $this->costsCenter = $costsCenter;
      return $this;
    }

}
