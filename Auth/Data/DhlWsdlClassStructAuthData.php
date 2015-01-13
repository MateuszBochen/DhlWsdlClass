<?php
/**
 * File for class DhlWsdlClassStructAuthData
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructAuthData originally named AuthData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructAuthData extends DhlWsdlClassWsdlClass
{
    /**
     * The username
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $username;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $password;
    /**
     * Constructor method for AuthData
     * @see parent::__construct()
     * @param string $_username
     * @param string $_password
     * @return DhlWsdlClassStructAuthData
     */
    public function __construct($_username = NULL,$_password = NULL)
    {
        parent::__construct(array('username'=>$_username,'password'=>$_password),false);
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $_username the username
     * @return string
     */
    public function setUsername($_username)
    {
        return ($this->username = $_username);
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->password = $_password);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructAuthData
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
