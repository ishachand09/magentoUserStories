<?php
namespace Isha\Us2\Plugin;

class ProductPlugin
{
    public function afterGetName(\Magento\Catalog\Model\Product $product, $result)
    {
        if ($product->getFinalPrice() < 60) {
            $result .= ' On Sale!';
        }
        return $result;
    }
}
