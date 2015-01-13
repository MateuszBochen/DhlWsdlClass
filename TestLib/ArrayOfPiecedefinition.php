<?php

namespace DhlWsdlClass\TestLib;

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
     * @return \DhlWsdlClass\TestLib\ArrayOfPiecedefinition
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
