<?php
namespace Magento\Catalog\Model\Indexer\Product\Eav;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Eav
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Eav implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Product\Eav\Action\Row $productEavIndexerRow, \Magento\Catalog\Model\Indexer\Product\Eav\Action\Rows $productEavIndexerRows, \Magento\Catalog\Model\Indexer\Product\Eav\Action\Full $productEavIndexerFull)
    {
        $this->___init();
        parent::__construct($productEavIndexerRow, $productEavIndexerRows, $productEavIndexerFull);
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
