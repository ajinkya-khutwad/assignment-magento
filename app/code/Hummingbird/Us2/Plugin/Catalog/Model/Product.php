<?php

namespace Hummingbird\Us2\Plugin\Catalog\Model;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $price = $subject->getPrice();
        if($price<60){
            return $result . " On Sale!";
        }
        return $result;
    }
}