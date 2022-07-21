<?php
namespace Magento\CatalogSearch\Model\Indexer\Fulltext;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Indexer\Fulltext
 */
class Interceptor extends \Magento\CatalogSearch\Model\Indexer\Fulltext implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogSearch\Model\Indexer\Fulltext\Action\FullFactory $fullActionFactory, \Magento\CatalogSearch\Model\Indexer\IndexerHandlerFactory $indexerHandlerFactory, \Magento\CatalogSearch\Model\ResourceModel\Fulltext $fulltextResource, \Magento\CatalogSearch\Model\Indexer\IndexSwitcherInterface $indexSwitcher, \Magento\CatalogSearch\Model\Indexer\Scope\StateFactory $indexScopeStateFactory, \Magento\Framework\Indexer\DimensionProviderInterface $dimensionProvider, array $data, ?\Magento\Indexer\Model\ProcessManager $processManager = null, ?int $batchSize = null, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null)
    {
        $this->___init();
        parent::__construct($fullActionFactory, $indexerHandlerFactory, $fulltextResource, $indexSwitcher, $indexScopeStateFactory, $dimensionProvider, $data, $processManager, $batchSize, $deploymentConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($entityIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($entityIds);
    }

    /**
     * {@inheritdoc}
     */
    public function executeByDimensions(array $dimensions, ?\Traversable $entityIds = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeByDimensions');
        return $pluginInfo ? $this->___callPlugins('executeByDimensions', func_get_args(), $pluginInfo) : parent::executeByDimensions($dimensions, $entityIds);
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
