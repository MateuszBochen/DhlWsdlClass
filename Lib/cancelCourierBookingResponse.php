<?php

namespace DhlWsdlClass\Lib;

class cancelCourierBookingResponse
{

    /**
     * @var ArrayOfDeletenotification $cancelCourierBookingResult
     */
    protected $cancelCourierBookingResult = null;

    /**
     * @param ArrayOfDeletenotification $cancelCourierBookingResult
     */
    public function __construct($cancelCourierBookingResult)
    {
      $this->cancelCourierBookingResult = $cancelCourierBookingResult;
    }

    /**
     * @return ArrayOfDeletenotification
     */
    public function getCancelCourierBookingResult()
    {
      return $this->cancelCourierBookingResult;
    }

    /**
     * @param ArrayOfDeletenotification $cancelCourierBookingResult
     * @return \DhlWsdlClass\Lib\cancelCourierBookingResponse
     */
    public function setCancelCourierBookingResult($cancelCourierBookingResult)
    {
      $this->cancelCourierBookingResult = $cancelCourierBookingResult;
      return $this;
    }

}
