<?php
/**
 * File for class DhlWsdlClassStructGetPostalCodeServicesResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetPostalCodeServicesResponse originally named getPostalCodeServicesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetPostalCodeServicesResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getPostalCodeServicesResult
     * @var DhlWsdlClassStructPostalCodeServicesResponse
     */
    public $getPostalCodeServicesResult;
    /**
     * Constructor method for getPostalCodeServicesResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructPostalCodeServicesResponse $_getPostalCodeServicesResult
     * @return DhlWsdlClassStructGetPostalCodeServicesResponse
     */
    public function __construct($_getPostalCodeServicesResult = NULL)
    {
        parent::__construct(array('getPostalCodeServicesResult'=>$_getPostalCodeServicesResult),false);
    }
    /**
     * Get getPostalCodeServicesResult value
     * @return DhlWsdlClassStructPostalCodeServicesResponse|null
     */
    public function getGetPostalCodeServicesResult()
    {
        return $this->getPostalCodeServicesResult;
    }
    /**
     * Set getPostalCodeServicesResult value
     * @param DhlWsdlClassStructPostalCodeServicesResponse $_getPostalCodeServicesResult the getPostalCodeServicesResult
     * @return DhlWsdlClassStructPostalCodeServicesResponse
     */
    public function setGetPostalCodeServicesResult($_getPostalCodeServicesResult)
    {
        return ($this->getPostalCodeServicesResult = $_getPostalCodeServicesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetPostalCodeServicesResponse
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
