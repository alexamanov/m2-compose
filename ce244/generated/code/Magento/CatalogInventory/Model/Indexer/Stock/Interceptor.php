<?php
namespace Magento\CatalogInventory\Model\Indexer\Stock;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Indexer\Stock
 */
class Interceptor extends \Magento\CatalogInventory\Model\Indexer\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Indexer\Stock\Action\Row $productStockIndexerRow, \Magento\CatalogInventory\Model\Indexer\Stock\Action\Rows $productStockIndexerRows, \Magento\CatalogInventory\Model\Indexer\Stock\Action\Full $productStockIndexerFull)
    {
        $this->___init();
        parent::__construct($productStockIndexerRow, $productStockIndexerRows, $productStockIndexerFull);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
