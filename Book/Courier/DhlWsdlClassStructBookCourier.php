<?php
/**
 * File for class DhlWsdlClassStructBookCourier
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructBookCourier originally named bookCourier
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructBookCourier extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $pickupDate;
    /**
     * The pickupTimeFrom
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $pickupTimeFrom;
    /**
     * The pickupTimeTo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $pickupTimeTo;
    /**
     * The additionalInfo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $additionalInfo;
    /**
     * The shipmentIdList
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructArrayOfString
     */
    public $shipmentIdList;
    /**
     * The shipmentOrderInfo
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructShipmentOrderInfo
     */
    public $shipmentOrderInfo;
    /**
     * Constructor method for bookCourier
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param string $_pickupDate
     * @param string $_pickupTimeFrom
     * @param string $_pickupTimeTo
     * @param string $_additionalInfo
     * @param DhlWsdlClassStructArrayOfString $_shipmentIdList
     * @param DhlWsdlClassStructShipmentOrderInfo $_shipmentOrderInfo
     * @return DhlWsdlClassStructBookCourier
     */
    public function __construct($_authData = NULL,$_pickupDate = NULL,$_pickupTimeFrom = NULL,$_pickupTimeTo = NULL,$_additionalInfo = NULL,$_shipmentIdList = NULL,$_shipmentOrderInfo = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'pickupDate'=>$_pickupDate,'pickupTimeFrom'=>$_pickupTimeFrom,'pickupTimeTo'=>$_pickupTimeTo,'additionalInfo'=>$_additionalInfo,'shipmentIdList'=>($_shipmentIdList instanceof DhlWsdlClassStructArrayOfString)?$_shipmentIdList:new DhlWsdlClassStructArrayOfString($_shipmentIdList),'shipmentOrderInfo'=>$_shipmentOrderInfo),false);
    }
    /**
     * Get authData value
     * @return DhlWsdlClassStructAuthData|null
     */
    public function getAuthData()
    {
        return $this->authData;
    }
    /**
     * Set authData value
     * @param DhlWsdlClassStructAuthData $_authData the authData
     * @return DhlWsdlClassStructAuthData
     */
    public function setAuthData($_authData)
    {
        return ($this->authData = $_authData);
    }
    /**
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $_pickupDate the pickupDate
     * @return string
     */
    public function setPickupDate($_pickupDate)
    {
        return ($this->pickupDate = $_pickupDate);
    }
    /**
     * Get pickupTimeFrom value
     * @return string|null
     */
    public function getPickupTimeFrom()
    {
        return $this->pickupTimeFrom;
    }
    /**
     * Set pickupTimeFrom value
     * @param string $_pickupTimeFrom the pickupTimeFrom
     * @return string
     */
    public function setPickupTimeFrom($_pickupTimeFrom)
    {
        return ($this->pickupTimeFrom = $_pickupTimeFrom);
    }
    /**
     * Get pickupTimeTo value
     * @return string|null
     */
    public function getPickupTimeTo()
    {
        return $this->pickupTimeTo;
    }
    /**
     * Set pickupTimeTo value
     * @param string $_pickupTimeTo the pickupTimeTo
     * @return string
     */
    public function setPickupTimeTo($_pickupTimeTo)
    {
        return ($this->pickupTimeTo = $_pickupTimeTo);
    }
    /**
     * Get additionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
    /**
     * Set additionalInfo value
     * @param string $_additionalInfo the additionalInfo
     * @return string
     */
    public function setAdditionalInfo($_additionalInfo)
    {
        return ($this->additionalInfo = $_additionalInfo);
    }
    /**
     * Get shipmentIdList value
     * @return DhlWsdlClassStructArrayOfString|null
     */
    public function getShipmentIdList()
    {
        return $this->shipmentIdList;
    }
    /**
     * Set shipmentIdList value
     * @param DhlWsdlClassStructArrayOfString $_shipmentIdList the shipmentIdList
     * @return DhlWsdlClassStructArrayOfString
     */
    public function setShipmentIdList($_shipmentIdList)
    {
        return ($this->shipmentIdList = $_shipmentIdList);
    }
    /**
     * Get shipmentOrderInfo value
     * @return DhlWsdlClassStructShipmentOrderInfo|null
     */
    public function getShipmentOrderInfo()
    {
        return $this->shipmentOrderInfo;
    }
    /**
     * Set shipmentOrderInfo value
     * @param DhlWsdlClassStructShipmentOrderInfo $_shipmentOrderInfo the shipmentOrderInfo
     * @return DhlWsdlClassStructShipmentOrderInfo
     */
    public function setShipmentOrderInfo($_shipmentOrderInfo)
    {
        return ($this->shipmentOrderInfo = $_shipmentOrderInfo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructBookCourier
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
