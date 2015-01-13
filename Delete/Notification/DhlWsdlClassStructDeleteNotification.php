<?php
/**
 * File for class DhlWsdlClassStructDeleteNotification
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructDeleteNotification originally named DeleteNotification
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructDeleteNotification extends DhlWsdlClassWsdlClass
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $id;
    /**
     * The result
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $result;
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $error;
    /**
     * Constructor method for DeleteNotification
     * @see parent::__construct()
     * @param string $_id
     * @param boolean $_result
     * @param string $_error
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function __construct($_id = NULL,$_result = NULL,$_error = NULL)
    {
        parent::__construct(array('id'=>$_id,'result'=>$_result,'error'=>$_error),false);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $_id the id
     * @return string
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Get result value
     * @return boolean|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param boolean $_result the result
     * @return boolean
     */
    public function setResult($_result)
    {
        return ($this->result = $_result);
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $_error the error
     * @return string
     */
    public function setError($_error)
    {
        return ($this->error = $_error);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructDeleteNotification
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
