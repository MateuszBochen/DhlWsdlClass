<?php

namespace DhlWsdlClass\Lib;

class ArrayOfPackage
{

    /**
     * @var Package[] $item
     */
    protected $item = null;

    /**
     * @param Package[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return Package[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param Package[] $item
     * @return \DhlWsdlClass\Lib\ArrayOfPackage
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
