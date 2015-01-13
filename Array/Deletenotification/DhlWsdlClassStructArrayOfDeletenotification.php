<?php
/**
 * File for class DhlWsdlClassStructArrayOfDeletenotification
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
/**
 * This class stands for DhlWsdlClassStructArrayOfDeletenotification originally named ArrayOfDeletenotification
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://dhl24.com.pl/webapi2}
 * @package DhlWsdlClass
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
class DhlWsdlClassStructArrayOfDeletenotification extends DhlWsdlClassWsdlClass
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var DhlWsdlClassStructDeleteNotification
     */
    public $item;
    /**
     * Constructor method for ArrayOfDeletenotification
     * @see parent::__construct()
     * @param DhlWsdlClassStructDeleteNotification $_item
     * @return DhlWsdlClassStructArrayOfDeletenotification
     */
    public function __construct($_item = NULL)
    {
        parent::__construct(array('item'=>$_item),false);
    }
    /**
     * Get item value
     * @return DhlWsdlClassStructDeleteNotification|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @param DhlWsdlClassStructDeleteNotification $_item the item
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function setItem($_item)
    {
        return ($this->item = $_item);
    }
    /**
     * Returns the current element
     * @see DhlWsdlClassWsdlClass::current()
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see DhlWsdlClassWsdlClass::item()
     * @param int $_index
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function item($_index)
    {
        return parent::item($_index);
    }
    /**
     * Returns the first element
     * @see DhlWsdlClassWsdlClass::first()
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see DhlWsdlClassWsdlClass::last()
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see DhlWsdlClassWsdlClass::last()
     * @param int $_offset
     * @return DhlWsdlClassStructDeleteNotification
     */
    public function offsetGet($_offset)
    {
        return parent::offsetGet($_offset);
    }
    /**
     * Returns the attribute name
     * @see DhlWsdlClassWsdlClass::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see DhlWsdlClassWsdlClass::__set_state()
     * @uses DhlWsdlClassWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return DhlWsdlClassStructArrayOfDeletenotification
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
