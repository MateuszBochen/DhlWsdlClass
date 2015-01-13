<?php
/**
 * File for class DhlWsdlClassStructGetPnp
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetPnp originally named getPnp
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetPnp extends DhlWsdlClassWsdlClass
{
    /**
     * The pnpRequest
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructPnpRequest
     */
    public $pnpRequest;
    /**
     * Constructor method for getPnp
     * @see parent::__construct()
     * @param DhlWsdlClassStructPnpRequest $_pnpRequest
     * @return DhlWsdlClassStructGetPnp
     */
    public function __construct($_pnpRequest = NULL)
    {
        parent::__construct(array('pnpRequest'=>$_pnpRequest),false);
    }
    /**
     * Get pnpRequest value
     * @return DhlWsdlClassStructPnpRequest|null
     */
    public function getPnpRequest()
    {
        return $this->pnpRequest;
    }
    /**
     * Set pnpRequest value
     * @param DhlWsdlClassStructPnpRequest $_pnpRequest the pnpRequest
     * @return DhlWsdlClassStructPnpRequest
     */
    public function setPnpRequest($_pnpRequest)
    {
        return ($this->pnpRequest = $_pnpRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetPnp
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
