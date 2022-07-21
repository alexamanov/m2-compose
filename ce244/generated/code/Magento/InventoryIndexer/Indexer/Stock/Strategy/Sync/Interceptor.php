<?php
namespace Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\Stock\GetAllStockIds $getAllStockIds, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexStructureInterface $indexStructureHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexHandlerInterface $indexHandler, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexNameBuilder $indexNameBuilder, \Magento\InventoryIndexer\Indexer\Stock\IndexDataProviderByStockId $indexDataProviderByStockId, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexTableSwitcherInterface $indexTableSwitcher, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryIndexer\Indexer\Stock\ReservationsIndexTable $reservationsIndexTable, \Magento\InventoryIndexer\Indexer\Stock\PrepareReservationsIndexData $prepareReservationsIndexData)
    {
        $this->___init();
        parent::__construct($getAllStockIds, $indexStructureHandler, $indexHandler, $indexNameBuilder, $indexDataProviderByStockId, $indexTableSwitcher, $defaultStockProvider, $reservationsIndexTable, $prepareReservationsIndexData);
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
    public function executeRow(int $stockId) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($stockId);
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $stockIds) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($stockIds);
    }
}
