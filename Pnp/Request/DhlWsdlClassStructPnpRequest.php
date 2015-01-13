<?php
/**
 * File for class DhlWsdlClassStructPnpRequest
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPnpRequest originally named PnpRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPnpRequest extends DhlWsdlClassWsdlClass
{
    /**
     * The authData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAuthData
     */
    public $authData;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $date;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $type;
    /**
     * Constructor method for PnpRequest
     * @see parent::__construct()
     * @param DhlWsdlClassStructAuthData $_authData
     * @param string $_date
     * @param string $_type
     * @return DhlWsdlClassStructPnpRequest
     */
    public function __construct($_authData = NULL,$_date = NULL,$_type = NULL)
    {
        parent::__construct(array('authData'=>$_authData,'date'=>$_date,'type'=>$_type),false);
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
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $_date the date
     * @return string
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $_type the type
     * @return string
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPnpRequest
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
