<?php
namespace Magento\InventorySales\Model\GetStockBySalesChannelCache;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetStockBySalesChannelCache
 */
class Interceptor extends \Magento\InventorySales\Model\GetStockBySalesChannelCache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventorySales\Model\GetStockBySalesChannel $getStockBySalesChannel)
    {
        $this->___init();
        parent::__construct($getStockBySalesChannel);
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
