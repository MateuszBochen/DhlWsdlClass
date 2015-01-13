<?php

namespace Lib;

class Ship
{

    /**
     * @var Addressat $shipper
     */
    protected $shipper = null;

    /**
     * @var ReceiverAddressat $receiver
     */
    protected $receiver = null;

    /**
     * @var NeighbourAddress $neighbour
     */
    protected $neighbour = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Addressat
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param Addressat $shipper
     * @return \Lib\Ship
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReceiverAddressat
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReceiverAddressat $receiver
     * @return \Lib\Ship
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return NeighbourAddress
     */
    public function getNeighbour()
    {
      return $this->neighbour;
    }

    /**
     * @param NeighbourAddress $neighbour
     * @return \Lib\Ship
     */
    public function setNeighbour($neighbour)
    {
      $this->neighbour = $neighbour;
      return $this;
    }

}
