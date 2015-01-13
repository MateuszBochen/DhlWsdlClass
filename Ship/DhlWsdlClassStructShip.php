<?php
/**
 * File for class DhlWsdlClassStructShip
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShip originally named Ship
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShip extends DhlWsdlClassWsdlClass
{
    /**
     * The shipper
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAddressat
     */
    public $shipper;
    /**
     * The receiver
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructReceiverAddressat
     */
    public $receiver;
    /**
     * The neighbour
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructNeighbourAddress
     */
    public $neighbour;
    /**
     * Constructor method for Ship
     * @see parent::__construct()
     * @param DhlWsdlClassStructAddressat $_shipper
     * @param DhlWsdlClassStructReceiverAddressat $_receiver
     * @param DhlWsdlClassStructNeighbourAddress $_neighbour
     * @return DhlWsdlClassStructShip
     */
    public function __construct($_shipper = NULL,$_receiver = NULL,$_neighbour = NULL)
    {
        parent::__construct(array('shipper'=>$_shipper,'receiver'=>$_receiver,'neighbour'=>$_neighbour),false);
    }
    /**
     * Get shipper value
     * @return DhlWsdlClassStructAddressat|null
     */
    public function getShipper()
    {
        return $this->shipper;
    }
    /**
     * Set shipper value
     * @param DhlWsdlClassStructAddressat $_shipper the shipper
     * @return DhlWsdlClassStructAddressat
     */
    public function setShipper($_shipper)
    {
        return ($this->shipper = $_shipper);
    }
    /**
     * Get receiver value
     * @return DhlWsdlClassStructReceiverAddressat|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param DhlWsdlClassStructReceiverAddressat $_receiver the receiver
     * @return DhlWsdlClassStructReceiverAddressat
     */
    public function setReceiver($_receiver)
    {
        return ($this->receiver = $_receiver);
    }
    /**
     * Get neighbour value
     * @return DhlWsdlClassStructNeighbourAddress|null
     */
    public function getNeighbour()
    {
        return $this->neighbour;
    }
    /**
     * Set neighbour value
     * @param DhlWsdlClassStructNeighbourAddress $_neighbour the neighbour
     * @return DhlWsdlClassStructNeighbourAddress
     */
    public function setNeighbour($_neighbour)
    {
        return ($this->neighbour = $_neighbour);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructShip
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
