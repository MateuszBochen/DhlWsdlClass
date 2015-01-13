<?php
/**
 * File for class DhlWsdlClassStructDeleteShipments
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteShipments originally named deleteShipments
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteShipments extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The shipments
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfString
     */
    public $shipments;
    /**
     * Constructor method for deleteShipments
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param DhlWsdlClassStructArrayOfString $_shipments
     * @return DhlWsdlClassStructDeleteShipments
     */
    public function __construct($_authData = NULL,$_shipments = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'shipments'=>($_shipments instanceof DhlWsdlClassStructArrayOfString)?$_shipments:new DhlWsdlClassStructArrayOfString($_shipments)),false);
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
     * Get shipments value
     * @return DhlWsdlClassStructArrayOfString|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }
    /**
     * Set shipments value
     * @param DhlWsdlClassStructArrayOfString $_shipments the shipments
     * @return DhlWsdlClassStructArrayOfString
     */
    public function setShipments($_shipments)
    {
        return ($this->shipments = $_shipments);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteShipments
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
