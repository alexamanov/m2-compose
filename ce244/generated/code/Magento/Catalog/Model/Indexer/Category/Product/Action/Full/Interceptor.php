<?php
namespace Magento\Catalog\Model\Indexer\Category\Product\Action\Full;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Category\Product\Action\Full
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Category\Product\Action\Full implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Config $config, ?\Magento\Framework\DB\Query\Generator $queryGenerator = null, ?\Magento\Framework\Indexer\BatchSizeManagementInterface $batchSizeManagement = null, ?\Magento\Framework\Indexer\BatchProviderInterface $batchProvider = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, $batchRowsCount = null, ?\Magento\Catalog\Model\ResourceModel\Indexer\ActiveTableSwitcher $activeTableSwitcher = null, ?\Magento\Indexer\Model\ProcessManager $processManager = null, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null)
    {
        $this->___init();
        parent::__construct($resource, $storeManager, $config, $queryGenerator, $batchSizeManagement, $batchProvider, $metadataPool, $batchRowsCount, $activeTableSwitcher, $processManager, $deploymentConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Catalog\Model\Indexer\Category\Product\Action\Full
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
