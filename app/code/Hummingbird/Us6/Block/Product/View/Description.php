<?php

namespace Hummingbird\Us6\Block\Product\View;

class Description extends \Magento\Framework\View\Element\template
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $description)
    {
        $description->getProduct()->setDescription('sample description');
    }
}