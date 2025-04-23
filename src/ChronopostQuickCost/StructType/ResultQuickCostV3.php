<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCostV3 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultQuickCostV3 extends ResultQuickCostV2
{
    /**
     * The cap
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\Cap|null
     */
    protected ?\ChronopostQuickCost\StructType\Cap $cap = null;
    /**
     * Constructor method for resultQuickCostV3
     * @uses ResultQuickCostV3::setCap()
     * @param \ChronopostQuickCost\StructType\Cap $cap
     */
    public function __construct(?\ChronopostQuickCost\StructType\Cap $cap = null)
    {
        $this
            ->setCap($cap);
    }
    /**
     * Get cap value
     * @return \ChronopostQuickCost\StructType\Cap|null
     */
    public function getCap(): ?\ChronopostQuickCost\StructType\Cap
    {
        return $this->cap;
    }
    /**
     * Set cap value
     * @param \ChronopostQuickCost\StructType\Cap $cap
     * @return \ChronopostQuickCost\StructType\ResultQuickCostV3
     */
    public function setCap(?\ChronopostQuickCost\StructType\Cap $cap = null): self
    {
        $this->cap = $cap;
        
        return $this;
    }
}
