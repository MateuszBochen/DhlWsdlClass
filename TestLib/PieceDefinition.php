<?php

namespace DhlWsdlClass\TestLib;

class PieceDefinition
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @var int $weight
     */
    protected $weight = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var boolean $nonStandard
     */
    protected $nonStandard = null;

    /**
     * @var string $blpPieceId
     */
    protected $blpPieceId = null;

    /**
     * @var boolean $euroReturn
     */
    protected $euroReturn = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param int $length
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonStandard()
    {
      return $this->nonStandard;
    }

    /**
     * @param boolean $nonStandard
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setNonStandard($nonStandard)
    {
      $this->nonStandard = $nonStandard;
      return $this;
    }

    /**
     * @return string
     */
    public function getBlpPieceId()
    {
      return $this->blpPieceId;
    }

    /**
     * @param string $blpPieceId
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setBlpPieceId($blpPieceId)
    {
      $this->blpPieceId = $blpPieceId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEuroReturn()
    {
      return $this->euroReturn;
    }

    /**
     * @param boolean $euroReturn
     * @return \DhlWsdlClass\TestLib\PieceDefinition
     */
    public function setEuroReturn($euroReturn)
    {
      $this->euroReturn = $euroReturn;
      return $this;
    }

}
