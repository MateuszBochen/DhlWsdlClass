<?php
/**
 * File for class DhlWsdlClassStructAddress
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructAddress originally named Address
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructAddress extends DhlWsdlClassWsdlClass
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $name;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $postalCode;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $city;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $street;
    /**
     * The houseNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $houseNumber;
    /**
     * The apartmentNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $apartmentNumber;
    /**
     * Constructor method for Address
     * @see parent::__construct()
     * @param string $_name
     * @param string $_postalCode
     * @param string $_city
     * @param string $_street
     * @param string $_houseNumber
     * @param string $_apartmentNumber
     * @return DhlWsdlClassStructAddress
     */
    public function __construct($_name = NULL,$_postalCode = NULL,$_city = NULL,$_street = NULL,$_houseNumber = NULL,$_apartmentNumber = NULL)
    {
        parent::__construct(array('name'=>$_name,'postalCode'=>$_postalCode,'city'=>$_city,'street'=>$_street,'houseNumber'=>$_houseNumber,'apartmentNumber'=>$_apartmentNumber),false);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $_postalCode the postalCode
     * @return string
     */
    public function setPostalCode($_postalCode)
    {
        return ($this->postalCode = $_postalCode);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $_city the city
     * @return string
     */
    public function setCity($_city)
    {
        return ($this->city = $_city);
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $_street the street
     * @return string
     */
    public function setStreet($_street)
    {
        return ($this->street = $_street);
    }
    /**
     * Get houseNumber value
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }
    /**
     * Set houseNumber value
     * @param string $_houseNumber the houseNumber
     * @return string
     */
    public function setHouseNumber($_houseNumber)
    {
        return ($this->houseNumber = $_houseNumber);
    }
    /**
     * Get apartmentNumber value
     * @return string|null
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }
    /**
     * Set apartmentNumber value
     * @param string $_apartmentNumber the apartmentNumber
     * @return string
     */
    public function setApartmentNumber($_apartmentNumber)
    {
        return ($this->apartmentNumber = $_apartmentNumber);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructAddress
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
