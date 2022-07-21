<?php
namespace Magento\Checkout\Model\Cart;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Cart
 */
class Interceptor extends \Magento\Checkout\Model\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Checkout\Model\ResourceModel\Cart $resourceCart, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, array $data = [])
    {
        $this->___init();
        parent::__construct($eventManager, $scopeConfig, $storeManager, $resourceCart, $checkoutSession, $customerSession, $messageManager, $stockRegistry, $stockState, $quoteRepository, $productRepository, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutSession');
        return $pluginInfo ? $this->___callPlugins('getCheckoutSession', func_get_args(), $pluginInfo) : parent::getCheckoutSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerSession');
        return $pluginInfo ? $this->___callPlugins('getCustomerSession', func_get_args(), $pluginInfo) : parent::getCustomerSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        return $pluginInfo ? $this->___callPlugins('getItems', func_get_args(), $pluginInfo) : parent::getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteProductIds');
        return $pluginInfo ? $this->___callPlugins('getQuoteProductIds', func_get_args(), $pluginInfo) : parent::getQuoteProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        return $pluginInfo ? $this->___callPlugins('getQuote', func_get_args(), $pluginInfo) : parent::getQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuote(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuote');
        return $pluginInfo ? $this->___callPlugins('setQuote', func_get_args(), $pluginInfo) : parent::setQuote($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrderItem($orderItem, $qtyFlag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrderItem');
        return $pluginInfo ? $this->___callPlugins('addOrderItem', func_get_args(), $pluginInfo) : parent::addOrderItem($orderItem, $qtyFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct($productInfo, $requestInfo = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProduct');
        return $pluginInfo ? $this->___callPlugins('addProduct', func_get_args(), $pluginInfo) : parent::addProduct($productInfo, $requestInfo);
    }

    /**
     * {@inheritdoc}
     */
    public function addProductsByIds($productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProductsByIds');
        return $pluginInfo ? $this->___callPlugins('addProductsByIds', func_get_args(), $pluginInfo) : parent::addProductsByIds($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function suggestItemsQty($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suggestItemsQty');
        return $pluginInfo ? $this->___callPlugins('suggestItemsQty', func_get_args(), $pluginInfo) : parent::suggestItemsQty($data);
    }

    /**
     * {@inheritdoc}
     */
    public function updateItems($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItems');
        return $pluginInfo ? $this->___callPlugins('updateItems', func_get_args(), $pluginInfo) : parent::updateItems($data);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItem');
        return $pluginInfo ? $this->___callPlugins('removeItem', func_get_args(), $pluginInfo) : parent::removeItem($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function saveQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveQuote');
        return $pluginInfo ? $this->___callPlugins('saveQuote', func_get_args(), $pluginInfo) : parent::saveQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function truncate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'truncate');
        return $pluginInfo ? $this->___callPlugins('truncate', func_get_args(), $pluginInfo) : parent::truncate();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductIds');
        return $pluginInfo ? $this->___callPlugins('getProductIds', func_get_args(), $pluginInfo) : parent::getProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getSummaryQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSummaryQty');
        return $pluginInfo ? $this->___callPlugins('getSummaryQty', func_get_args(), $pluginInfo) : parent::getSummaryQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsCount');
        return $pluginInfo ? $this->___callPlugins('getItemsCount', func_get_args(), $pluginInfo) : parent::getItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsQty');
        return $pluginInfo ? $this->___callPlugins('getItemsQty', func_get_args(), $pluginInfo) : parent::getItemsQty();
    }

    /**
     * {@inheritdoc}
     */
    public function updateItem($itemId, $requestInfo = null, $updatingParams = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItem');
        return $pluginInfo ? $this->___callPlugins('updateItem', func_get_args(), $pluginInfo) : parent::updateItem($itemId, $requestInfo, $updatingParams);
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
