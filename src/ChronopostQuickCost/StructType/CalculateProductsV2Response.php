<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProductsV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateProductsV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateProductsV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\ResultCalculateProducts|null
     */
    protected ?\ChronopostQuickCost\StructType\ResultCalculateProducts $return = null;
    /**
     * Constructor method for calculateProductsV2Response
     * @uses CalculateProductsV2Response::setReturn()
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
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2Response
     */
    public function setReturn(?\ChronopostQuickCost\StructType\ResultCalculateProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
