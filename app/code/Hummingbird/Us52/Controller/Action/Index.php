<?php

namespace Hummingbird\Us52\Controller\Action;

class Index extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $this->_redirect('catalog/product/view/id/2');
    }

    public function _processUrlKeys()
    {
        return true;
    }
}