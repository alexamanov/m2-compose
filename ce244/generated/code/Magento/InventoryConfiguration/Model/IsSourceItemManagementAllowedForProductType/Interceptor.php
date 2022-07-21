<?php
namespace Magento\InventoryConfiguration\Model\IsSourceItemManagementAllowedForProductType;

/**
 * Interceptor class for @see \Magento\InventoryConfiguration\Model\IsSourceItemManagementAllowedForProductType
 */
class Interceptor extends \Magento\InventoryConfiguration\Model\IsSourceItemManagementAllowedForProductType implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration)
    {
        $this->___init();
        parent::__construct($stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $productType) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($productType);
    }
}
