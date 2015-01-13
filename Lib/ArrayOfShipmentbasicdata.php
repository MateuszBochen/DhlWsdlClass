<?php

namespace DhlWsdlClass;

class ArrayOfShipmentbasicdata
{

    /**
     * @var ShipmentBasicData[] $item
     */
    protected $item = null;

    /**
     * @param ShipmentBasicData[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return ShipmentBasicData[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipmentBasicData[] $item
     * @return \DhlWsdlClass\ArrayOfShipmentbasicdata
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
