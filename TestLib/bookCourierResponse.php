<?php

namespace DhlWsdlClass\TestLib;

class bookCourierResponse
{

    /**
     * @var ArrayOfString $bookCourierResult
     */
    protected $bookCourierResult = null;

    /**
     * @param ArrayOfString $bookCourierResult
     */
    public function __construct($bookCourierResult)
    {
      $this->bookCourierResult = $bookCourierResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getBookCourierResult()
    {
      return $this->bookCourierResult;
    }

    /**
     * @param ArrayOfString $bookCourierResult
     * @return \DhlWsdlClass\TestLib\bookCourierResponse
     */
    public function setBookCourierResult($bookCourierResult)
    {
      $this->bookCourierResult = $bookCourierResult;
      return $this;
    }

}
