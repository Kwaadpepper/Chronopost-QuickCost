<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateDeliveryTimeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateDeliveryTimeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateDeliveryTimeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\ResultCalculateDeliveryTime|null
     */
    protected ?\ChronopostQuickCost\StructType\ResultCalculateDeliveryTime $return = null;
    /**
     * Constructor method for calculateDeliveryTimeResponse
     * @uses CalculateDeliveryTimeResponse::setReturn()
     * @param \ChronopostQuickCost\StructType\ResultCalculateDeliveryTime $return
     */
    public function __construct(?\ChronopostQuickCost\StructType\ResultCalculateDeliveryTime $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostQuickCost\StructType\ResultCalculateDeliveryTime|null
     */
    public function getReturn(): ?\ChronopostQuickCost\StructType\ResultCalculateDeliveryTime
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostQuickCost\StructType\ResultCalculateDeliveryTime $return
     * @return \ChronopostQuickCost\StructType\CalculateDeliveryTimeResponse
     */
    public function setReturn(?\ChronopostQuickCost\StructType\ResultCalculateDeliveryTime $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
