<?php
namespace Ajinkya\Hello\Observer;
class CustomObserver implements \Magento\Framework\Event\ObserverInterface{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $observer_data = $observer->getData('custome_text');
        return $this;
    }
}