<?php
/**
 * File for class DhlWsdlClassStructTrackAndTraceResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructTrackAndTraceResponse originally named TrackAndTraceResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructTrackAndTraceResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentId;
    /**
     * The receivedBy
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $receivedBy;
    /**
     * The events
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfTrackandtraceevent
     */
    public $events;
    /**
     * Constructor method for TrackAndTraceResponse
     * @see parent::__construct()
     * @param string $_shipmentId
     * @param string $_receivedBy
     * @param DhlWsdlClassStructArrayOfTrackandtraceevent $_events
     * @return DhlWsdlClassStructTrackAndTraceResponse
     */
    public function __construct($_shipmentId = NULL,$_receivedBy = NULL,$_events = NULL)
    {
        parent::__construct(array('shipmentId'=>$_shipmentId,'receivedBy'=>$_receivedBy,'events'=>($_events instanceof DhlWsdlClassStructArrayOfTrackandtraceevent)?$_events:new DhlWsdlClassStructArrayOfTrackandtraceevent($_events)),false);
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
     * Get receivedBy value
     * @return string|null
     */
    public function getReceivedBy()
    {
        return $this->receivedBy;
    }
    /**
     * Set receivedBy value
     * @param string $_receivedBy the receivedBy
     * @return string
     */
    public function setReceivedBy($_receivedBy)
    {
        return ($this->receivedBy = $_receivedBy);
    }
    /**
     * Get events value
     * @return DhlWsdlClassStructArrayOfTrackandtraceevent|null
     */
    public function getEvents()
    {
        return $this->events;
    }
    /**
     * Set events value
     * @param DhlWsdlClassStructArrayOfTrackandtraceevent $_events the events
     * @return DhlWsdlClassStructArrayOfTrackandtraceevent
     */
    public function setEvents($_events)
    {
        return ($this->events = $_events);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructTrackAndTraceResponse
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
