<?php

namespace Funky\Hello\Controller\Path;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\ResponseInterface;
use Magento\Framework\App\Action\PageFactory;


class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    public function __construct(\Magento\Framework\App\Action\Context $context,
     \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        
        $this->_pageFactory=$pageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
       return $this->_pageFactory->create();
    }
}