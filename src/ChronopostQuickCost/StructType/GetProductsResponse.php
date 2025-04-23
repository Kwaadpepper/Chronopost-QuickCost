<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getProductsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getProductsResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProductsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostQuickCost\StructType\ResultGetProducts|null
     */
    protected ?\ChronopostQuickCost\StructType\ResultGetProducts $return = null;
    /**
     * Constructor method for getProductsResponse
     * @uses GetProductsResponse::setReturn()
     * @param \ChronopostQuickCost\StructType\ResultGetProducts $return
     */
    public function __construct(?\ChronopostQuickCost\StructType\ResultGetProducts $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostQuickCost\StructType\ResultGetProducts|null
     */
    public function getReturn(): ?\ChronopostQuickCost\StructType\ResultGetProducts
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostQuickCost\StructType\ResultGetProducts $return
     * @return \ChronopostQuickCost\StructType\GetProductsResponse
     */
    public function setReturn(?\ChronopostQuickCost\StructType\ResultGetProducts $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
