<?php
namespace Magento\InventorySales\Model\GetStockBySalesChannel;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetStockBySalesChannel
 */
class Interceptor extends \Magento\InventorySales\Model\GetStockBySalesChannel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryApi\Api\StockRepositoryInterface $stockRepositoryInterface, \Magento\InventorySales\Model\ResourceModel\StockIdResolver $stockIdResolver)
    {
        $this->___init();
        parent::__construct($stockRepositoryInterface, $stockIdResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\InventorySalesApi\Api\Data\SalesChannelInterface $salesChannel) : \Magento\InventoryApi\Api\Data\StockInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($salesChannel);
    }
}
