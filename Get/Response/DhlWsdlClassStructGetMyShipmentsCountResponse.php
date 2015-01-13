<?php
/**
 * File for class DhlWsdlClassStructGetMyShipmentsCountResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetMyShipmentsCountResponse originally named getMyShipmentsCountResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetMyShipmentsCountResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getMyShipmentsCountResult
     * @var int
     */
    public $getMyShipmentsCountResult;
    /**
     * Constructor method for getMyShipmentsCountResponse
     * @see parent::__construct()
     * @param int $_getMyShipmentsCountResult
     * @return DhlWsdlClassStructGetMyShipmentsCountResponse
     */
    public function __construct($_getMyShipmentsCountResult = NULL)
    {
        parent::__construct(array('getMyShipmentsCountResult'=>$_getMyShipmentsCountResult),false);
    }
    /**
     * Get getMyShipmentsCountResult value
     * @return int|null
     */
    public function getGetMyShipmentsCountResult()
    {
        return $this->getMyShipmentsCountResult;
    }
    /**
     * Set getMyShipmentsCountResult value
     * @param int $_getMyShipmentsCountResult the getMyShipmentsCountResult
     * @return int
     */
    public function setGetMyShipmentsCountResult($_getMyShipmentsCountResult)
    {
        return ($this->getMyShipmentsCountResult = $_getMyShipmentsCountResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetMyShipmentsCountResponse
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
