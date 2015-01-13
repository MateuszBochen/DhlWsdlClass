<?php
/**
 * File for class DhlWsdlClassStructShipmentOrderInfo
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructShipmentOrderInfo originally named ShipmentOrderInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructShipmentOrderInfo extends DhlWsdlClassWsdlClass
{
    /**
     * The shipper
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var DhlWsdlClassStructAddressData
     */
    public $shipper;
    /**
     * The numberOfExPieces
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $numberOfExPieces;
    /**
     * The numberOfDrPieces
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $numberOfDrPieces;
    /**
     * The totalWeight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $totalWeight;
    /**
     * The heaviestPieceWeight
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var int
     */
    public $heaviestPieceWeight;
    /**
     * Constructor method for ShipmentOrderInfo
     * @see parent::__construct()
     * @param DhlWsdlClassStructAddressData $_shipper
     * @param int $_numberOfExPieces
     * @param int $_numberOfDrPieces
     * @param int $_totalWeight
     * @param int $_heaviestPieceWeight
     * @return DhlWsdlClassStructShipmentOrderInfo
     */
    public function __construct($_shipper = NULL,$_numberOfExPieces = NULL,$_numberOfDrPieces = NULL,$_totalWeight = NULL,$_heaviestPieceWeight = NULL)
    {
        parent::__construct(array('shipper'=>$_shipper,'numberOfExPieces'=>$_numberOfExPieces,'numberOfDrPieces'=>$_numberOfDrPieces,'totalWeight'=>$_totalWeight,'heaviestPieceWeight'=>$_heaviestPieceWeight),false);
    }
    /**
     * Get shipper value
     * @return DhlWsdlClassStructAddressData|null
     */
    public function getShipper()
    {
        return $this->shipper;
    }
    /**
     * Set shipper value
     * @param DhlWsdlClassStructAddressData $_shipper the shipper
     * @return DhlWsdlClassStructAddressData
     */
    public function setShipper($_shipper)
    {
        return ($this->shipper = $_shipper);
    }
    /**
     * Get numberOfExPieces value
     * @return int|null
     */
    public function getNumberOfExPieces()
    {
        return $this->numberOfExPieces;
    }
    /**
     * Set numberOfExPieces value
     * @param int $_numberOfExPieces the numberOfExPieces
     * @return int
     */
    public function setNumberOfExPieces($_numberOfExPieces)
    {
        return ($this->numberOfExPieces = $_numberOfExPieces);
    }
    /**
     * Get numberOfDrPieces value
     * @return int|null
     */
    public function getNumberOfDrPieces()
    {
        return $this->numberOfDrPieces;
    }
    /**
     * Set numberOfDrPieces value
     * @param int $_numberOfDrPieces the numberOfDrPieces
     * @return int
     */
    public function setNumberOfDrPieces($_numberOfDrPieces)
    {
        return ($this->numberOfDrPieces = $_numberOfDrPieces);
    }
    /**
     * Get totalWeight value
     * @return int|null
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }
    /**
     * Set totalWeight value
     * @param int $_totalWeight the totalWeight
     * @return int
     */
    public function setTotalWeight($_totalWeight)
    {
        return ($this->totalWeight = $_totalWeight);
    }
    /**
     * Get heaviestPieceWeight value
     * @return int|null
     */
    public function getHeaviestPieceWeight()
    {
        return $this->heaviestPieceWeight;
    }
    /**
     * Set heaviestPieceWeight value
     * @param int $_heaviestPieceWeight the heaviestPieceWeight
     * @return int
     */
    public function setHeaviestPieceWeight($_heaviestPieceWeight)
    {
        return ($this->heaviestPieceWeight = $_heaviestPieceWeight);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructShipmentOrderInfo
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
