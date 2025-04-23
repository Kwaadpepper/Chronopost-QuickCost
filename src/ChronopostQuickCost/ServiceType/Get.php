<?php

declare(strict_types=1);

namespace ChronopostQuickCost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\GetProducts $parameters
     * @return \ChronopostQuickCost\StructType\GetProductsResponse|bool
     */
    public function getProducts(\ChronopostQuickCost\StructType\GetProducts $parameters)
    {
        try {
            $this->setResult($resultGetProducts = $this->getSoapClient()->__soapCall('getProducts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostQuickCost\StructType\GetProductsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
