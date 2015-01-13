<?php
/**
 * File for class DhlWsdlClassStructShipmentBasicData
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShipmentBasicData originally named ShipmentBasicData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShipmentBasicData extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentId;
    /**
     * The created
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $created;
    /**
     * The shipper
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAddressData
     */
    public $shipper;
    /**
     * The receiver
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAddressData
     */
    public $receiver;
    /**
     * The orderStatus
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $orderStatus;
    /**
     * Constructor method for ShipmentBasicData
     * @see parent::__construct()
     * @param string $_shipmentId
     * @param string $_created
     * @param DhlWsdlClassStructAddressData $_shipper
     * @param DhlWsdlClassStructAddressData $_receiver
     * @param string $_orderStatus
     * @return DhlWsdlClassStructShipmentBasicData
     */
    public function __construct($_shipmentId = NULL,$_created = NULL,$_shipper = NULL,$_receiver = NULL,$_orderStatus = NULL)
    {
        parent::__construct(array('shipmentId'=>$_shipmentId,'created'=>$_created,'shipper'=>$_shipper,'receiver'=>$_receiver,'orderStatus'=>$_orderStatus),false);
    }
    /**
     * Get shipmentId value
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
    /**
     * Set shipmentId value
     * @param string $_shipmentId the shipmentId
     * @return string
     */
    public function setShipmentId($_shipmentId)
    {
        return ($this->shipmentId = $_shipmentId);
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $_created the created
     * @return string
     */
    public function setCreated($_created)
    {
        return ($this->created = $_created);
    }
    /**
     * Get shipper value
     * @return DhlWsdlClassStructAddressData|null
     */
    public function getShipper()
    {
        return $this->shipper;
    }
    /**
     * Set shipper value
     * @param DhlWsdlClassStructAddressData $_shipper the shipper
     * @return DhlWsdlClassStructAddressData
     */
    public function setShipper($_shipper)
    {
        return ($this->shipper = $_shipper);
    }
    /**
     * Get receiver value
     * @return DhlWsdlClassStructAddressData|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param DhlWsdlClassStructAddressData $_receiver the receiver
     * @return DhlWsdlClassStructAddressData
     */
    public function setReceiver($_receiver)
    {
        return ($this->receiver = $_receiver);
    }
    /**
     * Get orderStatus value
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }
    /**
     * Set orderStatus value
     * @param string $_orderStatus the orderStatus
     * @return string
     */
    public function setOrderStatus($_orderStatus)
    {
        return ($this->orderStatus = $_orderStatus);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructShipmentBasicData
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
