<?php

namespace DhlWsdlClass\Lib;

class ArrayOfItemtoprintresponse
{

    /**
     * @var ItemToPrintResponse[] $item
     */
    protected $item = null;

    /**
     * @param ItemToPrintResponse[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return ItemToPrintResponse[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemToPrintResponse[] $item
     * @return \DhlWsdlClass\Lib\ArrayOfItemtoprintresponse
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
