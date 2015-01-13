<?php

namespace DhlWsdlClass\TestLib;

class ArrayOfService
{

    /**
     * @var Service[] $item
     */
    protected $item = null;

    /**
     * @param Service[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return Service[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Service[] $item
     * @return \DhlWsdlClass\TestLib\ArrayOfService
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
