<?php

declare(strict_types=1);

namespace ChronopostQuickCost\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Quick ServiceType
 * @subpackage Services
 */
class Quick extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named quickCostV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\QuickCostV3 $parameters
     * @return \ChronopostQuickCost\StructType\QuickCostV3Response|bool
     */
    public function quickCostV3(\ChronopostQuickCost\StructType\QuickCostV3 $parameters)
    {
        try {
            $this->setResult($resultQuickCostV3 = $this->getSoapClient()->__soapCall('quickCostV3', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultQuickCostV3;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named quickCost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostQuickCost\StructType\QuickCost $parameters
     * @return \ChronopostQuickCost\StructType\QuickCostResponse|bool
     */
    public function quickCost(\ChronopostQuickCost\StructType\QuickCost $parameters)
    {
        try {
            $this->setResult($resultQuickCost = $this->getSoapClient()->__soapCall('quickCost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultQuickCost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostQuickCost\StructType\QuickCostResponse|\ChronopostQuickCost\StructType\QuickCostV3Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
