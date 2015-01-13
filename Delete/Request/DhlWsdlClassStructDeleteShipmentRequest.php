<?php
/**
 * File for class DhlWsdlClassStructDeleteShipmentRequest
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteShipmentRequest originally named DeleteShipmentRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteShipmentRequest extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentIdentificationNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentIdentificationNumber;
    /**
     * The dispatchIdentificationNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $dispatchIdentificationNumber;
    /**
     * Constructor method for DeleteShipmentRequest
     * @see parent::__construct()
     * @param string $_shipmentIdentificationNumber
     * @param string $_dispatchIdentificationNumber
     * @return DhlWsdlClassStructDeleteShipmentRequest
     */
    public function __construct($_shipmentIdentificationNumber = NULL,$_dispatchIdentificationNumber = NULL)
    {
        parent::__construct(array('shipmentIdentificationNumber'=>$_shipmentIdentificationNumber,'dispatchIdentificationNumber'=>$_dispatchIdentificationNumber),false);
    }
    /**
     * Get shipmentIdentificationNumber value
     * @return string|null
     */
    public function getShipmentIdentificationNumber()
    {
        return $this->shipmentIdentificationNumber;
    }
    /**
     * Set shipmentIdentificationNumber value
     * @param string $_shipmentIdentificationNumber the shipmentIdentificationNumber
     * @return string
     */
    public function setShipmentIdentificationNumber($_shipmentIdentificationNumber)
    {
        return ($this->shipmentIdentificationNumber = $_shipmentIdentificationNumber);
    }
    /**
     * Get dispatchIdentificationNumber value
     * @return string|null
     */
    public function getDispatchIdentificationNumber()
    {
        return $this->dispatchIdentificationNumber;
    }
    /**
     * Set dispatchIdentificationNumber value
     * @param string $_dispatchIdentificationNumber the dispatchIdentificationNumber
     * @return string
     */
    public function setDispatchIdentificationNumber($_dispatchIdentificationNumber)
    {
        return ($this->dispatchIdentificationNumber = $_dispatchIdentificationNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteShipmentRequest
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
