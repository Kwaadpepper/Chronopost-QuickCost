<?php

declare(strict_types=1);

namespace ChronopostQuickCost;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'calculateProducts' => '\\ChronopostQuickCost\\StructType\\CalculateProducts',
            'calculateProductsResponse' => '\\ChronopostQuickCost\\StructType\\CalculateProductsResponse',
            'resultCalculateProducts' => '\\ChronopostQuickCost\\StructType\\ResultCalculateProducts',
            'resultResponse' => '\\ChronopostQuickCost\\StructType\\ResultResponse',
            'product' => '\\ChronopostQuickCost\\StructType\\Product',
            'productDesc' => '\\ChronopostQuickCost\\StructType\\ProductDesc',
            'getProducts' => '\\ChronopostQuickCost\\StructType\\GetProducts',
            'getProductsResponse' => '\\ChronopostQuickCost\\StructType\\GetProductsResponse',
            'resultGetProducts' => '\\ChronopostQuickCost\\StructType\\ResultGetProducts',
            'quickCostV3' => '\\ChronopostQuickCost\\StructType\\QuickCostV3',
            'quickCostV3Response' => '\\ChronopostQuickCost\\StructType\\QuickCostV3Response',
            'resultQuickCostV3' => '\\ChronopostQuickCost\\StructType\\ResultQuickCostV3',
            'resultQuickCostV2' => '\\ChronopostQuickCost\\StructType\\ResultQuickCostV2',
            'resultQuickCost' => '\\ChronopostQuickCost\\StructType\\ResultQuickCost',
            'cap' => '\\ChronopostQuickCost\\StructType\\Cap',
            'assurance' => '\\ChronopostQuickCost\\StructType\\Assurance',
            'service' => '\\ChronopostQuickCost\\StructType\\Service',
            'quickCost' => '\\ChronopostQuickCost\\StructType\\QuickCost',
            'quickCostResponse' => '\\ChronopostQuickCost\\StructType\\QuickCostResponse',
            'calculateProductsV2' => '\\ChronopostQuickCost\\StructType\\CalculateProductsV2',
            'calculateProductsV2Response' => '\\ChronopostQuickCost\\StructType\\CalculateProductsV2Response',
            'calculateDeliveryTime' => '\\ChronopostQuickCost\\StructType\\CalculateDeliveryTime',
            'calculateDeliveryTimeResponse' => '\\ChronopostQuickCost\\StructType\\CalculateDeliveryTimeResponse',
            'resultCalculateDeliveryTime' => '\\ChronopostQuickCost\\StructType\\ResultCalculateDeliveryTime',
        ];
    }
}
