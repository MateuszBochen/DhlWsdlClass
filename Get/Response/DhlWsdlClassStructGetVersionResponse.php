<?php
/**
 * File for class DhlWsdlClassStructGetVersionResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetVersionResponse originally named getVersionResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetVersionResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getVersionResult
     * @var string
     */
    public $getVersionResult;
    /**
     * Constructor method for getVersionResponse
     * @see parent::__construct()
     * @param string $_getVersionResult
     * @return DhlWsdlClassStructGetVersionResponse
     */
    public function __construct($_getVersionResult = NULL)
    {
        parent::__construct(array('getVersionResult'=>$_getVersionResult),false);
    }
    /**
     * Get getVersionResult value
     * @return string|null
     */
    public function getGetVersionResult()
    {
        return $this->getVersionResult;
    }
    /**
     * Set getVersionResult value
     * @param string $_getVersionResult the getVersionResult
     * @return string
     */
    public function setGetVersionResult($_getVersionResult)
    {
        return ($this->getVersionResult = $_getVersionResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetVersionResponse
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
