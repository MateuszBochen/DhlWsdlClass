<?php
/**
 * File for class DhlWsdlClassStructDeleteShipmentResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteShipmentResponse originally named deleteShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteShipmentResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The deleteShipmentResult
     * @var DhlWsdlClassStructDeleteShipmentResponse_1
     */
    public $deleteShipmentResult;
    /**
     * Constructor method for deleteShipmentResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructDeleteShipmentResponse_1 $_deleteShipmentResult
     * @return DhlWsdlClassStructDeleteShipmentResponse
     */
    public function __construct($_deleteShipmentResult = NULL)
    {
        parent::__construct(array('deleteShipmentResult'=>$_deleteShipmentResult),false);
    }
    /**
     * Get deleteShipmentResult value
     * @return DhlWsdlClassStructDeleteShipmentResponse_1|null
     */
    public function getDeleteShipmentResult()
    {
        return $this->deleteShipmentResult;
    }
    /**
     * Set deleteShipmentResult value
     * @param DhlWsdlClassStructDeleteShipmentResponse_1 $_deleteShipmentResult the deleteShipmentResult
     * @return DhlWsdlClassStructDeleteShipmentResponse_1
     */
    public function setDeleteShipmentResult($_deleteShipmentResult)
    {
        return ($this->deleteShipmentResult = $_deleteShipmentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteShipmentResponse
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
