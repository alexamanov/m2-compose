<?php
namespace Magento\CatalogInventory\Model\StockState;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockState
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockState implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Spi\StockStateProviderInterface $stockStateProvider, \Magento\CatalogInventory\Model\Spi\StockRegistryProviderInterface $stockRegistryProvider, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration)
    {
        $this->___init();
        parent::__construct($stockStateProvider, $stockRegistryProvider, $stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyStock($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyStock');
        return $pluginInfo ? $this->___callPlugins('verifyStock', func_get_args(), $pluginInfo) : parent::verifyStock($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyNotification($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyNotification');
        return $pluginInfo ? $this->___callPlugins('verifyNotification', func_get_args(), $pluginInfo) : parent::verifyNotification($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQty($productId, $qty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQty');
        return $pluginInfo ? $this->___callPlugins('checkQty', func_get_args(), $pluginInfo) : parent::checkQty($productId, $qty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function suggestQty($productId, $qty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suggestQty');
        return $pluginInfo ? $this->___callPlugins('suggestQty', func_get_args(), $pluginInfo) : parent::suggestQty($productId, $qty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockQty($productId, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockQty');
        return $pluginInfo ? $this->___callPlugins('getStockQty', func_get_args(), $pluginInfo) : parent::getStockQty($productId, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQtyIncrements($productId, $qty, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('checkQtyIncrements', func_get_args(), $pluginInfo) : parent::checkQtyIncrements($productId, $qty, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQuoteItemQty');
        return $pluginInfo ? $this->___callPlugins('checkQuoteItemQty', func_get_args(), $pluginInfo) : parent::checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId);
    }
}
