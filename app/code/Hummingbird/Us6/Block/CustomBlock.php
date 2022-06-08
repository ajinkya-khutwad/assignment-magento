<?php

namespace Hummingbird\Us6\Block;

class CustomBlock extends \Magento\Framework\View\Element\AbstractBlock
{

    protected function _toHtml()
    {
        return "Cusotm Block";
    }

    protected  function _afterToHtml($html)
    {
        return parent::_afterToHtml($html);
    }

}