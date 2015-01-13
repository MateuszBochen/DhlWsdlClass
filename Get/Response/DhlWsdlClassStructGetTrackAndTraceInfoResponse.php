<?php
/**
 * File for class DhlWsdlClassStructGetTrackAndTraceInfoResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructGetTrackAndTraceInfoResponse originally named getTrackAndTraceInfoResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructGetTrackAndTraceInfoResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The getTrackAndTraceInfoResult
     * @var DhlWsdlClassStructTrackAndTraceResponse
     */
    public $getTrackAndTraceInfoResult;
    /**
     * Constructor method for getTrackAndTraceInfoResponse
     * @see parent::__construct()
     * @param DhlWsdlClassStructTrackAndTraceResponse $_getTrackAndTraceInfoResult
     * @return DhlWsdlClassStructGetTrackAndTraceInfoResponse
     */
    public function __construct($_getTrackAndTraceInfoResult = NULL)
    {
        parent::__construct(array('getTrackAndTraceInfoResult'=>$_getTrackAndTraceInfoResult),false);
    }
    /**
     * Get getTrackAndTraceInfoResult value
     * @return DhlWsdlClassStructTrackAndTraceResponse|null
     */
    public function getGetTrackAndTraceInfoResult()
    {
        return $this->getTrackAndTraceInfoResult;
    }
    /**
     * Set getTrackAndTraceInfoResult value
     * @param DhlWsdlClassStructTrackAndTraceResponse $_getTrackAndTraceInfoResult the getTrackAndTraceInfoResult
     * @return DhlWsdlClassStructTrackAndTraceResponse
     */
    public function setGetTrackAndTraceInfoResult($_getTrackAndTraceInfoResult)
    {
        return ($this->getTrackAndTraceInfoResult = $_getTrackAndTraceInfoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructGetTrackAndTraceInfoResponse
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
