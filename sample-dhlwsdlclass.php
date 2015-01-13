<?php
/**
 * Test with DhlWsdlClass for 'https://dhl24.com.pl/webapi2'
 * @package DhlWsdlClass
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20140325-01
 * @date 2015-01-13
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/DhlWsdlClassAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a DhlWsdlClassWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[DhlWsdlClassWsdlClass::WSDL_URL] = 'https://dhl24.com.pl/webapi2';
 * $wsdl[DhlWsdlClassWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[DhlWsdlClassWsdlClass::WSDL_TRACE] = true;
 * $wsdl[DhlWsdlClassWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[DhlWsdlClassWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new DhlWsdlClassWsdlClass($wsdl);
 */
/**
 * Examples
 */


/************************************
 * Example for DhlWsdlClassServiceGet
 */
$dhlWsdlClassServiceGet = new DhlWsdlClassServiceGet();
// sample call for DhlWsdlClassServiceGet::getVersion()
if($dhlWsdlClassServiceGet->getVersion())
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getMyShipments()
if($dhlWsdlClassServiceGet->getMyShipments(new DhlWsdlClassStructGetMyShipments(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getMyShipmentsCount()
if($dhlWsdlClassServiceGet->getMyShipmentsCount(new DhlWsdlClassStructGetMyShipmentsCount(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getPostalCodeServices()
if($dhlWsdlClassServiceGet->getPostalCodeServices(new DhlWsdlClassStructGetPostalCodeServices(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getTrackAndTraceInfo()
if($dhlWsdlClassServiceGet->getTrackAndTraceInfo(new DhlWsdlClassStructGetTrackAndTraceInfo(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getLabels()
if($dhlWsdlClassServiceGet->getLabels(new DhlWsdlClassStructGetLabels(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getPnp()
if($dhlWsdlClassServiceGet->getPnp(new DhlWsdlClassStructGetPnp(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());
// sample call for DhlWsdlClassServiceGet::getShipmentScan()
if($dhlWsdlClassServiceGet->getShipmentScan(new DhlWsdlClassStructGetShipmentScan(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceGet->getResult());
else
    print_r($dhlWsdlClassServiceGet->getLastError());

/***************************************
 * Example for DhlWsdlClassServiceCreate
 */
$dhlWsdlClassServiceCreate = new DhlWsdlClassServiceCreate();
// sample call for DhlWsdlClassServiceCreate::createShipments()
if($dhlWsdlClassServiceCreate->createShipments(new DhlWsdlClassStructCreateShipments(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceCreate->getResult());
else
    print_r($dhlWsdlClassServiceCreate->getLastError());
// sample call for DhlWsdlClassServiceCreate::createShipment()
if($dhlWsdlClassServiceCreate->createShipment(new DhlWsdlClassStructCreateShipment(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceCreate->getResult());
else
    print_r($dhlWsdlClassServiceCreate->getLastError());

/***************************************
 * Example for DhlWsdlClassServiceDelete
 */
$dhlWsdlClassServiceDelete = new DhlWsdlClassServiceDelete();
// sample call for DhlWsdlClassServiceDelete::deleteShipments()
if($dhlWsdlClassServiceDelete->deleteShipments(new DhlWsdlClassStructDeleteShipments(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceDelete->getResult());
else
    print_r($dhlWsdlClassServiceDelete->getLastError());
// sample call for DhlWsdlClassServiceDelete::deleteShipment()
if($dhlWsdlClassServiceDelete->deleteShipment(new DhlWsdlClassStructDeleteShipment(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceDelete->getResult());
else
    print_r($dhlWsdlClassServiceDelete->getLastError());

/*************************************
 * Example for DhlWsdlClassServiceBook
 */
$dhlWsdlClassServiceBook = new DhlWsdlClassServiceBook();
// sample call for DhlWsdlClassServiceBook::bookCourier()
if($dhlWsdlClassServiceBook->bookCourier(new DhlWsdlClassStructBookCourier(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceBook->getResult());
else
    print_r($dhlWsdlClassServiceBook->getLastError());

/***************************************
 * Example for DhlWsdlClassServiceCancel
 */
$dhlWsdlClassServiceCancel = new DhlWsdlClassServiceCancel();
// sample call for DhlWsdlClassServiceCancel::cancelCourierBooking()
if($dhlWsdlClassServiceCancel->cancelCourierBooking(new DhlWsdlClassStructCancelCourierBooking(/*** update parameters list ***/)))
    print_r($dhlWsdlClassServiceCancel->getResult());
else
    print_r($dhlWsdlClassServiceCancel->getLastError());
