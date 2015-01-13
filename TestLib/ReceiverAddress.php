<?php

namespace DhlWsdlClass\TestLib;

class ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
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
     * @return \DhlWsdlClass\TestLib\ReceiverAddress
     */
    public function setApartmentNumber($apartmentNumber)
    {
      $this->apartmentNumber = $apartmentNumber;
      return $this;
    }

}
