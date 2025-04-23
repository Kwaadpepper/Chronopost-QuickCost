<?php

declare(strict_types=1);

namespace ChronopostQuickCost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate ServiceType
 * @subpackage Services
 */
class Calculate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named calculateProducts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\CalculateProducts $parameters
     * @return \ChronopostQuickCost\StructType\CalculateProductsResponse|bool
     */
    public function calculateProducts(\ChronopostQuickCost\StructType\CalculateProducts $parameters)
    {
        try {
            $this->setResult($resultCalculateProducts = $this->getSoapClient()->__soapCall('calculateProducts', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateProducts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateProductsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\CalculateProductsV2 $parameters
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2Response|bool
     */
    public function calculateProductsV2(\ChronopostQuickCost\StructType\CalculateProductsV2 $parameters)
    {
        try {
            $this->setResult($resultCalculateProductsV2 = $this->getSoapClient()->__soapCall('calculateProductsV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateProductsV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateDeliveryTime
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\CalculateDeliveryTime $parameters
     * @return \ChronopostQuickCost\StructType\CalculateDeliveryTimeResponse|bool
     */
    public function calculateDeliveryTime(\ChronopostQuickCost\StructType\CalculateDeliveryTime $parameters)
    {
        try {
            $this->setResult($resultCalculateDeliveryTime = $this->getSoapClient()->__soapCall('calculateDeliveryTime', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateDeliveryTime;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostQuickCost\StructType\CalculateDeliveryTimeResponse|\ChronopostQuickCost\StructType\CalculateProductsResponse|\ChronopostQuickCost\StructType\CalculateProductsV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
