<?php
namespace Magento\Checkout\Model\Session;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Session
 */
class Interceptor extends \Magento\Checkout\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Model\QuoteFactory $quoteFactory, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $orderFactory, $customerSession, $quoteRepository, $remoteAddress, $eventManager, $storeManager, $customerRepository, $quoteIdMaskFactory, $quoteFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerData($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerData');
        return $pluginInfo ? $this->___callPlugins('setCustomerData', func_get_args(), $pluginInfo) : parent::setCustomerData($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function hasQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasQuote');
        return $pluginInfo ? $this->___callPlugins('hasQuote', func_get_args(), $pluginInfo) : parent::hasQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setLoadInactive($load = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLoadInactive');
        return $pluginInfo ? $this->___callPlugins('setLoadInactive', func_get_args(), $pluginInfo) : parent::setLoadInactive($load);
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
    public function setQuoteId($quoteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuoteId');
        return $pluginInfo ? $this->___callPlugins('setQuoteId', func_get_args(), $pluginInfo) : parent::setQuoteId($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteId');
        return $pluginInfo ? $this->___callPlugins('getQuoteId', func_get_args(), $pluginInfo) : parent::getQuoteId();
    }

    /**
     * {@inheritdoc}
     */
    public function loadCustomerQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadCustomerQuote');
        return $pluginInfo ? $this->___callPlugins('loadCustomerQuote', func_get_args(), $pluginInfo) : parent::loadCustomerQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setStepData($step, $data, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStepData');
        return $pluginInfo ? $this->___callPlugins('setStepData', func_get_args(), $pluginInfo) : parent::setStepData($step, $data, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getStepData($step = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStepData');
        return $pluginInfo ? $this->___callPlugins('getStepData', func_get_args(), $pluginInfo) : parent::getStepData($step, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function clearQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearQuote');
        return $pluginInfo ? $this->___callPlugins('clearQuote', func_get_args(), $pluginInfo) : parent::clearQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        return $pluginInfo ? $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo) : parent::clearStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function clearHelperData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHelperData');
        return $pluginInfo ? $this->___callPlugins('clearHelperData', func_get_args(), $pluginInfo) : parent::clearHelperData();
    }

    /**
     * {@inheritdoc}
     */
    public function resetCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetCheckout');
        return $pluginInfo ? $this->___callPlugins('resetCheckout', func_get_args(), $pluginInfo) : parent::resetCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function replaceQuote($quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'replaceQuote');
        return $pluginInfo ? $this->___callPlugins('replaceQuote', func_get_args(), $pluginInfo) : parent::replaceQuote($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRealOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastRealOrder');
        return $pluginInfo ? $this->___callPlugins('getLastRealOrder', func_get_args(), $pluginInfo) : parent::getLastRealOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function restoreQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'restoreQuote');
        return $pluginInfo ? $this->___callPlugins('restoreQuote', func_get_args(), $pluginInfo) : parent::restoreQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function writeClose()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'writeClose');
        return $pluginInfo ? $this->___callPlugins('writeClose', func_get_args(), $pluginInfo) : parent::writeClose();
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
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        return $pluginInfo ? $this->___callPlugins('start', func_get_args(), $pluginInfo) : parent::start();
    }

    /**
     * {@inheritdoc}
     */
    public function isSessionExists()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSessionExists');
        return $pluginInfo ? $this->___callPlugins('isSessionExists', func_get_args(), $pluginInfo) : parent::isSessionExists();
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $clear = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $clear);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionId');
        return $pluginInfo ? $this->___callPlugins('getSessionId', func_get_args(), $pluginInfo) : parent::getSessionId();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(?array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'destroy');
        return $pluginInfo ? $this->___callPlugins('destroy', func_get_args(), $pluginInfo) : parent::destroy($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieDomain');
        return $pluginInfo ? $this->___callPlugins('getCookieDomain', func_get_args(), $pluginInfo) : parent::getCookieDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookiePath');
        return $pluginInfo ? $this->___callPlugins('getCookiePath', func_get_args(), $pluginInfo) : parent::getCookiePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieLifetime');
        return $pluginInfo ? $this->___callPlugins('getCookieLifetime', func_get_args(), $pluginInfo) : parent::getCookieLifetime();
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSessionId');
        return $pluginInfo ? $this->___callPlugins('setSessionId', func_get_args(), $pluginInfo) : parent::setSessionId($sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdForHost($urlHost)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionIdForHost');
        return $pluginInfo ? $this->___callPlugins('getSessionIdForHost', func_get_args(), $pluginInfo) : parent::getSessionIdForHost($urlHost);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForHost($host)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForHost');
        return $pluginInfo ? $this->___callPlugins('isValidForHost', func_get_args(), $pluginInfo) : parent::isValidForHost($host);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForPath');
        return $pluginInfo ? $this->___callPlugins('isValidForPath', func_get_args(), $pluginInfo) : parent::isValidForPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'regenerateId');
        return $pluginInfo ? $this->___callPlugins('regenerateId', func_get_args(), $pluginInfo) : parent::regenerateId();
    }

    /**
     * {@inheritdoc}
     */
    public function expireSessionCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'expireSessionCookie');
        return $pluginInfo ? $this->___callPlugins('expireSessionCookie', func_get_args(), $pluginInfo) : parent::expireSessionCookie();
    }
}
