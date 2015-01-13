<?php
/**
 * File for class DhlWsdlClassStructReceiverAddressat
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructReceiverAddressat originally named ReceiverAddressat
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructReceiverAddressat extends DhlWsdlClassWsdlClass
{
    /**
     * The preaviso
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructPreavisoContact
     */
    public $preaviso;
    /**
     * The contact
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructPreavisoContact
     */
    public $contact;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructReceiverAddress
     */
    public $address;
    /**
     * Constructor method for ReceiverAddressat
     * @see parent::__construct()
     * @param DhlWsdlClassStructPreavisoContact $_preaviso
     * @param DhlWsdlClassStructPreavisoContact $_contact
     * @param DhlWsdlClassStructReceiverAddress $_address
     * @return DhlWsdlClassStructReceiverAddressat
     */
    public function __construct($_preaviso = NULL,$_contact = NULL,$_address = NULL)
    {
        parent::__construct(array('preaviso'=>$_preaviso,'contact'=>$_contact,'address'=>$_address),false);
    }
    /**
     * Get preaviso value
     * @return DhlWsdlClassStructPreavisoContact|null
     */
    public function getPreaviso()
    {
        return $this->preaviso;
    }
    /**
     * Set preaviso value
     * @param DhlWsdlClassStructPreavisoContact $_preaviso the preaviso
     * @return DhlWsdlClassStructPreavisoContact
     */
    public function setPreaviso($_preaviso)
    {
        return ($this->preaviso = $_preaviso);
    }
    /**
     * Get contact value
     * @return DhlWsdlClassStructPreavisoContact|null
     */
    public function getContact()
    {
        return $this->contact;
    }
    /**
     * Set contact value
     * @param DhlWsdlClassStructPreavisoContact $_contact the contact
     * @return DhlWsdlClassStructPreavisoContact
     */
    public function setContact($_contact)
    {
        return ($this->contact = $_contact);
    }
    /**
     * Get address value
     * @return DhlWsdlClassStructReceiverAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param DhlWsdlClassStructReceiverAddress $_address the address
     * @return DhlWsdlClassStructReceiverAddress
     */
    public function setAddress($_address)
    {
        return ($this->address = $_address);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructReceiverAddressat
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
