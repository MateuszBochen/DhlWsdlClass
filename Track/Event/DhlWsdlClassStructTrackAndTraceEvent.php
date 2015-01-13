<?php
/**
 * File for class DhlWsdlClassStructTrackAndTraceEvent
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructTrackAndTraceEvent originally named TrackAndTraceEvent
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructTrackAndTraceEvent extends DhlWsdlClassWsdlClass
{
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $status;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $description;
    /**
     * The terminal
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $terminal;
    /**
     * The timestamp
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $timestamp;
    /**
     * Constructor method for TrackAndTraceEvent
     * @see parent::__construct()
     * @param string $_status
     * @param string $_description
     * @param string $_terminal
     * @param string $_timestamp
     * @return DhlWsdlClassStructTrackAndTraceEvent
     */
    public function __construct($_status = NULL,$_description = NULL,$_terminal = NULL,$_timestamp = NULL)
    {
        parent::__construct(array('status'=>$_status,'description'=>$_description,'terminal'=>$_terminal,'timestamp'=>$_timestamp),false);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $_status the status
     * @return string
     */
    public function setStatus($_status)
    {
        return ($this->status = $_status);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $_description the description
     * @return string
     */
    public function setDescription($_description)
    {
        return ($this->description = $_description);
    }
    /**
     * Get terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
    /**
     * Set terminal value
     * @param string $_terminal the terminal
     * @return string
     */
    public function setTerminal($_terminal)
    {
        return ($this->terminal = $_terminal);
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $_timestamp the timestamp
     * @return string
     */
    public function setTimestamp($_timestamp)
    {
        return ($this->timestamp = $_timestamp);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructTrackAndTraceEvent
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
