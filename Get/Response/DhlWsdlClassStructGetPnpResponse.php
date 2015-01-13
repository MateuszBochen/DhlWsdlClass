<?php
/**
 * File for class DhlWsdlClassStructGetPnpResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetPnpResponse originally named getPnpResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetPnpResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getPnpResult
     * @var DhlWsdlClassStructPnpResponse
     */
    public $getPnpResult;
    /**
     * Constructor method for getPnpResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructPnpResponse $_getPnpResult
     * @return DhlWsdlClassStructGetPnpResponse
     */
    public function __construct($_getPnpResult = NULL)
    {
        parent::__construct(array('getPnpResult'=>$_getPnpResult),false);
    }
    /**
     * Get getPnpResult value
     * @return DhlWsdlClassStructPnpResponse|null
     */
    public function getGetPnpResult()
    {
        return $this->getPnpResult;
    }
    /**
     * Set getPnpResult value
     * @param DhlWsdlClassStructPnpResponse $_getPnpResult the getPnpResult
     * @return DhlWsdlClassStructPnpResponse
     */
    public function setGetPnpResult($_getPnpResult)
    {
        return ($this->getPnpResult = $_getPnpResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetPnpResponse
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
