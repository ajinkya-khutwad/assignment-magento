<?php

namespace Hummingbird\Us1\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
    private $test;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Hummingbird\Us1\Humage\Test $test
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->test = $test;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents($this->test->displayParams());
        return $result;
    }
}