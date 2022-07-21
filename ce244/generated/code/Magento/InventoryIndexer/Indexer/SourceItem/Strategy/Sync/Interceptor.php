<?php
namespace Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\SourceItem\Strategy\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\SourceItem\GetSkuListInStock $getSkuListInStockToUpdate, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexStructureInterface $indexStructureHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexHandlerInterface $indexHandler, \Magento\InventoryIndexer\Indexer\SourceItem\IndexDataBySkuListProvider $indexDataBySkuListProvider, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexNameBuilder $indexNameBuilder, \Magento\InventoryIndexer\Indexer\Stock\StockIndexer $stockIndexer, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryIndexer\Indexer\Stock\ReservationsIndexTable $reservationsIndexTable, \Magento\InventoryIndexer\Indexer\Stock\PrepareReservationsIndexData $prepareReservationsIndexData)
    {
        $this->___init();
        parent::__construct($getSkuListInStockToUpdate, $indexStructureHandler, $indexHandler, $indexDataBySkuListProvider, $indexNameBuilder, $stockIndexer, $defaultStockProvider, $reservationsIndexTable, $prepareReservationsIndexData);
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $sourceItemIds) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($sourceItemIds);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow(int $sourceItemId) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($sourceItemId);
    }
}
