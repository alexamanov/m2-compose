<?php
namespace Magento\CatalogWidget\Block\Product\ProductsList;

/**
 * Interceptor class for @see \Magento\CatalogWidget\Block\Product\ProductsList
 */
class Interceptor extends \Magento\CatalogWidget\Block\Product\ProductsList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\App\Http\Context $httpContext, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Widget\Helper\Conditions $conditionsHelper, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $json = null, ?\Magento\Framework\View\LayoutFactory $layoutFactory = null, ?\Magento\Framework\Url\EncoderInterface $urlEncoder = null, ?\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository = null)
    {
        $this->___init();
        parent::__construct($context, $productCollectionFactory, $catalogProductVisibility, $httpContext, $sqlBuilder, $rule, $conditionsHelper, $data, $json, $layoutFactory, $urlEncoder, $categoryRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        return $pluginInfo ? $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo) : parent::getCacheKeyInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductPriceHtml(\Magento\Catalog\Model\Product $product, $priceType = null, $renderZone = 'item_list', array $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductPriceHtml');
        return $pluginInfo ? $this->___callPlugins('getProductPriceHtml', func_get_args(), $pluginInfo) : parent::getProductPriceHtml($product, $priceType, $renderZone, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToCartPostParams(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToCartPostParams');
        return $pluginInfo ? $this->___callPlugins('getAddToCartPostParams', func_get_args(), $pluginInfo) : parent::getAddToCartPostParams($product);
    }

    /**
     * {@inheritdoc}
     */
    public function createCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCollection');
        return $pluginInfo ? $this->___callPlugins('createCollection', func_get_args(), $pluginInfo) : parent::createCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsCount');
        return $pluginInfo ? $this->___callPlugins('getProductsCount', func_get_args(), $pluginInfo) : parent::getProductsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPerPage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsPerPage');
        return $pluginInfo ? $this->___callPlugins('getProductsPerPage', func_get_args(), $pluginInfo) : parent::getProductsPerPage();
    }

    /**
     * {@inheritdoc}
     */
    public function showPager()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showPager');
        return $pluginInfo ? $this->___callPlugins('showPager', func_get_args(), $pluginInfo) : parent::showPager();
    }

    /**
     * {@inheritdoc}
     */
    public function getPagerHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPagerHtml');
        return $pluginInfo ? $this->___callPlugins('getPagerHtml', func_get_args(), $pluginInfo) : parent::getPagerHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToCartUrl($product, $additional = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToCartUrl');
        return $pluginInfo ? $this->___callPlugins('getAddToCartUrl', func_get_args(), $pluginInfo) : parent::getAddToCartUrl($product, $additional);
    }

    /**
     * {@inheritdoc}
     */
    public function getSubmitUrl($product, $additional = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubmitUrl');
        return $pluginInfo ? $this->___callPlugins('getSubmitUrl', func_get_args(), $pluginInfo) : parent::getSubmitUrl($product, $additional);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToWishlistParams($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToWishlistParams');
        return $pluginInfo ? $this->___callPlugins('getAddToWishlistParams', func_get_args(), $pluginInfo) : parent::getAddToWishlistParams($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddToCompareUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddToCompareUrl');
        return $pluginInfo ? $this->___callPlugins('getAddToCompareUrl', func_get_args(), $pluginInfo) : parent::getAddToCompareUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinimalQty($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinimalQty');
        return $pluginInfo ? $this->___callPlugins('getMinimalQty', func_get_args(), $pluginInfo) : parent::getMinimalQty($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = false, $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        return $pluginInfo ? $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo) : parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProduct');
        return $pluginInfo ? $this->___callPlugins('getProduct', func_get_args(), $pluginInfo) : parent::getProduct();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductUrl($product, $additional = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrl');
        return $pluginInfo ? $this->___callPlugins('getProductUrl', func_get_args(), $pluginInfo) : parent::getProductUrl($product, $additional);
    }

    /**
     * {@inheritdoc}
     */
    public function hasProductUrl($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasProductUrl');
        return $pluginInfo ? $this->___callPlugins('hasProductUrl', func_get_args(), $pluginInfo) : parent::hasProductUrl($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnCount');
        return $pluginInfo ? $this->___callPlugins('getColumnCount', func_get_args(), $pluginInfo) : parent::getColumnCount();
    }

    /**
     * {@inheritdoc}
     */
    public function addColumnCountLayoutDepend($pageLayout, $columnCount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumnCountLayoutDepend');
        return $pluginInfo ? $this->___callPlugins('addColumnCountLayoutDepend', func_get_args(), $pluginInfo) : parent::addColumnCountLayoutDepend($pageLayout, $columnCount);
    }

    /**
     * {@inheritdoc}
     */
    public function removeColumnCountLayoutDepend($pageLayout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeColumnCountLayoutDepend');
        return $pluginInfo ? $this->___callPlugins('removeColumnCountLayoutDepend', func_get_args(), $pluginInfo) : parent::removeColumnCountLayoutDepend($pageLayout);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnCountLayoutDepend($pageLayout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnCountLayoutDepend');
        return $pluginInfo ? $this->___callPlugins('getColumnCountLayoutDepend', func_get_args(), $pluginInfo) : parent::getColumnCountLayoutDepend($pageLayout);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageLayout');
        return $pluginInfo ? $this->___callPlugins('getPageLayout', func_get_args(), $pluginInfo) : parent::getPageLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCanShowProductPrice($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCanShowProductPrice');
        return $pluginInfo ? $this->___callPlugins('getCanShowProductPrice', func_get_args(), $pluginInfo) : parent::getCanShowProductPrice($product);
    }

    /**
     * {@inheritdoc}
     */
    public function displayProductStockStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayProductStockStatus');
        return $pluginInfo ? $this->___callPlugins('displayProductStockStatus', func_get_args(), $pluginInfo) : parent::displayProductStockStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getRandomString($length, $chars = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRandomString');
        return $pluginInfo ? $this->___callPlugins('getRandomString', func_get_args(), $pluginInfo) : parent::getRandomString($length, $chars);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductPrice(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductPrice');
        return $pluginInfo ? $this->___callPlugins('getProductPrice', func_get_args(), $pluginInfo) : parent::getProductPrice($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirectToCartEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRedirectToCartEnabled');
        return $pluginInfo ? $this->___callPlugins('isRedirectToCartEnabled', func_get_args(), $pluginInfo) : parent::isRedirectToCartEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductDetailsHtml(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductDetailsHtml');
        return $pluginInfo ? $this->___callPlugins('getProductDetailsHtml', func_get_args(), $pluginInfo) : parent::getProductDetailsHtml($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getDetailsRenderer($type = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDetailsRenderer');
        return $pluginInfo ? $this->___callPlugins('getDetailsRenderer', func_get_args(), $pluginInfo) : parent::getDetailsRenderer($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateContext');
        return $pluginInfo ? $this->___callPlugins('setTemplateContext', func_get_args(), $pluginInfo) : parent::setTemplateContext($templateContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplate');
        return $pluginInfo ? $this->___callPlugins('getTemplate', func_get_args(), $pluginInfo) : parent::getTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        return $pluginInfo ? $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo) : parent::setTemplate($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFile');
        return $pluginInfo ? $this->___callPlugins('getTemplateFile', func_get_args(), $pluginInfo) : parent::getTemplateFile($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getArea');
        return $pluginInfo ? $this->___callPlugins('getArea', func_get_args(), $pluginInfo) : parent::getArea();
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        return $pluginInfo ? $this->___callPlugins('assign', func_get_args(), $pluginInfo) : parent::assign($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchView');
        return $pluginInfo ? $this->___callPlugins('fetchView', func_get_args(), $pluginInfo) : parent::fetchView($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getObjectData');
        return $pluginInfo ? $this->___callPlugins('getObjectData', func_get_args(), $pluginInfo) : parent::getObjectData($object, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsLayout');
        return $pluginInfo ? $this->___callPlugins('getJsLayout', func_get_args(), $pluginInfo) : parent::getJsLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentBlock');
        return $pluginInfo ? $this->___callPlugins('getParentBlock', func_get_args(), $pluginInfo) : parent::getParentBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        return $pluginInfo ? $this->___callPlugins('getLayout', func_get_args(), $pluginInfo) : parent::getLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNameInLayout');
        return $pluginInfo ? $this->___callPlugins('setNameInLayout', func_get_args(), $pluginInfo) : parent::setNameInLayout($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        return $pluginInfo ? $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo) : parent::getChildNames();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        return $pluginInfo ? $this->___callPlugins('setChild', func_get_args(), $pluginInfo) : parent::setChild($alias, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        return $pluginInfo ? $this->___callPlugins('addChild', func_get_args(), $pluginInfo) : parent::addChild($alias, $block, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        return $pluginInfo ? $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo) : parent::unsetChild($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetCallChild');
        return $pluginInfo ? $this->___callPlugins('unsetCallChild', func_get_args(), $pluginInfo) : parent::unsetCallChild($alias, $callback, $result, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChildren');
        return $pluginInfo ? $this->___callPlugins('unsetChildren', func_get_args(), $pluginInfo) : parent::unsetChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        return $pluginInfo ? $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo) : parent::getChildBlock($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildHtml', func_get_args(), $pluginInfo) : parent::getChildHtml($alias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildChildHtml');
        return $pluginInfo ? $this->___callPlugins('getChildChildHtml', func_get_args(), $pluginInfo) : parent::getChildChildHtml($alias, $childChildAlias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockHtml');
        return $pluginInfo ? $this->___callPlugins('getBlockHtml', func_get_args(), $pluginInfo) : parent::getBlockHtml($name);
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insert');
        return $pluginInfo ? $this->___callPlugins('insert', func_get_args(), $pluginInfo) : parent::insert($element, $siblingName, $after, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'append');
        return $pluginInfo ? $this->___callPlugins('append', func_get_args(), $pluginInfo) : parent::append($element, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        return $pluginInfo ? $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo) : parent::getGroupChildNames($groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildData');
        return $pluginInfo ? $this->___callPlugins('getChildData', func_get_args(), $pluginInfo) : parent::getChildData($alias, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiId');
        return $pluginInfo ? $this->___callPlugins('getUiId', func_get_args(), $pluginInfo) : parent::getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJsId');
        return $pluginInfo ? $this->___callPlugins('getJsId', func_get_args(), $pluginInfo) : parent::getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getViewFileUrl');
        return $pluginInfo ? $this->___callPlugins('getViewFileUrl', func_get_args(), $pluginInfo) : parent::getViewFileUrl($fileId, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatDate');
        return $pluginInfo ? $this->___callPlugins('formatDate', func_get_args(), $pluginInfo) : parent::formatDate($date, $format, $showTime, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTime');
        return $pluginInfo ? $this->___callPlugins('formatTime', func_get_args(), $pluginInfo) : parent::formatTime($time, $format, $showDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        return $pluginInfo ? $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo) : parent::getModuleName();
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtml');
        return $pluginInfo ? $this->___callPlugins('escapeHtml', func_get_args(), $pluginInfo) : parent::escapeHtml($data, $allowedTags);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJs');
        return $pluginInfo ? $this->___callPlugins('escapeJs', func_get_args(), $pluginInfo) : parent::escapeJs($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlAttr');
        return $pluginInfo ? $this->___callPlugins('escapeHtmlAttr', func_get_args(), $pluginInfo) : parent::escapeHtmlAttr($string, $escapeSingleQuote);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeCss');
        return $pluginInfo ? $this->___callPlugins('escapeCss', func_get_args(), $pluginInfo) : parent::escapeCss($string);
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stripTags');
        return $pluginInfo ? $this->___callPlugins('stripTags', func_get_args(), $pluginInfo) : parent::stripTags($data, $allowableTags, $allowHtmlEntities);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeUrl');
        return $pluginInfo ? $this->___callPlugins('escapeUrl', func_get_args(), $pluginInfo) : parent::escapeUrl($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeXssInUrl');
        return $pluginInfo ? $this->___callPlugins('escapeXssInUrl', func_get_args(), $pluginInfo) : parent::escapeXssInUrl($data);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeQuote');
        return $pluginInfo ? $this->___callPlugins('escapeQuote', func_get_args(), $pluginInfo) : parent::escapeQuote($data, $addSlashes);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeJsQuote');
        return $pluginInfo ? $this->___callPlugins('escapeJsQuote', func_get_args(), $pluginInfo) : parent::escapeJsQuote($data, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNameInLayout');
        return $pluginInfo ? $this->___callPlugins('getNameInLayout', func_get_args(), $pluginInfo) : parent::getNameInLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        return $pluginInfo ? $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo) : parent::getCacheKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        return $pluginInfo ? $this->___callPlugins('getVar', func_get_args(), $pluginInfo) : parent::getVar($name, $module);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopePrivate');
        return $pluginInfo ? $this->___callPlugins('isScopePrivate', func_get_args(), $pluginInfo) : parent::isScopePrivate();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
