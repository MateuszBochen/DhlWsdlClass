<?php
/**
 * File for class DhlWsdlClassStructShipmentInfo
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShipmentInfo originally named ShipmentInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShipmentInfo extends DhlWsdlClassWsdlClass
{
    /**
     * The dropOffType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $dropOffType;
    /**
     * The serviceType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $serviceType;
    /**
     * The billing
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructBilling
     */
    public $billing;
    /**
     * The specialServices
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfService
     */
    public $specialServices;
    /**
     * The shipmentTime
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructShipmentTime
     */
    public $shipmentTime;
    /**
     * The labelType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $labelType;
    /**
     * Constructor method for ShipmentInfo
     * @see parent::__construct()
     * @param string $_dropOffType
     * @param string $_serviceType
     * @param DhlWsdlClassStructBilling $_billing
     * @param DhlWsdlClassStructArrayOfService $_specialServices
     * @param DhlWsdlClassStructShipmentTime $_shipmentTime
     * @param string $_labelType
     * @return DhlWsdlClassStructShipmentInfo
     */
    public function __construct($_dropOffType = NULL,$_serviceType = NULL,$_billing = NULL,$_specialServices = NULL,$_shipmentTime = NULL,$_labelType = NULL)
    {
        parent::__construct(array('dropOffType'=>$_dropOffType,'serviceType'=>$_serviceType,'billing'=>$_billing,'specialServices'=>($_specialServices instanceof DhlWsdlClassStructArrayOfService)?$_specialServices:new DhlWsdlClassStructArrayOfService($_specialServices),'shipmentTime'=>$_shipmentTime,'labelType'=>$_labelType),false);
    }
    /**
     * Get dropOffType value
     * @return string|null
     */
    public function getDropOffType()
    {
        return $this->dropOffType;
    }
    /**
     * Set dropOffType value
     * @param string $_dropOffType the dropOffType
     * @return string
     */
    public function setDropOffType($_dropOffType)
    {
        return ($this->dropOffType = $_dropOffType);
    }
    /**
     * Get serviceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }
    /**
     * Set serviceType value
     * @param string $_serviceType the serviceType
     * @return string
     */
    public function setServiceType($_serviceType)
    {
        return ($this->serviceType = $_serviceType);
    }
    /**
     * Get billing value
     * @return DhlWsdlClassStructBilling|null
     */
    public function getBilling()
    {
        return $this->billing;
    }
    /**
     * Set billing value
     * @param DhlWsdlClassStructBilling $_billing the billing
     * @return DhlWsdlClassStructBilling
     */
    public function setBilling($_billing)
    {
        return ($this->billing = $_billing);
    }
    /**
     * Get specialServices value
     * @return DhlWsdlClassStructArrayOfService|null
     */
    public function getSpecialServices()
    {
        return $this->specialServices;
    }
    /**
     * Set specialServices value
     * @param DhlWsdlClassStructArrayOfService $_specialServices the specialServices
     * @return DhlWsdlClassStructArrayOfService
     */
    public function setSpecialServices($_specialServices)
    {
        return ($this->specialServices = $_specialServices);
    }
    /**
     * Get shipmentTime value
     * @return DhlWsdlClassStructShipmentTime|null
     */
    public function getShipmentTime()
    {
        return $this->shipmentTime;
    }
    /**
     * Set shipmentTime value
     * @param DhlWsdlClassStructShipmentTime $_shipmentTime the shipmentTime
     * @return DhlWsdlClassStructShipmentTime
     */
    public function setShipmentTime($_shipmentTime)
    {
        return ($this->shipmentTime = $_shipmentTime);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructShipmentInfo
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
