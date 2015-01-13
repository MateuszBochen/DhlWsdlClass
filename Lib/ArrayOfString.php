<?php

namespace Lib;

class ArrayOfString
{

    /**
     * @var string[] $item
     */
    protected $item = null;

    /**
     * @param string[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string[] $item
     * @return \Lib\ArrayOfString
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
