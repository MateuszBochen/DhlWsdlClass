<?php

namespace DhlWsdlClass\TestLib;

class ReceiverAddressData
{

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var boolean $isPackstation
     */
    protected $isPackstation = null;

    /**
     * @var boolean $isPostfiliale
     */
    protected $isPostfiliale = null;

    /**
     * @var string $postnummer
     */
    protected $postnummer = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $houseNumber
     */
    protected $houseNumber = null;

    /**
     * @var string $apartmentNumber
     */
    protected $apartmentNumber = null;

    /**
     * @var string $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $contactPhone
     */
    protected $contactPhone = null;

    /**
     * @var string $contactEmail
     */
    protected $contactEmail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPackstation()
    {
      return $this->isPackstation;
    }

    /**
     * @param boolean $isPackstation
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setIsPackstation($isPackstation)
    {
      $this->isPackstation = $isPackstation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPostfiliale()
    {
      return $this->isPostfiliale;
    }

    /**
     * @param boolean $isPostfiliale
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setIsPostfiliale($isPostfiliale)
    {
      $this->isPostfiliale = $isPostfiliale;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostnummer()
    {
      return $this->postnummer;
    }

    /**
     * @param string $postnummer
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setPostnummer($postnummer)
    {
      $this->postnummer = $postnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
      return $this->houseNumber;
    }

    /**
     * @param string $houseNumber
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setHouseNumber($houseNumber)
    {
      $this->houseNumber = $houseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getApartmentNumber()
    {
      return $this->apartmentNumber;
    }

    /**
     * @param string $apartmentNumber
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setContactPerson($contactPerson)
    {
      $this->contactPerson = $contactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
      return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setContactPhone($contactPhone)
    {
      $this->contactPhone = $contactPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
      return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return \DhlWsdlClass\TestLib\ReceiverAddressData
     */
    public function setContactEmail($contactEmail)
    {
      $this->contactEmail = $contactEmail;
      return $this;
    }

}
