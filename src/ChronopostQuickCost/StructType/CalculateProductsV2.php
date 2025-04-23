<?php

declare(strict_types=1);

namespace ChronopostQuickCost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for calculateProductsV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:calculateProductsV2
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateProductsV2 extends AbstractStructBase
{
    /**
     * The caller
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $caller = null;
    /**
     * The depCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depCountryCode = null;
    /**
     * The depZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depZipCode = null;
    /**
     * The arrCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCountryCode = null;
    /**
     * The arrZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrZipCode = null;
    /**
     * The arrCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $arrCity = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $height = null;
    /**
     * The length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $length = null;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $width = null;
    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shippingDate = null;
    /**
     * The nationalite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nationalite = null;
    /**
     * The isPart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $isPart = null;
    /**
     * Constructor method for calculateProductsV2
     * @uses CalculateProductsV2::setCaller()
     * @uses CalculateProductsV2::setDepCountryCode()
     * @uses CalculateProductsV2::setDepZipCode()
     * @uses CalculateProductsV2::setArrCountryCode()
     * @uses CalculateProductsV2::setArrZipCode()
     * @uses CalculateProductsV2::setArrCity()
     * @uses CalculateProductsV2::setType()
     * @uses CalculateProductsV2::setWeight()
     * @uses CalculateProductsV2::setHeight()
     * @uses CalculateProductsV2::setLength()
     * @uses CalculateProductsV2::setWidth()
     * @uses CalculateProductsV2::setShippingDate()
     * @uses CalculateProductsV2::setNationalite()
     * @uses CalculateProductsV2::setIsPart()
     * @param string $caller
     * @param string $depCountryCode
     * @param string $depZipCode
     * @param string $arrCountryCode
     * @param string $arrZipCode
     * @param string $arrCity
     * @param string $type
     * @param string $weight
     * @param string $height
     * @param string $length
     * @param string $width
     * @param string $shippingDate
     * @param string $nationalite
     * @param string $isPart
     */
    public function __construct(?string $caller = null, ?string $depCountryCode = null, ?string $depZipCode = null, ?string $arrCountryCode = null, ?string $arrZipCode = null, ?string $arrCity = null, ?string $type = null, ?string $weight = null, ?string $height = null, ?string $length = null, ?string $width = null, ?string $shippingDate = null, ?string $nationalite = null, ?string $isPart = null)
    {
        $this
            ->setCaller($caller)
            ->setDepCountryCode($depCountryCode)
            ->setDepZipCode($depZipCode)
            ->setArrCountryCode($arrCountryCode)
            ->setArrZipCode($arrZipCode)
            ->setArrCity($arrCity)
            ->setType($type)
            ->setWeight($weight)
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setShippingDate($shippingDate)
            ->setNationalite($nationalite)
            ->setIsPart($isPart);
    }
    /**
     * Get caller value
     * @return string|null
     */
    public function getCaller(): ?string
    {
        return $this->caller;
    }
    /**
     * Set caller value
     * @param string $caller
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setCaller(?string $caller = null): self
    {
        // validation for constraint: string
        if (!is_null($caller) && !is_string($caller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caller, true), gettype($caller)), __LINE__);
        }
        $this->caller = $caller;
        
        return $this;
    }
    /**
     * Get depCountryCode value
     * @return string|null
     */
    public function getDepCountryCode(): ?string
    {
        return $this->depCountryCode;
    }
    /**
     * Set depCountryCode value
     * @param string $depCountryCode
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setDepCountryCode(?string $depCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depCountryCode) && !is_string($depCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depCountryCode, true), gettype($depCountryCode)), __LINE__);
        }
        $this->depCountryCode = $depCountryCode;
        
        return $this;
    }
    /**
     * Get depZipCode value
     * @return string|null
     */
    public function getDepZipCode(): ?string
    {
        return $this->depZipCode;
    }
    /**
     * Set depZipCode value
     * @param string $depZipCode
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setDepZipCode(?string $depZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($depZipCode) && !is_string($depZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depZipCode, true), gettype($depZipCode)), __LINE__);
        }
        $this->depZipCode = $depZipCode;
        
        return $this;
    }
    /**
     * Get arrCountryCode value
     * @return string|null
     */
    public function getArrCountryCode(): ?string
    {
        return $this->arrCountryCode;
    }
    /**
     * Set arrCountryCode value
     * @param string $arrCountryCode
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setArrCountryCode(?string $arrCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCountryCode) && !is_string($arrCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCountryCode, true), gettype($arrCountryCode)), __LINE__);
        }
        $this->arrCountryCode = $arrCountryCode;
        
        return $this;
    }
    /**
     * Get arrZipCode value
     * @return string|null
     */
    public function getArrZipCode(): ?string
    {
        return $this->arrZipCode;
    }
    /**
     * Set arrZipCode value
     * @param string $arrZipCode
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setArrZipCode(?string $arrZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($arrZipCode) && !is_string($arrZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrZipCode, true), gettype($arrZipCode)), __LINE__);
        }
        $this->arrZipCode = $arrZipCode;
        
        return $this;
    }
    /**
     * Get arrCity value
     * @return string|null
     */
    public function getArrCity(): ?string
    {
        return $this->arrCity;
    }
    /**
     * Set arrCity value
     * @param string $arrCity
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setArrCity(?string $arrCity = null): self
    {
        // validation for constraint: string
        if (!is_null($arrCity) && !is_string($arrCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrCity, true), gettype($arrCity)), __LINE__);
        }
        $this->arrCity = $arrCity;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get height value
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param string $height
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get length value
     * @return string|null
     */
    public function getLength(): ?string
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param string $length
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setLength(?string $length = null): self
    {
        // validation for constraint: string
        if (!is_null($length) && !is_string($length)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get shippingDate value
     * @return string|null
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }
    /**
     * Set shippingDate value
     * @param string $shippingDate
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;
        
        return $this;
    }
    /**
     * Get nationalite value
     * @return string|null
     */
    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }
    /**
     * Set nationalite value
     * @param string $nationalite
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setNationalite(?string $nationalite = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalite) && !is_string($nationalite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalite, true), gettype($nationalite)), __LINE__);
        }
        $this->nationalite = $nationalite;
        
        return $this;
    }
    /**
     * Get isPart value
     * @return string|null
     */
    public function getIsPart(): ?string
    {
        return $this->isPart;
    }
    /**
     * Set isPart value
     * @param string $isPart
     * @return \ChronopostQuickCost\StructType\CalculateProductsV2
     */
    public function setIsPart(?string $isPart = null): self
    {
        // validation for constraint: string
        if (!is_null($isPart) && !is_string($isPart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isPart, true), gettype($isPart)), __LINE__);
        }
        $this->isPart = $isPart;
        
        return $this;
    }
}
