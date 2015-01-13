<?php

namespace DhlWsdlClass;

class cancelCourierBooking
{

    /**
     * @var AuthData $authData
     */
    protected $authData = null;

    /**
     * @var ArrayOfString $orders
     */
    protected $orders = null;

    /**
     * @param AuthData $authData
     * @param ArrayOfString $orders
     */
    public function __construct($authData, $orders)
    {
      $this->authData = $authData;
      $this->orders = $orders;
    }

    /**
     * @return AuthData
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthData $authData
     * @return \DhlWsdlClass\cancelCourierBooking
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getOrders()
    {
      return $this->orders;
    }

    /**
     * @param ArrayOfString $orders
     * @return \DhlWsdlClass\cancelCourierBooking
     */
    public function setOrders($orders)
    {
      $this->orders = $orders;
      return $this;
    }

}
