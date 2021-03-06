<?php

namespace DhlWsdlClass\TestLib;

class getTrackAndTraceInfoResponse
{

    /**
     * @var TrackAndTraceResponse $getTrackAndTraceInfoResult
     */
    protected $getTrackAndTraceInfoResult = null;

    /**
     * @param TrackAndTraceResponse $getTrackAndTraceInfoResult
     */
    public function __construct($getTrackAndTraceInfoResult)
    {
      $this->getTrackAndTraceInfoResult = $getTrackAndTraceInfoResult;
    }

    /**
     * @return TrackAndTraceResponse
     */
    public function getGetTrackAndTraceInfoResult()
    {
      return $this->getTrackAndTraceInfoResult;
    }

    /**
     * @param TrackAndTraceResponse $getTrackAndTraceInfoResult
     * @return \DhlWsdlClass\TestLib\getTrackAndTraceInfoResponse
     */
    public function setGetTrackAndTraceInfoResult($getTrackAndTraceInfoResult)
    {
      $this->getTrackAndTraceInfoResult = $getTrackAndTraceInfoResult;
      return $this;
    }

}
