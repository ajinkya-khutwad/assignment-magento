<?php

namespace Hummingbird\Us2\Plugin\Theme\Block\Html;

class Footer
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return "Custom Copyright Text";
    }
}