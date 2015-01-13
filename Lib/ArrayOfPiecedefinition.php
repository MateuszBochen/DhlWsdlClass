<?php

namespace DhlWsdlClass;

class ArrayOfPiecedefinition
{

    /**
     * @var PieceDefinition[] $item
     */
    protected $item = null;

    /**
     * @param PieceDefinition[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return PieceDefinition[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PieceDefinition[] $item
     * @return \DhlWsdlClass\ArrayOfPiecedefinition
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
