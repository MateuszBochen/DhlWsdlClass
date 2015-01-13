<?php

namespace DhlWsdlClass\TestLib;

class ArrayOfItemtoprint
{

    /**
     * @var ItemToPrint[] $item
     */
    protected $item = null;

    /**
     * @param ItemToPrint[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return ItemToPrint[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemToPrint[] $item
     * @return \DhlWsdlClass\TestLib\ArrayOfItemtoprint
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
