<?php
/**
 * File for class DhlWsdlClassStructReceiverAddressData
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructReceiverAddressData originally named ReceiverAddressData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructReceiverAddressData extends DhlWsdlClassWsdlClass
{
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $country;
    /**
     * The isPackstation
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $isPackstation;
    /**
     * The isPostfiliale
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $isPostfiliale;
    /**
     * The postnummer
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $postnummer;
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
     * The contactPerson
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $contactPerson;
    /**
     * The contactPhone
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $contactPhone;
    /**
     * The contactEmail
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $contactEmail;
    /**
     * Constructor method for ReceiverAddressData
     * @see parent::__construct()
     * @param string $_country
     * @param boolean $_isPackstation
     * @param boolean $_isPostfiliale
     * @param string $_postnummer
     * @param string $_name
     * @param string $_postalCode
     * @param string $_city
     * @param string $_street
     * @param string $_houseNumber
     * @param string $_apartmentNumber
     * @param string $_contactPerson
     * @param string $_contactPhone
     * @param string $_contactEmail
     * @return DhlWsdlClassStructReceiverAddressData
     */
    public function __construct($_country = NULL,$_isPackstation = NULL,$_isPostfiliale = NULL,$_postnummer = NULL,$_name = NULL,$_postalCode = NULL,$_city = NULL,$_street = NULL,$_houseNumber = NULL,$_apartmentNumber = NULL,$_contactPerson = NULL,$_contactPhone = NULL,$_contactEmail = NULL)
    {
        parent::__construct(array('country'=>$_country,'isPackstation'=>$_isPackstation,'isPostfiliale'=>$_isPostfiliale,'postnummer'=>$_postnummer,'name'=>$_name,'postalCode'=>$_postalCode,'city'=>$_city,'street'=>$_street,'houseNumber'=>$_houseNumber,'apartmentNumber'=>$_apartmentNumber,'contactPerson'=>$_contactPerson,'contactPhone'=>$_contactPhone,'contactEmail'=>$_contactEmail),false);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $_country the country
     * @return string
     */
    public function setCountry($_country)
    {
        return ($this->country = $_country);
    }
    /**
     * Get isPackstation value
     * @return boolean|null
     */
    public function getIsPackstation()
    {
        return $this->isPackstation;
    }
    /**
     * Set isPackstation value
     * @param boolean $_isPackstation the isPackstation
     * @return boolean
     */
    public function setIsPackstation($_isPackstation)
    {
        return ($this->isPackstation = $_isPackstation);
    }
    /**
     * Get isPostfiliale value
     * @return boolean|null
     */
    public function getIsPostfiliale()
    {
        return $this->isPostfiliale;
    }
    /**
     * Set isPostfiliale value
     * @param boolean $_isPostfiliale the isPostfiliale
     * @return boolean
     */
    public function setIsPostfiliale($_isPostfiliale)
    {
        return ($this->isPostfiliale = $_isPostfiliale);
    }
    /**
     * Get postnummer value
     * @return string|null
     */
    public function getPostnummer()
    {
        return $this->postnummer;
    }
    /**
     * Set postnummer value
     * @param string $_postnummer the postnummer
     * @return string
     */
    public function setPostnummer($_postnummer)
    {
        return ($this->postnummer = $_postnummer);
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
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $_contactPerson the contactPerson
     * @return string
     */
    public function setContactPerson($_contactPerson)
    {
        return ($this->contactPerson = $_contactPerson);
    }
    /**
     * Get contactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }
    /**
     * Set contactPhone value
     * @param string $_contactPhone the contactPhone
     * @return string
     */
    public function setContactPhone($_contactPhone)
    {
        return ($this->contactPhone = $_contactPhone);
    }
    /**
     * Get contactEmail value
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }
    /**
     * Set contactEmail value
     * @param string $_contactEmail the contactEmail
     * @return string
     */
    public function setContactEmail($_contactEmail)
    {
        return ($this->contactEmail = $_contactEmail);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructReceiverAddressData
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
