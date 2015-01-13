<?php
/**
 * File for class DhlWsdlClassStructCreateShipmentRequest
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructCreateShipmentRequest originally named CreateShipmentRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructCreateShipmentRequest extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentInfo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructShipmentInfo
     */
    public $shipmentInfo;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $content;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $comment;
    /**
     * The reference
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $reference;
    /**
     * The ship
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructShip
     */
    public $ship;
    /**
     * The pieceList
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfPackage
     */
    public $pieceList;
    /**
     * Constructor method for CreateShipmentRequest
     * @see parent::__construct()
     * @param DhlWsdlClassStructShipmentInfo $_shipmentInfo
     * @param string $_content
     * @param string $_comment
     * @param string $_reference
     * @param DhlWsdlClassStructShip $_ship
     * @param DhlWsdlClassStructArrayOfPackage $_pieceList
     * @return DhlWsdlClassStructCreateShipmentRequest
     */
    public function __construct($_shipmentInfo = NULL,$_content = NULL,$_comment = NULL,$_reference = NULL,$_ship = NULL,$_pieceList = NULL)
    {
        parent::__construct(array('shipmentInfo'=>$_shipmentInfo,'content'=>$_content,'comment'=>$_comment,'reference'=>$_reference,'ship'=>$_ship,'pieceList'=>($_pieceList instanceof DhlWsdlClassStructArrayOfPackage)?$_pieceList:new DhlWsdlClassStructArrayOfPackage($_pieceList)),false);
    }
    /**
     * Get shipmentInfo value
     * @return DhlWsdlClassStructShipmentInfo|null
     */
    public function getShipmentInfo()
    {
        return $this->shipmentInfo;
    }
    /**
     * Set shipmentInfo value
     * @param DhlWsdlClassStructShipmentInfo $_shipmentInfo the shipmentInfo
     * @return DhlWsdlClassStructShipmentInfo
     */
    public function setShipmentInfo($_shipmentInfo)
    {
        return ($this->shipmentInfo = $_shipmentInfo);
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $_content the content
     * @return string
     */
    public function setContent($_content)
    {
        return ($this->content = $_content);
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $_comment the comment
     * @return string
     */
    public function setComment($_comment)
    {
        return ($this->comment = $_comment);
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $_reference the reference
     * @return string
     */
    public function setReference($_reference)
    {
        return ($this->reference = $_reference);
    }
    /**
     * Get ship value
     * @return DhlWsdlClassStructShip|null
     */
    public function getShip()
    {
        return $this->ship;
    }
    /**
     * Set ship value
     * @param DhlWsdlClassStructShip $_ship the ship
     * @return DhlWsdlClassStructShip
     */
    public function setShip($_ship)
    {
        return ($this->ship = $_ship);
    }
    /**
     * Get pieceList value
     * @return DhlWsdlClassStructArrayOfPackage|null
     */
    public function getPieceList()
    {
        return $this->pieceList;
    }
    /**
     * Set pieceList value
     * @param DhlWsdlClassStructArrayOfPackage $_pieceList the pieceList
     * @return DhlWsdlClassStructArrayOfPackage
     */
    public function setPieceList($_pieceList)
    {
        return ($this->pieceList = $_pieceList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructCreateShipmentRequest
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
