<?php

namespace DhlWsdlClass\TestLib;

class TrackAndTraceEvent
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $terminal
     */
    protected $terminal = null;

    /**
     * @var string $timestamp
     */
    protected $timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DhlWsdlClass\TestLib\TrackAndTraceEvent
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \DhlWsdlClass\TestLib\TrackAndTraceEvent
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminal()
    {
      return $this->terminal;
    }

    /**
     * @param string $terminal
     * @return \DhlWsdlClass\TestLib\TrackAndTraceEvent
     */
    public function setTerminal($terminal)
    {
      $this->terminal = $terminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
      return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return \DhlWsdlClass\TestLib\TrackAndTraceEvent
     */
    public function setTimestamp($timestamp)
    {
      $this->timestamp = $timestamp;
      return $this;
    }

}
