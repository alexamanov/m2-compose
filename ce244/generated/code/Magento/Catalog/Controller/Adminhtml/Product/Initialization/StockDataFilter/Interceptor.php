<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration)
    {
        $this->___init();
        parent::__construct($scopeConfig, $stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function filter(array $stockData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($stockData);
    }
}
