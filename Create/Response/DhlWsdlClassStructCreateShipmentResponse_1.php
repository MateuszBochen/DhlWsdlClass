<?php
/**
 * File for class DhlWsdlClassStructCreateShipmentResponse_1
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructCreateShipmentResponse_1 originally named CreateShipmentResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructCreateShipmentResponse_1 extends DhlWsdlClassWsdlClass
{
    /**
     * The shipmentNotificationNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentNotificationNumber;
    /**
     * The shipmentTrackingNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $shipmentTrackingNumber;
    /**
     * The packagesTrackingNumbers
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $packagesTrackingNumbers;
    /**
     * The dispatchNotificationNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $dispatchNotificationNumber;
    /**
     * The label
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructLabel
     */
    public $label;
    /**
     * Constructor method for CreateShipmentResponse
     * @see parent::__construct()
     * @param string $_shipmentNotificationNumber
     * @param string $_shipmentTrackingNumber
     * @param string $_packagesTrackingNumbers
     * @param string $_dispatchNotificationNumber
     * @param DhlWsdlClassStructLabel $_label
     * @return DhlWsdlClassStructCreateShipmentResponse_1
     */
    public function __construct($_shipmentNotificationNumber = NULL,$_shipmentTrackingNumber = NULL,$_packagesTrackingNumbers = NULL,$_dispatchNotificationNumber = NULL,$_label = NULL)
    {
        parent::__construct(array('shipmentNotificationNumber'=>$_shipmentNotificationNumber,'shipmentTrackingNumber'=>$_shipmentTrackingNumber,'packagesTrackingNumbers'=>$_packagesTrackingNumbers,'dispatchNotificationNumber'=>$_dispatchNotificationNumber,'label'=>$_label),false);
    }
    /**
     * Get shipmentNotificationNumber value
     * @return string|null
     */
    public function getShipmentNotificationNumber()
    {
        return $this->shipmentNotificationNumber;
    }
    /**
     * Set shipmentNotificationNumber value
     * @param string $_shipmentNotificationNumber the shipmentNotificationNumber
     * @return string
     */
    public function setShipmentNotificationNumber($_shipmentNotificationNumber)
    {
        return ($this->shipmentNotificationNumber = $_shipmentNotificationNumber);
    }
    /**
     * Get shipmentTrackingNumber value
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->shipmentTrackingNumber;
    }
    /**
     * Set shipmentTrackingNumber value
     * @param string $_shipmentTrackingNumber the shipmentTrackingNumber
     * @return string
     */
    public function setShipmentTrackingNumber($_shipmentTrackingNumber)
    {
        return ($this->shipmentTrackingNumber = $_shipmentTrackingNumber);
    }
    /**
     * Get packagesTrackingNumbers value
     * @return string|null
     */
    public function getPackagesTrackingNumbers()
    {
        return $this->packagesTrackingNumbers;
    }
    /**
     * Set packagesTrackingNumbers value
     * @param string $_packagesTrackingNumbers the packagesTrackingNumbers
     * @return string
     */
    public function setPackagesTrackingNumbers($_packagesTrackingNumbers)
    {
        return ($this->packagesTrackingNumbers = $_packagesTrackingNumbers);
    }
    /**
     * Get dispatchNotificationNumber value
     * @return string|null
     */
    public function getDispatchNotificationNumber()
    {
        return $this->dispatchNotificationNumber;
    }
    /**
     * Set dispatchNotificationNumber value
     * @param string $_dispatchNotificationNumber the dispatchNotificationNumber
     * @return string
     */
    public function setDispatchNotificationNumber($_dispatchNotificationNumber)
    {
        return ($this->dispatchNotificationNumber = $_dispatchNotificationNumber);
    }
    /**
     * Get label value
     * @return DhlWsdlClassStructLabel|null
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Set label value
     * @param DhlWsdlClassStructLabel $_label the label
     * @return DhlWsdlClassStructLabel
     */
    public function setLabel($_label)
    {
        return ($this->label = $_label);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructCreateShipmentResponse_1
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
