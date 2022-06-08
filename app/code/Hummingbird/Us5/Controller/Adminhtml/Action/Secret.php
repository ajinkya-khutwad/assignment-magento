<?php

namespace Hummingbird\Us5\Controller\Adminhtml\Action;

class Secret extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents('Hello World!');
        return $result;
    }

    protected function _isAllowed() {
        $access = $this->getRequest()->getParam('access');
        return isset($access) && (int)$access==1;
    }

    public function _processUrlKeys() {
        return true;
    }
}