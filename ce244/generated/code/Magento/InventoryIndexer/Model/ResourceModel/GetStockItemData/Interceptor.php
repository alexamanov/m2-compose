<?php
namespace Magento\InventoryIndexer\Model\ResourceModel\GetStockItemData;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Model\ResourceModel\GetStockItemData
 */
class Interceptor extends \Magento\InventoryIndexer\Model\ResourceModel\GetStockItemData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\InventoryIndexer\Model\StockIndexTableNameResolverInterface $stockIndexTableNameResolver, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryCatalogApi\Model\GetProductIdsBySkusInterface $getProductIdsBySkus, ?\Magento\InventoryCatalogApi\Model\IsSingleSourceModeInterface $isSingleSourceMode = null, ?\Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForSkuInterface $isSourceItemManagementAllowedForSku = null)
    {
        $this->___init();
        parent::__construct($resource, $stockIndexTableNameResolver, $defaultStockProvider, $getProductIdsBySkus, $isSingleSourceMode, $isSourceItemManagementAllowedForSku);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
