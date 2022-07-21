<?php
namespace Magento\Backend\Model\Auth\Session;

/**
 * Interceptor class for @see \Magento\Backend\Model\Auth\Session
 */
class Interceptor extends \Magento\Backend\Model\Auth\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Framework\Acl\Builder $aclBuilder, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Backend\App\ConfigInterface $config, ?\Magento\Framework\Message\ManagerInterface $messageManager = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $aclBuilder, $backendUrl, $config, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshAcl($user = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refreshAcl');
        return $pluginInfo ? $this->___callPlugins('refreshAcl', func_get_args(), $pluginInfo) : parent::refreshAcl($user);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed($resource, $privilege = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        return $pluginInfo ? $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo) : parent::isAllowed($resource, $privilege);
    }

    /**
     * {@inheritdoc}
     */
    public function isLoggedIn()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoggedIn');
        return $pluginInfo ? $this->___callPlugins('isLoggedIn', func_get_args(), $pluginInfo) : parent::isLoggedIn();
    }

    /**
     * {@inheritdoc}
     */
    public function prolong()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prolong');
        return $pluginInfo ? $this->___callPlugins('prolong', func_get_args(), $pluginInfo) : parent::prolong();
    }

    /**
     * {@inheritdoc}
     */
    public function isFirstPageAfterLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFirstPageAfterLogin');
        return $pluginInfo ? $this->___callPlugins('isFirstPageAfterLogin', func_get_args(), $pluginInfo) : parent::isFirstPageAfterLogin();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFirstPageAfterLogin($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFirstPageAfterLogin');
        return $pluginInfo ? $this->___callPlugins('setIsFirstPageAfterLogin', func_get_args(), $pluginInfo) : parent::setIsFirstPageAfterLogin($value);
    }

    /**
     * {@inheritdoc}
     */
    public function processLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogin');
        return $pluginInfo ? $this->___callPlugins('processLogin', func_get_args(), $pluginInfo) : parent::processLogin();
    }

    /**
     * {@inheritdoc}
     */
    public function processLogout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogout');
        return $pluginInfo ? $this->___callPlugins('processLogout', func_get_args(), $pluginInfo) : parent::processLogout();
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
