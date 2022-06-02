<?php
namespace Ajinkya\PluginExample\Plugin;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Api\Data\ProductInterface;
use Psr\Log\LoggerInterface;
class ProductRepositoryExamplePlugin
{
    /**
     *@var LoggerInterface
     */
    private $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }
    public function beforeGetById(
        ProductRepositoryInterface $subject,
        $productId,
        $editMode = false,
        $storeId = null,
        $forceReload = false
    ){
        $this->logger->info('Before get product by id '. $productId);
        return [$productId,$editMode,$storeId,$forceReload];
    }
    public function aroundGetById(
        ProductRepositoryInterface $subject,
        callable $proceed,
        $productId,
        $editMode = false,
        $storeId = null,
        $forceReload = false   
    ){
       $this->logger->info('Around Before get product by id '. $productId);
       $result = $proceed($productId,$editMode,$storeId,$forceReload);
       $this->logger->info('Around after get product by id '. $productId);
       return $result;
    }
    public function afterGetById(
        ProductRepositoryInterface $subject,
        ProductInterface $result,
        $productId,
        $editMode = false,
        $storeId = null,
        $forceReload = false   
    ){
        $this->logger->info('after get product by id '. $result->getId());
       return $result;
    }
}