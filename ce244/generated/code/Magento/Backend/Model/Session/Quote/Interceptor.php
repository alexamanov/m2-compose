<?php
namespace Magento\Backend\Model\Session\Quote;

/**
 * Interceptor class for @see \Magento\Backend\Model\Session\Quote
 */
class Interceptor extends \Magento\Backend\Model\Session\Quote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Quote\Model\QuoteFactory $quoteFactory)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $customerRepository, $quoteRepository, $orderFactory, $storeManager, $groupManagement, $quoteFactory);
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
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        return $pluginInfo ? $this->___callPlugins('getOrder', func_get_args(), $pluginInfo) : parent::getOrder();
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
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        return $pluginInfo ? $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo) : parent::clearStorage();
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
