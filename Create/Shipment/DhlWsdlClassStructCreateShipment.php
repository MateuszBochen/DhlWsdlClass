<?php
/**
 * File for class DhlWsdlClassStructCreateShipment
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructCreateShipment originally named createShipment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructCreateShipment extends DhlWsdlClassWsdlClass
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
     * @var DhlWsdlClassStructCreateShipmentRequest
     */
    public $shipment;
    /**
     * Constructor method for createShipment
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param DhlWsdlClassStructCreateShipmentRequest $_shipment
     * @return DhlWsdlClassStructCreateShipment
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
     * @return DhlWsdlClassStructCreateShipmentRequest|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }
    /**
     * Set shipment value
     * @param DhlWsdlClassStructCreateShipmentRequest $_shipment the shipment
     * @return DhlWsdlClassStructCreateShipmentRequest
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
     * @return DhlWsdlClassStructCreateShipment
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
