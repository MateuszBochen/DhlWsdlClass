<?php
/**
 * File for class DhlWsdlClassStructGetShipmentScan
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetShipmentScan originally named getShipmentScan
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetShipmentScan extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentId;
    /**
     * Constructor method for getShipmentScan
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param string $_shipmentId
     * @return DhlWsdlClassStructGetShipmentScan
     */
    public function __construct($_authData = NULL,$_shipmentId = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'shipmentId'=>$_shipmentId),false);
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
     * Get shipmentId value
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
    /**
     * Set shipmentId value
     * @param string $_shipmentId the shipmentId
     * @return string
     */
    public function setShipmentId($_shipmentId)
    {
        return ($this->shipmentId = $_shipmentId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetShipmentScan
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
