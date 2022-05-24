<?php

namespace Hummingbird\Us1\Humage;
class Test
{
    protected $stringParam;
    protected $data;
    protected $category;

    public function __construct(
//        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
//        \Magento\Catalog\Model\ProductFactory $productFactory,
//        \Magento\Checkout\Model\Session $session,
//        \Unit1\Test\Api\ProductRepositoryInterface $unit1ProductRepository,
        \Magento\Catalog\Api\Data\CategoryInterface $category,
        $stringParam = "",
        array $data = []
    ) {
        $this->stringParam = $stringParam;
        $this->data = $data;
        $this->category = $category;
    }

    public function displayParams(){
        $productString = "";
        foreach($this->data as $product){
            $productString = $productString . $product;
        }
        return $productString . $this->stringParam;
    }
}