<?php
/**
 * File for class DhlWsdlClassStructGetShipmentScanResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetShipmentScanResponse originally named getShipmentScanResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetShipmentScanResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getShipmentScanResult
     * @var DhlWsdlClassStructScanToPrintResponse
     */
    public $getShipmentScanResult;
    /**
     * Constructor method for getShipmentScanResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructScanToPrintResponse $_getShipmentScanResult
     * @return DhlWsdlClassStructGetShipmentScanResponse
     */
    public function __construct($_getShipmentScanResult = NULL)
    {
        parent::__construct(array('getShipmentScanResult'=>$_getShipmentScanResult),false);
    }
    /**
     * Get getShipmentScanResult value
     * @return DhlWsdlClassStructScanToPrintResponse|null
     */
    public function getGetShipmentScanResult()
    {
        return $this->getShipmentScanResult;
    }
    /**
     * Set getShipmentScanResult value
     * @param DhlWsdlClassStructScanToPrintResponse $_getShipmentScanResult the getShipmentScanResult
     * @return DhlWsdlClassStructScanToPrintResponse
     */
    public function setGetShipmentScanResult($_getShipmentScanResult)
    {
        return ($this->getShipmentScanResult = $_getShipmentScanResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetShipmentScanResponse
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
