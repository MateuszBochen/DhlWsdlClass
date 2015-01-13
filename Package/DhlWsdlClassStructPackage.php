<?php
/**
 * File for class DhlWsdlClassStructPackage
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPackage originally named Package
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPackage extends DhlWsdlClassWsdlClass
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $type;
    /**
     * The euroReturn
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $euroReturn;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $weight;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $width;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $height;
    /**
     * The length
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $length;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $quantity;
    /**
     * The nonStandard
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $nonStandard;
    /**
     * The blpPieceId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $blpPieceId;
    /**
     * Constructor method for Package
     * @see parent::__construct()
     * @param string $_type
     * @param boolean $_euroReturn
     * @param int $_weight
     * @param int $_width
     * @param int $_height
     * @param int $_length
     * @param int $_quantity
     * @param boolean $_nonStandard
     * @param string $_blpPieceId
     * @return DhlWsdlClassStructPackage
     */
    public function __construct($_type = NULL,$_euroReturn = NULL,$_weight = NULL,$_width = NULL,$_height = NULL,$_length = NULL,$_quantity = NULL,$_nonStandard = NULL,$_blpPieceId = NULL)
    {
        parent::__construct(array('type'=>$_type,'euroReturn'=>$_euroReturn,'weight'=>$_weight,'width'=>$_width,'height'=>$_height,'length'=>$_length,'quantity'=>$_quantity,'nonStandard'=>$_nonStandard,'blpPieceId'=>$_blpPieceId),false);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $_type the type
     * @return string
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Get euroReturn value
     * @return boolean|null
     */
    public function getEuroReturn()
    {
        return $this->euroReturn;
    }
    /**
     * Set euroReturn value
     * @param boolean $_euroReturn the euroReturn
     * @return boolean
     */
    public function setEuroReturn($_euroReturn)
    {
        return ($this->euroReturn = $_euroReturn);
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $_weight the weight
     * @return int
     */
    public function setWeight($_weight)
    {
        return ($this->weight = $_weight);
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $_width the width
     * @return int
     */
    public function setWidth($_width)
    {
        return ($this->width = $_width);
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $_height the height
     * @return int
     */
    public function setHeight($_height)
    {
        return ($this->height = $_height);
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $_length the length
     * @return int
     */
    public function setLength($_length)
    {
        return ($this->length = $_length);
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $_quantity the quantity
     * @return int
     */
    public function setQuantity($_quantity)
    {
        return ($this->quantity = $_quantity);
    }
    /**
     * Get nonStandard value
     * @return boolean|null
     */
    public function getNonStandard()
    {
        return $this->nonStandard;
    }
    /**
     * Set nonStandard value
     * @param boolean $_nonStandard the nonStandard
     * @return boolean
     */
    public function setNonStandard($_nonStandard)
    {
        return ($this->nonStandard = $_nonStandard);
    }
    /**
     * Get blpPieceId value
     * @return string|null
     */
    public function getBlpPieceId()
    {
        return $this->blpPieceId;
    }
    /**
     * Set blpPieceId value
     * @param string $_blpPieceId the blpPieceId
     * @return string
     */
    public function setBlpPieceId($_blpPieceId)
    {
        return ($this->blpPieceId = $_blpPieceId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPackage
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
