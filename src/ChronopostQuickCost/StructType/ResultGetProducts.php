<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetProducts StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultGetProducts extends ResultResponse
{
    /**
     * The productList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostQuickCost\StructType\ProductDesc[]
     */
    protected ?array $productList = null;
    /**
     * Constructor method for resultGetProducts
     * @uses ResultGetProducts::setProductList()
     * @param \ChronopostQuickCost\StructType\ProductDesc[] $productList
     */
    public function __construct(?array $productList = null)
    {
        $this
            ->setProductList($productList);
    }
    /**
     * Get productList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostQuickCost\StructType\ProductDesc[]
     */
    public function getProductList(): ?array
    {
        return $this->productList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProductList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductListForArrayConstraintFromSetProductList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultGetProductsProductListItem) {
            // validation for constraint: itemType
            if (!$resultGetProductsProductListItem instanceof \ChronopostQuickCost\StructType\ProductDesc) {
                $invalidValues[] = is_object($resultGetProductsProductListItem) ? get_class($resultGetProductsProductListItem) : sprintf('%s(%s)', gettype($resultGetProductsProductListItem), var_export($resultGetProductsProductListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The productList property can only contain items of type \ChronopostQuickCost\StructType\ProductDesc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set productList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostQuickCost\StructType\ProductDesc[] $productList
     * @return \ChronopostQuickCost\StructType\ResultGetProducts
     */
    public function setProductList(?array $productList = null): self
    {
        // validation for constraint: array
        if ('' !== ($productListArrayErrorMessage = self::validateProductListForArrayConstraintFromSetProductList($productList))) {
            throw new InvalidArgumentException($productListArrayErrorMessage, __LINE__);
        }
        if (is_null($productList) || (is_array($productList) && empty($productList))) {
            unset($this->productList);
        } else {
            $this->productList = $productList;
        }
        
        return $this;
    }
    /**
     * Add item to productList value
     * @throws InvalidArgumentException
     * @param \ChronopostQuickCost\StructType\ProductDesc $item
     * @return \ChronopostQuickCost\StructType\ResultGetProducts
     */
    public function addToProductList(\ChronopostQuickCost\StructType\ProductDesc $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostQuickCost\StructType\ProductDesc) {
            throw new InvalidArgumentException(sprintf('The productList property can only contain items of type \ChronopostQuickCost\StructType\ProductDesc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->productList[] = $item;
        
        return $this;
    }
}
