<?php

namespace DhlWsdlClass\TestLib;

class CreateShipmentRequest
{

    /**
     * @var ShipmentInfo $shipmentInfo
     */
    protected $shipmentInfo = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var Ship $ship
     */
    protected $ship = null;

    /**
     * @var ArrayOfPackage $pieceList
     */
    protected $pieceList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo()
    {
      return $this->shipmentInfo;
    }

    /**
     * @param ShipmentInfo $shipmentInfo
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setShipmentInfo($shipmentInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return Ship
     */
    public function getShip()
    {
      return $this->ship;
    }

    /**
     * @param Ship $ship
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setShip($ship)
    {
      $this->ship = $ship;
      return $this;
    }

    /**
     * @return ArrayOfPackage
     */
    public function getPieceList()
    {
      return $this->pieceList;
    }

    /**
     * @param ArrayOfPackage $pieceList
     * @return \DhlWsdlClass\TestLib\CreateShipmentRequest
     */
    public function setPieceList($pieceList)
    {
      $this->pieceList = $pieceList;
      return $this;
    }

}
