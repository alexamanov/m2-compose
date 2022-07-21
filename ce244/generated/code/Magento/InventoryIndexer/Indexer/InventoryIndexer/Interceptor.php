<?php
namespace Magento\InventoryIndexer\Indexer\InventoryIndexer;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\InventoryIndexer
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\InventoryIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\SourceItem\SourceItemIndexer $sourceItemIndexer)
    {
        $this->___init();
        parent::__construct($sourceItemIndexer);
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
    public function executeRow($sourceItemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($sourceItemId);
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $sourceItemIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($sourceItemIds);
    }
}
