<?php
namespace Ajinkya\Hello\Controller\Index;
class CustomObserverFile extends \Magento\Framework\App\Action\Action{
    protected $resultPageFactory;
    public function __construct(
        \Magento\framework\App\Action\Context $context,
        \Magento\Framework\View\Result\pageFactory $resultPageFactory
    ){
        $this->resultPageFactory=$resultPageFactory;
        parent::__construct($context);
    }
    public function execute(){
        $resultPage=$this->resultPageFactory->create();
        $this->_eventManager->dispatch('md_customobserver_log',['custom_text'=>'Magento Explor Custom Observer']);
        $resultPage->getConfig()->gettitle()->prepend(__('Welcome TO Magento Observer module'));
        return $resultPage;
    }
}
?>