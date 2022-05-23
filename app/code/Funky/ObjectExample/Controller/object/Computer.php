<?php

namespace Funky\ObjectExample\Controller\Object;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\ResponseInterface;
use Magento\Framework\App\Action\PageFactory;


class Computer extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
      $microprocessor = new \Funky\ObjectExample\Model\Microprocessor();
    }
}