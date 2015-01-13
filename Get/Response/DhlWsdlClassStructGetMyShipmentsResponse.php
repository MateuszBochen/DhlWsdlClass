<?php
/**
 * File for class DhlWsdlClassStructGetMyShipmentsResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetMyShipmentsResponse originally named getMyShipmentsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetMyShipmentsResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getMyShipmentsResult
     * @var DhlWsdlClassStructArrayOfShipmentbasicdata
     */
    public $getMyShipmentsResult;
    /**
     * Constructor method for getMyShipmentsResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructArrayOfShipmentbasicdata $_getMyShipmentsResult
     * @return DhlWsdlClassStructGetMyShipmentsResponse
     */
    public function __construct($_getMyShipmentsResult = NULL)
    {
        parent::__construct(array('getMyShipmentsResult'=>($_getMyShipmentsResult instanceof DhlWsdlClassStructArrayOfShipmentbasicdata)?$_getMyShipmentsResult:new DhlWsdlClassStructArrayOfShipmentbasicdata($_getMyShipmentsResult)),false);
    }
    /**
     * Get getMyShipmentsResult value
     * @return DhlWsdlClassStructArrayOfShipmentbasicdata|null
     */
    public function getGetMyShipmentsResult()
    {
        return $this->getMyShipmentsResult;
    }
    /**
     * Set getMyShipmentsResult value
     * @param DhlWsdlClassStructArrayOfShipmentbasicdata $_getMyShipmentsResult the getMyShipmentsResult
     * @return DhlWsdlClassStructArrayOfShipmentbasicdata
     */
    public function setGetMyShipmentsResult($_getMyShipmentsResult)
    {
        return ($this->getMyShipmentsResult = $_getMyShipmentsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetMyShipmentsResponse
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
