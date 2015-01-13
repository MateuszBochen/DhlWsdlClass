<?php
/**
 * File for class DhlWsdlClassStructPaymentData
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPaymentData originally named PaymentData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPaymentData extends DhlWsdlClassWsdlClass
{
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $paymentMethod;
    /**
     * The payerType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $payerType;
    /**
     * The accountNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $accountNumber;
    /**
     * The costsCenter
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $costsCenter;
    /**
     * Constructor method for PaymentData
     * @see parent::__construct()
     * @param string $_paymentMethod
     * @param string $_payerType
     * @param string $_accountNumber
     * @param string $_costsCenter
     * @return DhlWsdlClassStructPaymentData
     */
    public function __construct($_paymentMethod = NULL,$_payerType = NULL,$_accountNumber = NULL,$_costsCenter = NULL)
    {
        parent::__construct(array('paymentMethod'=>$_paymentMethod,'payerType'=>$_payerType,'accountNumber'=>$_accountNumber,'costsCenter'=>$_costsCenter),false);
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $_paymentMethod the paymentMethod
     * @return string
     */
    public function setPaymentMethod($_paymentMethod)
    {
        return ($this->paymentMethod = $_paymentMethod);
    }
    /**
     * Get payerType value
     * @return string|null
     */
    public function getPayerType()
    {
        return $this->payerType;
    }
    /**
     * Set payerType value
     * @param string $_payerType the payerType
     * @return string
     */
    public function setPayerType($_payerType)
    {
        return ($this->payerType = $_payerType);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $_accountNumber the accountNumber
     * @return string
     */
    public function setAccountNumber($_accountNumber)
    {
        return ($this->accountNumber = $_accountNumber);
    }
    /**
     * Get costsCenter value
     * @return string|null
     */
    public function getCostsCenter()
    {
        return $this->costsCenter;
    }
    /**
     * Set costsCenter value
     * @param string $_costsCenter the costsCenter
     * @return string
     */
    public function setCostsCenter($_costsCenter)
    {
        return ($this->costsCenter = $_costsCenter);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPaymentData
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
