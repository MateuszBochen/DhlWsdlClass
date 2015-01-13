<?php
/**
 * File for class DhlWsdlClassStructServiceDefinition
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructServiceDefinition originally named ServiceDefinition
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructServiceDefinition extends DhlWsdlClassWsdlClass
{
    /**
     * The product
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $product;
    /**
     * The deliveryEvening
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $deliveryEvening;
    /**
     * The deliveryOnSaturday
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $deliveryOnSaturday;
    /**
     * The pickupOnSaturday
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $pickupOnSaturday;
    /**
     * The collectOnDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $collectOnDelivery;
    /**
     * The collectOnDeliveryValue
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $collectOnDeliveryValue;
    /**
     * The collectOnDeliveryForm
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $collectOnDeliveryForm;
    /**
     * The collectOnDeliveryReference
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $collectOnDeliveryReference;
    /**
     * The insurance
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $insurance;
    /**
     * The insuranceValue
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var float
     */
    public $insuranceValue;
    /**
     * The returnOnDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $returnOnDelivery;
    /**
     * The returnOnDeliveryReference
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var string
     */
    public $returnOnDeliveryReference;
    /**
     * The proofOfDelivery
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $proofOfDelivery;
    /**
     * The selfCollect
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $selfCollect;
    /**
     * The predeliveryInformation
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $predeliveryInformation;
    /**
     * The deliveryToNeighbour
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $deliveryToNeighbour;
    /**
     * The preaviso
     * Meta informations extracted from the WSDL
     * - nillable : true
     * @var boolean
     */
    public $preaviso;
    /**
     * Constructor method for ServiceDefinition
     * @see parent::__construct()
     * @param string $_product
     * @param boolean $_deliveryEvening
     * @param boolean $_deliveryOnSaturday
     * @param boolean $_pickupOnSaturday
     * @param boolean $_collectOnDelivery
     * @param float $_collectOnDeliveryValue
     * @param string $_collectOnDeliveryForm
     * @param string $_collectOnDeliveryReference
     * @param boolean $_insurance
     * @param float $_insuranceValue
     * @param boolean $_returnOnDelivery
     * @param string $_returnOnDeliveryReference
     * @param boolean $_proofOfDelivery
     * @param boolean $_selfCollect
     * @param boolean $_predeliveryInformation
     * @param boolean $_deliveryToNeighbour
     * @param boolean $_preaviso
     * @return DhlWsdlClassStructServiceDefinition
     */
    public function __construct($_product = NULL,$_deliveryEvening = NULL,$_deliveryOnSaturday = NULL,$_pickupOnSaturday = NULL,$_collectOnDelivery = NULL,$_collectOnDeliveryValue = NULL,$_collectOnDeliveryForm = NULL,$_collectOnDeliveryReference = NULL,$_insurance = NULL,$_insuranceValue = NULL,$_returnOnDelivery = NULL,$_returnOnDeliveryReference = NULL,$_proofOfDelivery = NULL,$_selfCollect = NULL,$_predeliveryInformation = NULL,$_deliveryToNeighbour = NULL,$_preaviso = NULL)
    {
        parent::__construct(array('product'=>$_product,'deliveryEvening'=>$_deliveryEvening,'deliveryOnSaturday'=>$_deliveryOnSaturday,'pickupOnSaturday'=>$_pickupOnSaturday,'collectOnDelivery'=>$_collectOnDelivery,'collectOnDeliveryValue'=>$_collectOnDeliveryValue,'collectOnDeliveryForm'=>$_collectOnDeliveryForm,'collectOnDeliveryReference'=>$_collectOnDeliveryReference,'insurance'=>$_insurance,'insuranceValue'=>$_insuranceValue,'returnOnDelivery'=>$_returnOnDelivery,'returnOnDeliveryReference'=>$_returnOnDeliveryReference,'proofOfDelivery'=>$_proofOfDelivery,'selfCollect'=>$_selfCollect,'predeliveryInformation'=>$_predeliveryInformation,'deliveryToNeighbour'=>$_deliveryToNeighbour,'preaviso'=>$_preaviso),false);
    }
    /**
     * Get product value
     * @return string|null
     */
    public function getProduct()
    {
        return $this->product;
    }
    /**
     * Set product value
     * @param string $_product the product
     * @return string
     */
    public function setProduct($_product)
    {
        return ($this->product = $_product);
    }
    /**
     * Get deliveryEvening value
     * @return boolean|null
     */
    public function getDeliveryEvening()
    {
        return $this->deliveryEvening;
    }
    /**
     * Set deliveryEvening value
     * @param boolean $_deliveryEvening the deliveryEvening
     * @return boolean
     */
    public function setDeliveryEvening($_deliveryEvening)
    {
        return ($this->deliveryEvening = $_deliveryEvening);
    }
    /**
     * Get deliveryOnSaturday value
     * @return boolean|null
     */
    public function getDeliveryOnSaturday()
    {
        return $this->deliveryOnSaturday;
    }
    /**
     * Set deliveryOnSaturday value
     * @param boolean $_deliveryOnSaturday the deliveryOnSaturday
     * @return boolean
     */
    public function setDeliveryOnSaturday($_deliveryOnSaturday)
    {
        return ($this->deliveryOnSaturday = $_deliveryOnSaturday);
    }
    /**
     * Get pickupOnSaturday value
     * @return boolean|null
     */
    public function getPickupOnSaturday()
    {
        return $this->pickupOnSaturday;
    }
    /**
     * Set pickupOnSaturday value
     * @param boolean $_pickupOnSaturday the pickupOnSaturday
     * @return boolean
     */
    public function setPickupOnSaturday($_pickupOnSaturday)
    {
        return ($this->pickupOnSaturday = $_pickupOnSaturday);
    }
    /**
     * Get collectOnDelivery value
     * @return boolean|null
     */
    public function getCollectOnDelivery()
    {
        return $this->collectOnDelivery;
    }
    /**
     * Set collectOnDelivery value
     * @param boolean $_collectOnDelivery the collectOnDelivery
     * @return boolean
     */
    public function setCollectOnDelivery($_collectOnDelivery)
    {
        return ($this->collectOnDelivery = $_collectOnDelivery);
    }
    /**
     * Get collectOnDeliveryValue value
     * @return float|null
     */
    public function getCollectOnDeliveryValue()
    {
        return $this->collectOnDeliveryValue;
    }
    /**
     * Set collectOnDeliveryValue value
     * @param float $_collectOnDeliveryValue the collectOnDeliveryValue
     * @return float
     */
    public function setCollectOnDeliveryValue($_collectOnDeliveryValue)
    {
        return ($this->collectOnDeliveryValue = $_collectOnDeliveryValue);
    }
    /**
     * Get collectOnDeliveryForm value
     * @return string|null
     */
    public function getCollectOnDeliveryForm()
    {
        return $this->collectOnDeliveryForm;
    }
    /**
     * Set collectOnDeliveryForm value
     * @param string $_collectOnDeliveryForm the collectOnDeliveryForm
     * @return string
     */
    public function setCollectOnDeliveryForm($_collectOnDeliveryForm)
    {
        return ($this->collectOnDeliveryForm = $_collectOnDeliveryForm);
    }
    /**
     * Get collectOnDeliveryReference value
     * @return string|null
     */
    public function getCollectOnDeliveryReference()
    {
        return $this->collectOnDeliveryReference;
    }
    /**
     * Set collectOnDeliveryReference value
     * @param string $_collectOnDeliveryReference the collectOnDeliveryReference
     * @return string
     */
    public function setCollectOnDeliveryReference($_collectOnDeliveryReference)
    {
        return ($this->collectOnDeliveryReference = $_collectOnDeliveryReference);
    }
    /**
     * Get insurance value
     * @return boolean|null
     */
    public function getInsurance()
    {
        return $this->insurance;
    }
    /**
     * Set insurance value
     * @param boolean $_insurance the insurance
     * @return boolean
     */
    public function setInsurance($_insurance)
    {
        return ($this->insurance = $_insurance);
    }
    /**
     * Get insuranceValue value
     * @return float|null
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }
    /**
     * Set insuranceValue value
     * @param float $_insuranceValue the insuranceValue
     * @return float
     */
    public function setInsuranceValue($_insuranceValue)
    {
        return ($this->insuranceValue = $_insuranceValue);
    }
    /**
     * Get returnOnDelivery value
     * @return boolean|null
     */
    public function getReturnOnDelivery()
    {
        return $this->returnOnDelivery;
    }
    /**
     * Set returnOnDelivery value
     * @param boolean $_returnOnDelivery the returnOnDelivery
     * @return boolean
     */
    public function setReturnOnDelivery($_returnOnDelivery)
    {
        return ($this->returnOnDelivery = $_returnOnDelivery);
    }
    /**
     * Get returnOnDeliveryReference value
     * @return string|null
     */
    public function getReturnOnDeliveryReference()
    {
        return $this->returnOnDeliveryReference;
    }
    /**
     * Set returnOnDeliveryReference value
     * @param string $_returnOnDeliveryReference the returnOnDeliveryReference
     * @return string
     */
    public function setReturnOnDeliveryReference($_returnOnDeliveryReference)
    {
        return ($this->returnOnDeliveryReference = $_returnOnDeliveryReference);
    }
    /**
     * Get proofOfDelivery value
     * @return boolean|null
     */
    public function getProofOfDelivery()
    {
        return $this->proofOfDelivery;
    }
    /**
     * Set proofOfDelivery value
     * @param boolean $_proofOfDelivery the proofOfDelivery
     * @return boolean
     */
    public function setProofOfDelivery($_proofOfDelivery)
    {
        return ($this->proofOfDelivery = $_proofOfDelivery);
    }
    /**
     * Get selfCollect value
     * @return boolean|null
     */
    public function getSelfCollect()
    {
        return $this->selfCollect;
    }
    /**
     * Set selfCollect value
     * @param boolean $_selfCollect the selfCollect
     * @return boolean
     */
    public function setSelfCollect($_selfCollect)
    {
        return ($this->selfCollect = $_selfCollect);
    }
    /**
     * Get predeliveryInformation value
     * @return boolean|null
     */
    public function getPredeliveryInformation()
    {
        return $this->predeliveryInformation;
    }
    /**
     * Set predeliveryInformation value
     * @param boolean $_predeliveryInformation the predeliveryInformation
     * @return boolean
     */
    public function setPredeliveryInformation($_predeliveryInformation)
    {
        return ($this->predeliveryInformation = $_predeliveryInformation);
    }
    /**
     * Get deliveryToNeighbour value
     * @return boolean|null
     */
    public function getDeliveryToNeighbour()
    {
        return $this->deliveryToNeighbour;
    }
    /**
     * Set deliveryToNeighbour value
     * @param boolean $_deliveryToNeighbour the deliveryToNeighbour
     * @return boolean
     */
    public function setDeliveryToNeighbour($_deliveryToNeighbour)
    {
        return ($this->deliveryToNeighbour = $_deliveryToNeighbour);
    }
    /**
     * Get preaviso value
     * @return boolean|null
     */
    public function getPreaviso()
    {
        return $this->preaviso;
    }
    /**
     * Set preaviso value
     * @param boolean $_preaviso the preaviso
     * @return boolean
     */
    public function setPreaviso($_preaviso)
    {
        return ($this->preaviso = $_preaviso);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructServiceDefinition
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
