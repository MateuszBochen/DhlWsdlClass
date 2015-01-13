<?php

namespace DhlWsdlClass\Lib;

class TrackAndTraceResponse
{

    /**
     * @var string $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $receivedBy
     */
    protected $receivedBy = null;

    /**
     * @var ArrayOfTrackandtraceevent $events
     */
    protected $events = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
      return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     * @return \DhlWsdlClass\Lib\TrackAndTraceResponse
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceivedBy()
    {
      return $this->receivedBy;
    }

    /**
     * @param string $receivedBy
     * @return \DhlWsdlClass\Lib\TrackAndTraceResponse
     */
    public function setReceivedBy($receivedBy)
    {
      $this->receivedBy = $receivedBy;
      return $this;
    }

    /**
     * @return ArrayOfTrackandtraceevent
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param ArrayOfTrackandtraceevent $events
     * @return \DhlWsdlClass\Lib\TrackAndTraceResponse
     */
    public function setEvents($events)
    {
      $this->events = $events;
      return $this;
    }

}
