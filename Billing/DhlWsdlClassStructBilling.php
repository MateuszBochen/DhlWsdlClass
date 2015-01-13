<?php
/**
 * File for class DhlWsdlClassStructBilling
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructBilling originally named Billing
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructBilling extends DhlWsdlClassWsdlClass
{
    /**
     * The shippingPaymentType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shippingPaymentType;
    /**
     * The billingAccountNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $billingAccountNumber;
    /**
     * The paymentType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $paymentType;
    /**
     * The costsCenter
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $costsCenter;
    /**
     * Constructor method for Billing
     * @see parent::__construct()
     * @param string $_shippingPaymentType
     * @param int $_billingAccountNumber
     * @param string $_paymentType
     * @param string $_costsCenter
     * @return DhlWsdlClassStructBilling
     */
    public function __construct($_shippingPaymentType = NULL,$_billingAccountNumber = NULL,$_paymentType = NULL,$_costsCenter = NULL)
    {
        parent::__construct(array('shippingPaymentType'=>$_shippingPaymentType,'billingAccountNumber'=>$_billingAccountNumber,'paymentType'=>$_paymentType,'costsCenter'=>$_costsCenter),false);
    }
    /**
     * Get shippingPaymentType value
     * @return string|null
     */
    public function getShippingPaymentType()
    {
        return $this->shippingPaymentType;
    }
    /**
     * Set shippingPaymentType value
     * @param string $_shippingPaymentType the shippingPaymentType
     * @return string
     */
    public function setShippingPaymentType($_shippingPaymentType)
    {
        return ($this->shippingPaymentType = $_shippingPaymentType);
    }
    /**
     * Get billingAccountNumber value
     * @return int|null
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }
    /**
     * Set billingAccountNumber value
     * @param int $_billingAccountNumber the billingAccountNumber
     * @return int
     */
    public function setBillingAccountNumber($_billingAccountNumber)
    {
        return ($this->billingAccountNumber = $_billingAccountNumber);
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $_paymentType the paymentType
     * @return string
     */
    public function setPaymentType($_paymentType)
    {
        return ($this->paymentType = $_paymentType);
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
     * @return DhlWsdlClassStructBilling
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
