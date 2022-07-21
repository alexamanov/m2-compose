<?php
namespace Magento\CatalogSearch\Model\Indexer\Fulltext\Action\GetSearchableProductsSelect;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Indexer\Fulltext\Action\GetSearchableProductsSelect
 */
class Interceptor extends \Magento\CatalogSearch\Model\Indexer\Fulltext\Action\GetSearchableProductsSelect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\CatalogSearch\Model\ResourceModel\EngineProvider $engineProvider, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository)
    {
        $this->___init();
        parent::__construct($resource, $catalogProductType, $engineProvider, $storeManager, $metadataPool, $attributeRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(int $storeId, array $staticFields, $productIds, int $lastProductId, int $batch) : \Magento\Framework\DB\Select
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($storeId, $staticFields, $productIds, $lastProductId, $batch);
    }
}
