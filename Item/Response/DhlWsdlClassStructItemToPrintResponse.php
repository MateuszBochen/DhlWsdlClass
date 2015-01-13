<?php
/**
 * File for class DhlWsdlClassStructItemToPrintResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructItemToPrintResponse originally named ItemToPrintResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructItemToPrintResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentId;
    /**
     * The labelType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelType;
    /**
     * The labelName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelName;
    /**
     * The labelData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelData;
    /**
     * The labelMimeType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelMimeType;
    /**
     * Constructor method for ItemToPrintResponse
     * @see parent::__construct()
     * @param string $_shipmentId
     * @param string $_labelType
     * @param string $_labelName
     * @param string $_labelData
     * @param string $_labelMimeType
     * @return DhlWsdlClassStructItemToPrintResponse
     */
    public function __construct($_shipmentId = NULL,$_labelType = NULL,$_labelName = NULL,$_labelData = NULL,$_labelMimeType = NULL)
    {
        parent::__construct(array('shipmentId'=>$_shipmentId,'labelType'=>$_labelType,'labelName'=>$_labelName,'labelData'=>$_labelData,'labelMimeType'=>$_labelMimeType),false);
    }
    /**
     * Get shipmentId value
     * @return string|null
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
    /**
     * Set shipmentId value
     * @param string $_shipmentId the shipmentId
     * @return string
     */
    public function setShipmentId($_shipmentId)
    {
        return ($this->shipmentId = $_shipmentId);
    }
    /**
     * Get labelType value
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->labelType;
    }
    /**
     * Set labelType value
     * @param string $_labelType the labelType
     * @return string
     */
    public function setLabelType($_labelType)
    {
        return ($this->labelType = $_labelType);
    }
    /**
     * Get labelName value
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->labelName;
    }
    /**
     * Set labelName value
     * @param string $_labelName the labelName
     * @return string
     */
    public function setLabelName($_labelName)
    {
        return ($this->labelName = $_labelName);
    }
    /**
     * Get labelData value
     * @return string|null
     */
    public function getLabelData()
    {
        return $this->labelData;
    }
    /**
     * Set labelData value
     * @param string $_labelData the labelData
     * @return string
     */
    public function setLabelData($_labelData)
    {
        return ($this->labelData = $_labelData);
    }
    /**
     * Get labelMimeType value
     * @return string|null
     */
    public function getLabelMimeType()
    {
        return $this->labelMimeType;
    }
    /**
     * Set labelMimeType value
     * @param string $_labelMimeType the labelMimeType
     * @return string
     */
    public function setLabelMimeType($_labelMimeType)
    {
        return ($this->labelMimeType = $_labelMimeType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructItemToPrintResponse
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
