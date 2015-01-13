<?php
/**
 * File for class DhlWsdlClassStructDeleteShipment
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteShipment originally named deleteShipment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteShipment extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The shipment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructDeleteShipmentRequest
     */
    public $shipment;
    /**
     * Constructor method for deleteShipment
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param DhlWsdlClassStructDeleteShipmentRequest $_shipment
     * @return DhlWsdlClassStructDeleteShipment
     */
    public function __construct($_authData = NULL,$_shipment = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'shipment'=>$_shipment),false);
    }
    /**
     * Get authData value
     * @return DhlWsdlClassStructAuthData|null
     */
    public function getAuthData()
    {
        return $this->authData;
    }
    /**
     * Set authData value
     * @param DhlWsdlClassStructAuthData $_authData the authData
     * @return DhlWsdlClassStructAuthData
     */
    public function setAuthData($_authData)
    {
        return ($this->authData = $_authData);
    }
    /**
     * Get shipment value
     * @return DhlWsdlClassStructDeleteShipmentRequest|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param DhlWsdlClassStructDeleteShipmentRequest $_shipment the shipment
     * @return DhlWsdlClassStructDeleteShipmentRequest
     */
    public function setShipment($_shipment)
    {
        return ($this->shipment = $_shipment);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteShipment
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
