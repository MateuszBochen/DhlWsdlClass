<?php
/**
 * File for class DhlWsdlClassStructGetPostalCodeServices
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetPostalCodeServices originally named getPostalCodeServices
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetPostalCodeServices extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The postCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $postCode;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $pickupDate;
    /**
     * Constructor method for getPostalCodeServices
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param string $_postCode
     * @param string $_pickupDate
     * @return DhlWsdlClassStructGetPostalCodeServices
     */
    public function __construct($_authData = NULL,$_postCode = NULL,$_pickupDate = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'postCode'=>$_postCode,'pickupDate'=>$_pickupDate),false);
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
     * Get postCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * Set postCode value
     * @param string $_postCode the postCode
     * @return string
     */
    public function setPostCode($_postCode)
    {
        return ($this->postCode = $_postCode);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetPostalCodeServices
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
