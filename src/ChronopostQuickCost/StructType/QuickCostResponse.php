<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for quickCostResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:quickCostResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QuickCostResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\ResultQuickCostV2|null
     */
    protected ?\ChronopostQuickCost\StructType\ResultQuickCostV2 $return = null;
    /**
     * Constructor method for quickCostResponse
     * @uses QuickCostResponse::setReturn()
     * @param \ChronopostQuickCost\StructType\ResultQuickCostV2 $return
     */
    public function __construct(?\ChronopostQuickCost\StructType\ResultQuickCostV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostQuickCost\StructType\ResultQuickCostV2|null
     */
    public function getReturn(): ?\ChronopostQuickCost\StructType\ResultQuickCostV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostQuickCost\StructType\ResultQuickCostV2 $return
     * @return \ChronopostQuickCost\StructType\QuickCostResponse
     */
    public function setReturn(?\ChronopostQuickCost\StructType\ResultQuickCostV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
