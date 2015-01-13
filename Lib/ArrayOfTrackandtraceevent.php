<?php

namespace DhlWsdlClass;

class ArrayOfTrackandtraceevent
{

    /**
     * @var TrackAndTraceEvent[] $item
     */
    protected $item = null;

    /**
     * @param TrackAndTraceEvent[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return TrackAndTraceEvent[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param TrackAndTraceEvent[] $item
     * @return \DhlWsdlClass\ArrayOfTrackandtraceevent
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
