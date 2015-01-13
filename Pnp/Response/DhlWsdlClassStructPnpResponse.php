<?php
/**
 * File for class DhlWsdlClassStructPnpResponse
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructPnpResponse originally named PnpResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructPnpResponse extends DhlWsdlClassWsdlClass
{
    /**
     * The fileName
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $fileName;
    /**
     * The fileData
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $fileData;
    /**
     * The fileMimeType
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $fileMimeType;
    /**
     * Constructor method for PnpResponse
     * @see parent::__construct()
     * @param string $_fileName
     * @param string $_fileData
     * @param string $_fileMimeType
     * @return DhlWsdlClassStructPnpResponse
     */
    public function __construct($_fileName = NULL,$_fileData = NULL,$_fileMimeType = NULL)
    {
        parent::__construct(array('fileName'=>$_fileName,'fileData'=>$_fileData,'fileMimeType'=>$_fileMimeType),false);
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $_fileName the fileName
     * @return string
     */
    public function setFileName($_fileName)
    {
        return ($this->fileName = $_fileName);
    }
    /**
     * Get fileData value
     * @return string|null
     */
    public function getFileData()
    {
        return $this->fileData;
    }
    /**
     * Set fileData value
     * @param string $_fileData the fileData
     * @return string
     */
    public function setFileData($_fileData)
    {
        return ($this->fileData = $_fileData);
    }
    /**
     * Get fileMimeType value
     * @return string|null
     */
    public function getFileMimeType()
    {
        return $this->fileMimeType;
    }
    /**
     * Set fileMimeType value
     * @param string $_fileMimeType the fileMimeType
     * @return string
     */
    public function setFileMimeType($_fileMimeType)
    {
        return ($this->fileMimeType = $_fileMimeType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructPnpResponse
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
