<?php

namespace Lib;

class ArrayOfShipmentfulldata
{

    /**
     * @var ShipmentFullData[] $item
     */
    protected $item = null;

    /**
     * @param ShipmentFullData[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return ShipmentFullData[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipmentFullData[] $item
     * @return \Lib\ArrayOfShipmentfulldata
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
