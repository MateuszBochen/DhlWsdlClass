<?php
/**
 * File for class DhlWsdlClassStructPreavisoContact
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPreavisoContact originally named PreavisoContact
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPreavisoContact extends DhlWsdlClassWsdlClass
{
    /**
     * The personName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $personName;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $phoneNumber;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $emailAddress;
    /**
     * Constructor method for PreavisoContact
     * @see parent::__construct()
     * @param string $_personName
     * @param string $_phoneNumber
     * @param string $_emailAddress
     * @return DhlWsdlClassStructPreavisoContact
     */
    public function __construct($_personName = NULL,$_phoneNumber = NULL,$_emailAddress = NULL)
    {
        parent::__construct(array('personName'=>$_personName,'phoneNumber'=>$_phoneNumber,'emailAddress'=>$_emailAddress),false);
    }
    /**
     * Get personName value
     * @return string|null
     */
    public function getPersonName()
    {
        return $this->personName;
    }
    /**
     * Set personName value
     * @param string $_personName the personName
     * @return string
     */
    public function setPersonName($_personName)
    {
        return ($this->personName = $_personName);
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $_phoneNumber the phoneNumber
     * @return string
     */
    public function setPhoneNumber($_phoneNumber)
    {
        return ($this->phoneNumber = $_phoneNumber);
    }
    /**
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $_emailAddress the emailAddress
     * @return string
     */
    public function setEmailAddress($_emailAddress)
    {
        return ($this->emailAddress = $_emailAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPreavisoContact
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
