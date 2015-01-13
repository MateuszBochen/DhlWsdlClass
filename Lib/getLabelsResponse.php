<?php

namespace Lib;

class getLabelsResponse
{

    /**
     * @var ArrayOfItemtoprintresponse $getLabelsResult
     */
    protected $getLabelsResult = null;

    /**
     * @param ArrayOfItemtoprintresponse $getLabelsResult
     */
    public function __construct($getLabelsResult)
    {
      $this->getLabelsResult = $getLabelsResult;
    }

    /**
     * @return ArrayOfItemtoprintresponse
     */
    public function getGetLabelsResult()
    {
      return $this->getLabelsResult;
    }

    /**
     * @param ArrayOfItemtoprintresponse $getLabelsResult
     * @return \Lib\getLabelsResponse
     */
    public function setGetLabelsResult($getLabelsResult)
    {
      $this->getLabelsResult = $getLabelsResult;
      return $this;
    }

}
