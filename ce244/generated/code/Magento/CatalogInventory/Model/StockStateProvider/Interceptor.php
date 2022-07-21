<?php
namespace Magento\CatalogInventory\Model\StockStateProvider;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockStateProvider
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockStateProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Math\Division $mathDivision, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Catalog\Model\ProductFactory $productFactory, $qtyCheckApplicable = true)
    {
        $this->___init();
        parent::__construct($mathDivision, $localeFormat, $objectFactory, $productFactory, $qtyCheckApplicable);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyStock(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyStock');
        return $pluginInfo ? $this->___callPlugins('verifyStock', func_get_args(), $pluginInfo) : parent::verifyStock($stockItem);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyNotification(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyNotification');
        return $pluginInfo ? $this->___callPlugins('verifyNotification', func_get_args(), $pluginInfo) : parent::verifyNotification($stockItem);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQuoteItemQty(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem, $qty, $summaryQty, $origQty = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQuoteItemQty');
        return $pluginInfo ? $this->___callPlugins('checkQuoteItemQty', func_get_args(), $pluginInfo) : parent::checkQuoteItemQty($stockItem, $qty, $summaryQty, $origQty);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQty(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQty');
        return $pluginInfo ? $this->___callPlugins('checkQty', func_get_args(), $pluginInfo) : parent::checkQty($stockItem, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function suggestQty(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suggestQty');
        return $pluginInfo ? $this->___callPlugins('suggestQty', func_get_args(), $pluginInfo) : parent::suggestQty($stockItem, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQtyIncrements(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('checkQtyIncrements', func_get_args(), $pluginInfo) : parent::checkQtyIncrements($stockItem, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockQty(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockQty');
        return $pluginInfo ? $this->___callPlugins('getStockQty', func_get_args(), $pluginInfo) : parent::getStockQty($stockItem);
    }
}
