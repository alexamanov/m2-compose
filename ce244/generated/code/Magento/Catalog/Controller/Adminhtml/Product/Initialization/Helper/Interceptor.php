<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter $stockFilter, \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks $productLinks, \Magento\Backend\Helper\Js $jsHelper, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, ?\Magento\Catalog\Api\Data\ProductCustomOptionInterfaceFactory $customOptionFactory = null, ?\Magento\Catalog\Api\Data\ProductLinkInterfaceFactory $productLinkFactory = null, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null, ?\Magento\Catalog\Model\Product\LinkTypeProvider $linkTypeProvider = null, ?\Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper\AttributeFilter $attributeFilter = null, ?\Magento\Framework\Locale\FormatInterface $localeFormat = null, ?\Magento\Catalog\Model\Product\Authorization $productAuthorization = null, ?\Magento\Catalog\Model\Product\Filter\DateTime $dateTimeFilter = null, ?\Magento\Catalog\Api\Data\CategoryLinkInterfaceFactory $categoryLinkFactory = null)
    {
        $this->___init();
        parent::__construct($request, $storeManager, $stockFilter, $productLinks, $jsHelper, $dateFilter, $customOptionFactory, $productLinkFactory, $productRepository, $linkTypeProvider, $attributeFilter, $localeFormat, $productAuthorization, $dateTimeFilter, $categoryLinkFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function initializeFromData(\Magento\Catalog\Model\Product $product, array $productData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initializeFromData');
        return $pluginInfo ? $this->___callPlugins('initializeFromData', func_get_args(), $pluginInfo) : parent::initializeFromData($product, $productData);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        return $pluginInfo ? $this->___callPlugins('initialize', func_get_args(), $pluginInfo) : parent::initialize($product);
    }

    /**
     * {@inheritdoc}
     */
    public function mergeProductOptions($productOptions, $overwriteOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeProductOptions');
        return $pluginInfo ? $this->___callPlugins('mergeProductOptions', func_get_args(), $pluginInfo) : parent::mergeProductOptions($productOptions, $overwriteOptions);
    }
}
