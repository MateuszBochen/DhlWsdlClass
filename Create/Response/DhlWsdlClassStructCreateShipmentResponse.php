<?php
/**
 * File for class DhlWsdlClassStructCreateShipmentResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructCreateShipmentResponse originally named createShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructCreateShipmentResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The createShipmentResult
     * @var DhlWsdlClassStructCreateShipmentResponse_1
     */
    public $createShipmentResult;
    /**
     * Constructor method for createShipmentResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructCreateShipmentResponse_1 $_createShipmentResult
     * @return DhlWsdlClassStructCreateShipmentResponse
     */
    public function __construct($_createShipmentResult = NULL)
    {
        parent::__construct(array('createShipmentResult'=>$_createShipmentResult),false);
    }
    /**
     * Get createShipmentResult value
     * @return DhlWsdlClassStructCreateShipmentResponse_1|null
     */
    public function getCreateShipmentResult()
    {
        return $this->createShipmentResult;
    }
    /**
     * Set createShipmentResult value
     * @param DhlWsdlClassStructCreateShipmentResponse_1 $_createShipmentResult the createShipmentResult
     * @return DhlWsdlClassStructCreateShipmentResponse_1
     */
    public function setCreateShipmentResult($_createShipmentResult)
    {
        return ($this->createShipmentResult = $_createShipmentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructCreateShipmentResponse
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
