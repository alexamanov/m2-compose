<?php
namespace Magento\Catalog\Model\Indexer\Product\Price;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Price
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Product\Price\Action\Row $productPriceIndexerRow, \Magento\Catalog\Model\Indexer\Product\Price\Action\Rows $productPriceIndexerRows, \Magento\Catalog\Model\Indexer\Product\Price\Action\Full $productPriceIndexerFull, \Magento\Framework\Indexer\CacheContext $cacheContext)
    {
        $this->___init();
        parent::__construct($productPriceIndexerRow, $productPriceIndexerRows, $productPriceIndexerFull, $cacheContext);
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
