<?php
namespace Hummingbird\Us7\Block;
class Message extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getMessage()
    {
        return __('This is a message');
    }

    public function _afterToHtml($html)
    {
        return parent::_afterToHtml($html . "<h6>This is from after to html method</h6>");
    }
}