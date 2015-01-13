<?php

namespace DhlWsdlClass;

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
     * @return \DhlWsdlClass\ArrayOfShipmentfulldata
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
