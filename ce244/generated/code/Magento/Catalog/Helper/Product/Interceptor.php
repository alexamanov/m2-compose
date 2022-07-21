<?php
namespace Magento\Catalog\Helper\Product;

/**
 * Interceptor class for @see \Magento\Catalog\Helper\Product
 */
class Interceptor extends \Magento\Catalog\Helper\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Session $catalogSession, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Registry $coreRegistry, \Magento\Catalog\Model\Attribute\Config $attributeConfig, $reindexPriceIndexerData, $reindexProductCategoryIndexerData, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $catalogSession, $assetRepo, $coreRegistry, $attributeConfig, $reindexPriceIndexerData, $reindexProductCategoryIndexerData, $productRepository, $categoryRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function isDataForPriceIndexerWasChanged($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataForPriceIndexerWasChanged');
        return $pluginInfo ? $this->___callPlugins('isDataForPriceIndexerWasChanged', func_get_args(), $pluginInfo) : parent::isDataForPriceIndexerWasChanged($data);
    }

    /**
     * {@inheritdoc}
     */
    public function isDataForProductCategoryIndexerWasChanged(\Magento\Catalog\Model\Product $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataForProductCategoryIndexerWasChanged');
        return $pluginInfo ? $this->___callPlugins('isDataForProductCategoryIndexerWasChanged', func_get_args(), $pluginInfo) : parent::isDataForProductCategoryIndexerWasChanged($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrl');
        return $pluginInfo ? $this->___callPlugins('getProductUrl', func_get_args(), $pluginInfo) : parent::getProductUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        return $pluginInfo ? $this->___callPlugins('getPrice', func_get_args(), $pluginInfo) : parent::getPrice($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getFinalPrice($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFinalPrice');
        return $pluginInfo ? $this->___callPlugins('getFinalPrice', func_get_args(), $pluginInfo) : parent::getFinalPrice($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageUrl');
        return $pluginInfo ? $this->___callPlugins('getImageUrl', func_get_args(), $pluginInfo) : parent::getImageUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSmallImageUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSmallImageUrl');
        return $pluginInfo ? $this->___callPlugins('getSmallImageUrl', func_get_args(), $pluginInfo) : parent::getSmallImageUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getThumbnailUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getThumbnailUrl');
        return $pluginInfo ? $this->___callPlugins('getThumbnailUrl', func_get_args(), $pluginInfo) : parent::getThumbnailUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailToFriendUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmailToFriendUrl');
        return $pluginInfo ? $this->___callPlugins('getEmailToFriendUrl', func_get_args(), $pluginInfo) : parent::getEmailToFriendUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatuses');
        return $pluginInfo ? $this->___callPlugins('getStatuses', func_get_args(), $pluginInfo) : parent::getStatuses();
    }

    /**
     * {@inheritdoc}
     */
    public function canShow($product, $where = 'catalog')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShow');
        return $pluginInfo ? $this->___callPlugins('canShow', func_get_args(), $pluginInfo) : parent::canShow($product, $where);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseCanonicalTag($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseCanonicalTag');
        return $pluginInfo ? $this->___callPlugins('canUseCanonicalTag', func_get_args(), $pluginInfo) : parent::canUseCanonicalTag($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeInputTypes($inputType = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeInputTypes');
        return $pluginInfo ? $this->___callPlugins('getAttributeInputTypes', func_get_args(), $pluginInfo) : parent::getAttributeInputTypes($inputType);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeBackendModelByInputType($inputType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeBackendModelByInputType');
        return $pluginInfo ? $this->___callPlugins('getAttributeBackendModelByInputType', func_get_args(), $pluginInfo) : parent::getAttributeBackendModelByInputType($inputType);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSourceModelByInputType($inputType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSourceModelByInputType');
        return $pluginInfo ? $this->___callPlugins('getAttributeSourceModelByInputType', func_get_args(), $pluginInfo) : parent::getAttributeSourceModelByInputType($inputType);
    }

    /**
     * {@inheritdoc}
     */
    public function initProduct($productId, $controller, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initProduct');
        return $pluginInfo ? $this->___callPlugins('initProduct', func_get_args(), $pluginInfo) : parent::initProduct($productId, $controller, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareProductOptions($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareProductOptions');
        return $pluginInfo ? $this->___callPlugins('prepareProductOptions', func_get_args(), $pluginInfo) : parent::prepareProductOptions($product, $buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function addParamsToBuyRequest($buyRequest, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addParamsToBuyRequest');
        return $pluginInfo ? $this->___callPlugins('addParamsToBuyRequest', func_get_args(), $pluginInfo) : parent::addParamsToBuyRequest($buyRequest, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function setSkipSaleableCheck($skipSaleableCheck = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSkipSaleableCheck');
        return $pluginInfo ? $this->___callPlugins('setSkipSaleableCheck', func_get_args(), $pluginInfo) : parent::setSkipSaleableCheck($skipSaleableCheck);
    }

    /**
     * {@inheritdoc}
     */
    public function getSkipSaleableCheck()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSkipSaleableCheck');
        return $pluginInfo ? $this->___callPlugins('getSkipSaleableCheck', func_get_args(), $pluginInfo) : parent::getSkipSaleableCheck();
    }

    /**
     * {@inheritdoc}
     */
    public function getFieldsAutogenerationMasks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFieldsAutogenerationMasks');
        return $pluginInfo ? $this->___callPlugins('getFieldsAutogenerationMasks', func_get_args(), $pluginInfo) : parent::getFieldsAutogenerationMasks();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesAllowedForAutogeneration()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesAllowedForAutogeneration');
        return $pluginInfo ? $this->___callPlugins('getAttributesAllowedForAutogeneration', func_get_args(), $pluginInfo) : parent::getAttributesAllowedForAutogeneration();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentBase64Url()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentBase64Url');
        return $pluginInfo ? $this->___callPlugins('getCurrentBase64Url', func_get_args(), $pluginInfo) : parent::getCurrentBase64Url();
    }

    /**
     * {@inheritdoc}
     */
    public function getEncodedUrl($url = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEncodedUrl');
        return $pluginInfo ? $this->___callPlugins('getEncodedUrl', func_get_args(), $pluginInfo) : parent::getEncodedUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function addRequestParam($url, $param)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRequestParam');
        return $pluginInfo ? $this->___callPlugins('addRequestParam', func_get_args(), $pluginInfo) : parent::addRequestParam($url, $param);
    }

    /**
     * {@inheritdoc}
     */
    public function removeRequestParam($url, $paramKey, $caseSensitive = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeRequestParam');
        return $pluginInfo ? $this->___callPlugins('removeRequestParam', func_get_args(), $pluginInfo) : parent::removeRequestParam($url, $paramKey, $caseSensitive);
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isModuleOutputEnabled');
        return $pluginInfo ? $this->___callPlugins('isModuleOutputEnabled', func_get_args(), $pluginInfo) : parent::isModuleOutputEnabled($moduleName);
    }
}
