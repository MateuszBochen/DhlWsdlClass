<?php
/**
 * File for class DhlWsdlClassStructItemToPrint
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructItemToPrint originally named ItemToPrint
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructItemToPrint extends DhlWsdlClassWsdlClass
{
    /**
     * The labelType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelType;
    /**
     * The shipmentId
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentId;
    /**
     * Constructor method for ItemToPrint
     * @see parent::__construct()
     * @param string $_labelType
     * @param string $_shipmentId
     * @return DhlWsdlClassStructItemToPrint
     */
    public function __construct($_labelType = NULL,$_shipmentId = NULL)
    {
        parent::__construct(array('labelType'=>$_labelType,'shipmentId'=>$_shipmentId),false);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructItemToPrint
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
