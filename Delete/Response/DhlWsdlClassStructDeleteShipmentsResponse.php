<?php
/**
 * File for class DhlWsdlClassStructDeleteShipmentsResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteShipmentsResponse originally named deleteShipmentsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteShipmentsResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The deleteShipmentsResult
     * @var DhlWsdlClassStructArrayOfDeletenotification
     */
    public $deleteShipmentsResult;
    /**
     * Constructor method for deleteShipmentsResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructArrayOfDeletenotification $_deleteShipmentsResult
     * @return DhlWsdlClassStructDeleteShipmentsResponse
     */
    public function __construct($_deleteShipmentsResult = NULL)
    {
        parent::__construct(array('deleteShipmentsResult'=>($_deleteShipmentsResult instanceof DhlWsdlClassStructArrayOfDeletenotification)?$_deleteShipmentsResult:new DhlWsdlClassStructArrayOfDeletenotification($_deleteShipmentsResult)),false);
    }
    /**
     * Get deleteShipmentsResult value
     * @return DhlWsdlClassStructArrayOfDeletenotification|null
     */
    public function getDeleteShipmentsResult()
    {
        return $this->deleteShipmentsResult;
    }
    /**
     * Set deleteShipmentsResult value
     * @param DhlWsdlClassStructArrayOfDeletenotification $_deleteShipmentsResult the deleteShipmentsResult
     * @return DhlWsdlClassStructArrayOfDeletenotification
     */
    public function setDeleteShipmentsResult($_deleteShipmentsResult)
    {
        return ($this->deleteShipmentsResult = $_deleteShipmentsResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteShipmentsResponse
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
