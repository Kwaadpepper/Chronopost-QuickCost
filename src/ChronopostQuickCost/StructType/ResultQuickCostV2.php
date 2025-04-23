<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultQuickCostV2 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultQuickCostV2 extends ResultQuickCost
{
    /**
     * The assurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\Assurance|null
     */
    protected ?\ChronopostQuickCost\StructType\Assurance $assurance = null;
    /**
     * Constructor method for resultQuickCostV2
     * @uses ResultQuickCostV2::setAssurance()
     * @param \ChronopostQuickCost\StructType\Assurance $assurance
     */
    public function __construct(?\ChronopostQuickCost\StructType\Assurance $assurance = null)
    {
        $this
            ->setAssurance($assurance);
    }
    /**
     * Get assurance value
     * @return \ChronopostQuickCost\StructType\Assurance|null
     */
    public function getAssurance(): ?\ChronopostQuickCost\StructType\Assurance
    {
        return $this->assurance;
    }
    /**
     * Set assurance value
     * @param \ChronopostQuickCost\StructType\Assurance $assurance
     * @return \ChronopostQuickCost\StructType\ResultQuickCostV2
     */
    public function setAssurance(?\ChronopostQuickCost\StructType\Assurance $assurance = null): self
    {
        $this->assurance = $assurance;
        
        return $this;
    }
}
