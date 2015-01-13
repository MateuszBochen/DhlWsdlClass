<?php

namespace DhlWsdlClass\TestLib;

class ArrayOfDeletenotification
{

    /**
     * @var DeleteNotification[] $item
     */
    protected $item = null;

    /**
     * @param DeleteNotification[] $item
     */
    public function __construct(array $item)
    {
      $this->item = $item;
    }

    /**
     * @return DeleteNotification[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param DeleteNotification[] $item
     * @return \DhlWsdlClass\TestLib\ArrayOfDeletenotification
     */
    public function setItem(array $item)
    {
      $this->item = $item;
      return $this;
    }

}
