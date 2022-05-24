<?php

namespace Hummingbird\Us2\Plugin\Theme\Block\Html;

class Header
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return "Custom Welcome Message";
    }
}