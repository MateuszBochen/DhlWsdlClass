<?php
/**
 * File for class DhlWsdlClassStructShipmentTime
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShipmentTime originally named ShipmentTime
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShipmentTime extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentDate;
    /**
     * The shipmentStartHour
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentStartHour;
    /**
     * The shipmentEndHour
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentEndHour;
    /**
     * Constructor method for ShipmentTime
     * @see parent::__construct()
     * @param string $_shipmentDate
     * @param string $_shipmentStartHour
     * @param string $_shipmentEndHour
     * @return DhlWsdlClassStructShipmentTime
     */
    public function __construct($_shipmentDate = NULL,$_shipmentStartHour = NULL,$_shipmentEndHour = NULL)
    {
        parent::__construct(array('shipmentDate'=>$_shipmentDate,'shipmentStartHour'=>$_shipmentStartHour,'shipmentEndHour'=>$_shipmentEndHour),false);
    }
    /**
     * Get shipmentDate value
     * @return string|null
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }
    /**
     * Set shipmentDate value
     * @param string $_shipmentDate the shipmentDate
     * @return string
     */
    public function setShipmentDate($_shipmentDate)
    {
        return ($this->shipmentDate = $_shipmentDate);
    }
    /**
     * Get shipmentStartHour value
     * @return string|null
     */
    public function getShipmentStartHour()
    {
        return $this->shipmentStartHour;
    }
    /**
     * Set shipmentStartHour value
     * @param string $_shipmentStartHour the shipmentStartHour
     * @return string
     */
    public function setShipmentStartHour($_shipmentStartHour)
    {
        return ($this->shipmentStartHour = $_shipmentStartHour);
    }
    /**
     * Get shipmentEndHour value
     * @return string|null
     */
    public function getShipmentEndHour()
    {
        return $this->shipmentEndHour;
    }
    /**
     * Set shipmentEndHour value
     * @param string $_shipmentEndHour the shipmentEndHour
     * @return string
     */
    public function setShipmentEndHour($_shipmentEndHour)
    {
        return ($this->shipmentEndHour = $_shipmentEndHour);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructShipmentTime
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
