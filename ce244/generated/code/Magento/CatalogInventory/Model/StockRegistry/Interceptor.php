<?php
namespace Magento\CatalogInventory\Model\StockRegistry;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockRegistry
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockRegistry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Model\Spi\StockRegistryProviderInterface $stockRegistryProvider, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $stockItemRepository, \Magento\CatalogInventory\Api\StockItemCriteriaInterfaceFactory $criteriaFactory, \Magento\Catalog\Model\ProductFactory $productFactory)
    {
        $this->___init();
        parent::__construct($stockConfiguration, $stockRegistryProvider, $stockItemRepository, $criteriaFactory, $productFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getStock($scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStock');
        return $pluginInfo ? $this->___callPlugins('getStock', func_get_args(), $pluginInfo) : parent::getStock($scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockItem($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockItem');
        return $pluginInfo ? $this->___callPlugins('getStockItem', func_get_args(), $pluginInfo) : parent::getStockItem($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockItemBySku($productSku, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockItemBySku');
        return $pluginInfo ? $this->___callPlugins('getStockItemBySku', func_get_args(), $pluginInfo) : parent::getStockItemBySku($productSku, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockStatus($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockStatus');
        return $pluginInfo ? $this->___callPlugins('getStockStatus', func_get_args(), $pluginInfo) : parent::getStockStatus($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockStatusBySku($productSku, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockStatusBySku');
        return $pluginInfo ? $this->___callPlugins('getStockStatusBySku', func_get_args(), $pluginInfo) : parent::getStockStatusBySku($productSku, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductStockStatus($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductStockStatus');
        return $pluginInfo ? $this->___callPlugins('getProductStockStatus', func_get_args(), $pluginInfo) : parent::getProductStockStatus($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductStockStatusBySku($productSku, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductStockStatusBySku');
        return $pluginInfo ? $this->___callPlugins('getProductStockStatusBySku', func_get_args(), $pluginInfo) : parent::getProductStockStatusBySku($productSku, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getLowStockItems($scopeId, $qty, $currentPage = 1, $pageSize = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLowStockItems');
        return $pluginInfo ? $this->___callPlugins('getLowStockItems', func_get_args(), $pluginInfo) : parent::getLowStockItems($scopeId, $qty, $currentPage, $pageSize);
    }

    /**
     * {@inheritdoc}
     */
    public function updateStockItemBySku($productSku, \Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateStockItemBySku');
        return $pluginInfo ? $this->___callPlugins('updateStockItemBySku', func_get_args(), $pluginInfo) : parent::updateStockItemBySku($productSku, $stockItem);
    }
}
