<?php
/**
 * File for class DhlWsdlClassStructShipmentFullData
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShipmentFullData originally named ShipmentFullData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShipmentFullData extends DhlWsdlClassWsdlClass
{
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
     * @var DhlWsdlClassStructReceiverAddressData
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
     * The pieceList
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfPiecedefinition
     */
    public $pieceList;
    /**
     * The payment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructPaymentData
     */
    public $payment;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructServiceDefinition
     */
    public $service;
    /**
     * The shipmentDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentDate;
    /**
     * The skipRestrictionCheck
     * @var boolean
     */
    public $skipRestrictionCheck;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $comment;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $content;
    /**
     * The reference
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $reference;
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
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
     * The orderStatus
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $orderStatus;
    /**
     * Constructor method for ShipmentFullData
     * @see parent::__construct()
     * @param DhlWsdlClassStructAddressData $_shipper
     * @param DhlWsdlClassStructReceiverAddressData $_receiver
     * @param DhlWsdlClassStructNeighbourAddress $_neighbour
     * @param DhlWsdlClassStructArrayOfPiecedefinition $_pieceList
     * @param DhlWsdlClassStructPaymentData $_payment
     * @param DhlWsdlClassStructServiceDefinition $_service
     * @param string $_shipmentDate
     * @param boolean $_skipRestrictionCheck
     * @param string $_comment
     * @param string $_content
     * @param string $_reference
     * @param int $_shipmentId
     * @param string $_created
     * @param string $_orderStatus
     * @return DhlWsdlClassStructShipmentFullData
     */
    public function __construct($_shipper = NULL,$_receiver = NULL,$_neighbour = NULL,$_pieceList = NULL,$_payment = NULL,$_service = NULL,$_shipmentDate = NULL,$_skipRestrictionCheck = NULL,$_comment = NULL,$_content = NULL,$_reference = NULL,$_shipmentId = NULL,$_created = NULL,$_orderStatus = NULL)
    {
        parent::__construct(array('shipper'=>$_shipper,'receiver'=>$_receiver,'neighbour'=>$_neighbour,'pieceList'=>($_pieceList instanceof DhlWsdlClassStructArrayOfPiecedefinition)?$_pieceList:new DhlWsdlClassStructArrayOfPiecedefinition($_pieceList),'payment'=>$_payment,'service'=>$_service,'shipmentDate'=>$_shipmentDate,'skipRestrictionCheck'=>$_skipRestrictionCheck,'comment'=>$_comment,'content'=>$_content,'reference'=>$_reference,'shipmentId'=>$_shipmentId,'created'=>$_created,'orderStatus'=>$_orderStatus),false);
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
     * @return DhlWsdlClassStructReceiverAddressData|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param DhlWsdlClassStructReceiverAddressData $_receiver the receiver
     * @return DhlWsdlClassStructReceiverAddressData
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
     * Get pieceList value
     * @return DhlWsdlClassStructArrayOfPiecedefinition|null
     */
    public function getPieceList()
    {
        return $this->pieceList;
    }
    /**
     * Set pieceList value
     * @param DhlWsdlClassStructArrayOfPiecedefinition $_pieceList the pieceList
     * @return DhlWsdlClassStructArrayOfPiecedefinition
     */
    public function setPieceList($_pieceList)
    {
        return ($this->pieceList = $_pieceList);
    }
    /**
     * Get payment value
     * @return DhlWsdlClassStructPaymentData|null
     */
    public function getPayment()
    {
        return $this->payment;
    }
    /**
     * Set payment value
     * @param DhlWsdlClassStructPaymentData $_payment the payment
     * @return DhlWsdlClassStructPaymentData
     */
    public function setPayment($_payment)
    {
        return ($this->payment = $_payment);
    }
    /**
     * Get service value
     * @return DhlWsdlClassStructServiceDefinition|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param DhlWsdlClassStructServiceDefinition $_service the service
     * @return DhlWsdlClassStructServiceDefinition
     */
    public function setService($_service)
    {
        return ($this->service = $_service);
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
     * Get skipRestrictionCheck value
     * @return boolean|null
     */
    public function getSkipRestrictionCheck()
    {
        return $this->skipRestrictionCheck;
    }
    /**
     * Set skipRestrictionCheck value
     * @param boolean $_skipRestrictionCheck the skipRestrictionCheck
     * @return boolean
     */
    public function setSkipRestrictionCheck($_skipRestrictionCheck)
    {
        return ($this->skipRestrictionCheck = $_skipRestrictionCheck);
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $_comment the comment
     * @return string
     */
    public function setComment($_comment)
    {
        return ($this->comment = $_comment);
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $_content the content
     * @return string
     */
    public function setContent($_content)
    {
        return ($this->content = $_content);
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $_reference the reference
     * @return string
     */
    public function setReference($_reference)
    {
        return ($this->reference = $_reference);
    }
    /**
     * Get shipmentId value
     * @return int|null
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
    /**
     * Set shipmentId value
     * @param int $_shipmentId the shipmentId
     * @return int
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
     * @return DhlWsdlClassStructShipmentFullData
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
