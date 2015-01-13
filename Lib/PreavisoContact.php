<?php

namespace DhlWsdlClass;

class PreavisoContact
{

    /**
     * @var string $personName
     */
    protected $personName = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPersonName()
    {
      return $this->personName;
    }

    /**
     * @param string $personName
     * @return \DhlWsdlClass\PreavisoContact
     */
    public function setPersonName($personName)
    {
      $this->personName = $personName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \DhlWsdlClass\PreavisoContact
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
      return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \DhlWsdlClass\PreavisoContact
     */
    public function setEmailAddress($emailAddress)
    {
      $this->emailAddress = $emailAddress;
      return $this;
    }

}
