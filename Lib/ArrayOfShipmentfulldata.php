<?php

namespace DhlWsdlClass\Lib;

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
     * @return \DhlWsdlClass\Lib\ArrayOfShipmentfulldata
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
