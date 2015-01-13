<?php

namespace DhlWsdlClass;

class PnpResponse
{

    /**
     * @var string $fileName
     */
    protected $fileName = null;

    /**
     * @var string $fileData
     */
    protected $fileData = null;

    /**
     * @var string $fileMimeType
     */
    protected $fileMimeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return \DhlWsdlClass\PnpResponse
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileData()
    {
      return $this->fileData;
    }

    /**
     * @param string $fileData
     * @return \DhlWsdlClass\PnpResponse
     */
    public function setFileData($fileData)
    {
      $this->fileData = $fileData;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileMimeType()
    {
      return $this->fileMimeType;
    }

    /**
     * @param string $fileMimeType
     * @return \DhlWsdlClass\PnpResponse
     */
    public function setFileMimeType($fileMimeType)
    {
      $this->fileMimeType = $fileMimeType;
      return $this;
    }

}
