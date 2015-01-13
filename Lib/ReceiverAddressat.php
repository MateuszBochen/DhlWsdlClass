<?php

namespace DhlWsdlClass;

class ReceiverAddressat
{

    /**
     * @var PreavisoContact $preaviso
     */
    protected $preaviso = null;

    /**
     * @var PreavisoContact $contact
     */
    protected $contact = null;

    /**
     * @var ReceiverAddress $address
     */
    protected $address = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PreavisoContact
     */
    public function getPreaviso()
    {
      return $this->preaviso;
    }

    /**
     * @param PreavisoContact $preaviso
     * @return \DhlWsdlClass\ReceiverAddressat
     */
    public function setPreaviso($preaviso)
    {
      $this->preaviso = $preaviso;
      return $this;
    }

    /**
     * @return PreavisoContact
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param PreavisoContact $contact
     * @return \DhlWsdlClass\ReceiverAddressat
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return ReceiverAddress
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param ReceiverAddress $address
     * @return \DhlWsdlClass\ReceiverAddressat
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

}
