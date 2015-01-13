<?php
/**
 * File for class DhlWsdlClassStructLabel
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructLabel originally named Label
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructLabel extends DhlWsdlClassWsdlClass
{
    /**
     * The labelType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelType;
    /**
     * The labelFormat
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelFormat;
    /**
     * The labelContent
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelContent;
    /**
     * Constructor method for Label
     * @see parent::__construct()
     * @param string $_labelType
     * @param string $_labelFormat
     * @param string $_labelContent
     * @return DhlWsdlClassStructLabel
     */
    public function __construct($_labelType = NULL,$_labelFormat = NULL,$_labelContent = NULL)
    {
        parent::__construct(array('labelType'=>$_labelType,'labelFormat'=>$_labelFormat,'labelContent'=>$_labelContent),false);
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
     * Get labelFormat value
     * @return string|null
     */
    public function getLabelFormat()
    {
        return $this->labelFormat;
    }
    /**
     * Set labelFormat value
     * @param string $_labelFormat the labelFormat
     * @return string
     */
    public function setLabelFormat($_labelFormat)
    {
        return ($this->labelFormat = $_labelFormat);
    }
    /**
     * Get labelContent value
     * @return string|null
     */
    public function getLabelContent()
    {
        return $this->labelContent;
    }
    /**
     * Set labelContent value
     * @param string $_labelContent the labelContent
     * @return string
     */
    public function setLabelContent($_labelContent)
    {
        return ($this->labelContent = $_labelContent);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructLabel
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
