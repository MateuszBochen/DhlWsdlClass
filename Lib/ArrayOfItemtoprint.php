<?php

namespace Lib;

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
     * @return \Lib\ArrayOfItemtoprint
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
