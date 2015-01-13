<?php
/**
 * File for class DhlWsdlClassStructPostalCodeServicesResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPostalCodeServicesResponse originally named PostalCodeServicesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPostalCodeServicesResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The domesticExpress9
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $domesticExpress9;
    /**
     * The domesticExpress12
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $domesticExpress12;
    /**
     * The deliveryEvening
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $deliveryEvening;
    /**
     * The pickupOnSaturday
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $pickupOnSaturday;
    /**
     * The deliverySaturday
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $deliverySaturday;
    /**
     * The exPickupFrom
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $exPickupFrom;
    /**
     * The exPickupTo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $exPickupTo;
    /**
     * The drPickupFrom
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $drPickupFrom;
    /**
     * The drPickupTo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $drPickupTo;
    /**
     * Constructor method for PostalCodeServicesResponse
     * @see parent::__construct()
     * @param boolean $_domesticExpress9
     * @param boolean $_domesticExpress12
     * @param boolean $_deliveryEvening
     * @param boolean $_pickupOnSaturday
     * @param boolean $_deliverySaturday
     * @param string $_exPickupFrom
     * @param string $_exPickupTo
     * @param string $_drPickupFrom
     * @param string $_drPickupTo
     * @return DhlWsdlClassStructPostalCodeServicesResponse
     */
    public function __construct($_domesticExpress9 = NULL,$_domesticExpress12 = NULL,$_deliveryEvening = NULL,$_pickupOnSaturday = NULL,$_deliverySaturday = NULL,$_exPickupFrom = NULL,$_exPickupTo = NULL,$_drPickupFrom = NULL,$_drPickupTo = NULL)
    {
        parent::__construct(array('domesticExpress9'=>$_domesticExpress9,'domesticExpress12'=>$_domesticExpress12,'deliveryEvening'=>$_deliveryEvening,'pickupOnSaturday'=>$_pickupOnSaturday,'deliverySaturday'=>$_deliverySaturday,'exPickupFrom'=>$_exPickupFrom,'exPickupTo'=>$_exPickupTo,'drPickupFrom'=>$_drPickupFrom,'drPickupTo'=>$_drPickupTo),false);
    }
    /**
     * Get domesticExpress9 value
     * @return boolean|null
     */
    public function getDomesticExpress9()
    {
        return $this->domesticExpress9;
    }
    /**
     * Set domesticExpress9 value
     * @param boolean $_domesticExpress9 the domesticExpress9
     * @return boolean
     */
    public function setDomesticExpress9($_domesticExpress9)
    {
        return ($this->domesticExpress9 = $_domesticExpress9);
    }
    /**
     * Get domesticExpress12 value
     * @return boolean|null
     */
    public function getDomesticExpress12()
    {
        return $this->domesticExpress12;
    }
    /**
     * Set domesticExpress12 value
     * @param boolean $_domesticExpress12 the domesticExpress12
     * @return boolean
     */
    public function setDomesticExpress12($_domesticExpress12)
    {
        return ($this->domesticExpress12 = $_domesticExpress12);
    }
    /**
     * Get deliveryEvening value
     * @return boolean|null
     */
    public function getDeliveryEvening()
    {
        return $this->deliveryEvening;
    }
    /**
     * Set deliveryEvening value
     * @param boolean $_deliveryEvening the deliveryEvening
     * @return boolean
     */
    public function setDeliveryEvening($_deliveryEvening)
    {
        return ($this->deliveryEvening = $_deliveryEvening);
    }
    /**
     * Get pickupOnSaturday value
     * @return boolean|null
     */
    public function getPickupOnSaturday()
    {
        return $this->pickupOnSaturday;
    }
    /**
     * Set pickupOnSaturday value
     * @param boolean $_pickupOnSaturday the pickupOnSaturday
     * @return boolean
     */
    public function setPickupOnSaturday($_pickupOnSaturday)
    {
        return ($this->pickupOnSaturday = $_pickupOnSaturday);
    }
    /**
     * Get deliverySaturday value
     * @return boolean|null
     */
    public function getDeliverySaturday()
    {
        return $this->deliverySaturday;
    }
    /**
     * Set deliverySaturday value
     * @param boolean $_deliverySaturday the deliverySaturday
     * @return boolean
     */
    public function setDeliverySaturday($_deliverySaturday)
    {
        return ($this->deliverySaturday = $_deliverySaturday);
    }
    /**
     * Get exPickupFrom value
     * @return string|null
     */
    public function getExPickupFrom()
    {
        return $this->exPickupFrom;
    }
    /**
     * Set exPickupFrom value
     * @param string $_exPickupFrom the exPickupFrom
     * @return string
     */
    public function setExPickupFrom($_exPickupFrom)
    {
        return ($this->exPickupFrom = $_exPickupFrom);
    }
    /**
     * Get exPickupTo value
     * @return string|null
     */
    public function getExPickupTo()
    {
        return $this->exPickupTo;
    }
    /**
     * Set exPickupTo value
     * @param string $_exPickupTo the exPickupTo
     * @return string
     */
    public function setExPickupTo($_exPickupTo)
    {
        return ($this->exPickupTo = $_exPickupTo);
    }
    /**
     * Get drPickupFrom value
     * @return string|null
     */
    public function getDrPickupFrom()
    {
        return $this->drPickupFrom;
    }
    /**
     * Set drPickupFrom value
     * @param string $_drPickupFrom the drPickupFrom
     * @return string
     */
    public function setDrPickupFrom($_drPickupFrom)
    {
        return ($this->drPickupFrom = $_drPickupFrom);
    }
    /**
     * Get drPickupTo value
     * @return string|null
     */
    public function getDrPickupTo()
    {
        return $this->drPickupTo;
    }
    /**
     * Set drPickupTo value
     * @param string $_drPickupTo the drPickupTo
     * @return string
     */
    public function setDrPickupTo($_drPickupTo)
    {
        return ($this->drPickupTo = $_drPickupTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPostalCodeServicesResponse
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
