<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProductsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateProductsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateProductsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\ResultCalculateProducts|null
     */
    protected ?\ChronopostQuickCost\StructType\ResultCalculateProducts $return = null;
    /**
     * Constructor method for calculateProductsResponse
     * @uses CalculateProductsResponse::setReturn()
     * @param \ChronopostQuickCost\StructType\ResultCalculateProducts $return
     */
    public function __construct(?\ChronopostQuickCost\StructType\ResultCalculateProducts $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostQuickCost\StructType\ResultCalculateProducts|null
     */
    public function getReturn(): ?\ChronopostQuickCost\StructType\ResultCalculateProducts
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostQuickCost\StructType\ResultCalculateProducts $return
     * @return \ChronopostQuickCost\StructType\CalculateProductsResponse
     */
    public function setReturn(?\ChronopostQuickCost\StructType\ResultCalculateProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
