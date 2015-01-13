<?php
/**
 * File for class DhlWsdlClassStructService
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructService originally named Service
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructService extends DhlWsdlClassWsdlClass
{
    /**
     * The serviceType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $serviceType;
    /**
     * The serviceValue
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $serviceValue;
    /**
     * The textInstruction
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $textInstruction;
    /**
     * The collectOnDeliveryForm
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $collectOnDeliveryForm;
    /**
     * Constructor method for Service
     * @see parent::__construct()
     * @param string $_serviceType
     * @param float $_serviceValue
     * @param string $_textInstruction
     * @param string $_collectOnDeliveryForm
     * @return DhlWsdlClassStructService
     */
    public function __construct($_serviceType = NULL,$_serviceValue = NULL,$_textInstruction = NULL,$_collectOnDeliveryForm = NULL)
    {
        parent::__construct(array('serviceType'=>$_serviceType,'serviceValue'=>$_serviceValue,'textInstruction'=>$_textInstruction,'collectOnDeliveryForm'=>$_collectOnDeliveryForm),false);
    }
    /**
     * Get serviceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }
    /**
     * Set serviceType value
     * @param string $_serviceType the serviceType
     * @return string
     */
    public function setServiceType($_serviceType)
    {
        return ($this->serviceType = $_serviceType);
    }
    /**
     * Get serviceValue value
     * @return float|null
     */
    public function getServiceValue()
    {
        return $this->serviceValue;
    }
    /**
     * Set serviceValue value
     * @param float $_serviceValue the serviceValue
     * @return float
     */
    public function setServiceValue($_serviceValue)
    {
        return ($this->serviceValue = $_serviceValue);
    }
    /**
     * Get textInstruction value
     * @return string|null
     */
    public function getTextInstruction()
    {
        return $this->textInstruction;
    }
    /**
     * Set textInstruction value
     * @param string $_textInstruction the textInstruction
     * @return string
     */
    public function setTextInstruction($_textInstruction)
    {
        return ($this->textInstruction = $_textInstruction);
    }
    /**
     * Get collectOnDeliveryForm value
     * @return string|null
     */
    public function getCollectOnDeliveryForm()
    {
        return $this->collectOnDeliveryForm;
    }
    /**
     * Set collectOnDeliveryForm value
     * @param string $_collectOnDeliveryForm the collectOnDeliveryForm
     * @return string
     */
    public function setCollectOnDeliveryForm($_collectOnDeliveryForm)
    {
        return ($this->collectOnDeliveryForm = $_collectOnDeliveryForm);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructService
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
