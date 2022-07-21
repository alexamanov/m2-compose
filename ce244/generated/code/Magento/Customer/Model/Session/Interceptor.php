<?php
namespace Magento\Customer\Model\Session;

/**
 * Interceptor class for @see \Magento\Customer\Model\Session
 */
class Interceptor extends \Magento\Customer\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Url\Helper\Data $coreUrl, \Magento\Customer\Model\Url $customerUrl, \Magento\Customer\Model\ResourceModel\Customer $customerResource, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\UrlFactory $urlFactory, \Magento\Framework\Session\Generic $session, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\App\Response\Http $response, ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $configShare, $coreUrl, $customerUrl, $customerResource, $customerFactory, $urlFactory, $session, $eventManager, $httpContext, $customerRepository, $groupManagement, $response, $accountConfirmation);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerConfigShare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerConfigShare');
        return $pluginInfo ? $this->___callPlugins('getCustomerConfigShare', func_get_args(), $pluginInfo) : parent::getCustomerConfigShare();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerData(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerData');
        return $pluginInfo ? $this->___callPlugins('setCustomerData', func_get_args(), $pluginInfo) : parent::setCustomerData($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerData');
        return $pluginInfo ? $this->___callPlugins('getCustomerData', func_get_args(), $pluginInfo) : parent::getCustomerData();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerDataObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerDataObject');
        return $pluginInfo ? $this->___callPlugins('getCustomerDataObject', func_get_args(), $pluginInfo) : parent::getCustomerDataObject();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataObject(\Magento\Customer\Api\Data\CustomerInterface $customerData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerDataObject');
        return $pluginInfo ? $this->___callPlugins('setCustomerDataObject', func_get_args(), $pluginInfo) : parent::setCustomerDataObject($customerData);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomer(\Magento\Customer\Model\Customer $customerModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomer');
        return $pluginInfo ? $this->___callPlugins('setCustomer', func_get_args(), $pluginInfo) : parent::setCustomer($customerModel);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomer');
        return $pluginInfo ? $this->___callPlugins('getCustomer', func_get_args(), $pluginInfo) : parent::getCustomer();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerId');
        return $pluginInfo ? $this->___callPlugins('setCustomerId', func_get_args(), $pluginInfo) : parent::setCustomerId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerId');
        return $pluginInfo ? $this->___callPlugins('getCustomerId', func_get_args(), $pluginInfo) : parent::getCustomerId();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function setId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerGroupId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('setCustomerGroupId', func_get_args(), $pluginInfo) : parent::setCustomerGroupId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo) : parent::getCustomerGroupId();
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
    public function checkCustomerId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkCustomerId');
        return $pluginInfo ? $this->___callPlugins('checkCustomerId', func_get_args(), $pluginInfo) : parent::checkCustomerId($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerAsLoggedIn($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerAsLoggedIn');
        return $pluginInfo ? $this->___callPlugins('setCustomerAsLoggedIn', func_get_args(), $pluginInfo) : parent::setCustomerAsLoggedIn($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataAsLoggedIn($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerDataAsLoggedIn');
        return $pluginInfo ? $this->___callPlugins('setCustomerDataAsLoggedIn', func_get_args(), $pluginInfo) : parent::setCustomerDataAsLoggedIn($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function loginById($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loginById');
        return $pluginInfo ? $this->___callPlugins('loginById', func_get_args(), $pluginInfo) : parent::loginById($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logout');
        return $pluginInfo ? $this->___callPlugins('logout', func_get_args(), $pluginInfo) : parent::logout();
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($loginUrl = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        return $pluginInfo ? $this->___callPlugins('authenticate', func_get_args(), $pluginInfo) : parent::authenticate($loginUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function setBeforeAuthUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBeforeAuthUrl');
        return $pluginInfo ? $this->___callPlugins('setBeforeAuthUrl', func_get_args(), $pluginInfo) : parent::setBeforeAuthUrl($url);
    }

    /**
     * {@inheritdoc}
     */
    public function setAfterAuthUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAfterAuthUrl');
        return $pluginInfo ? $this->___callPlugins('setAfterAuthUrl', func_get_args(), $pluginInfo) : parent::setAfterAuthUrl($url);
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
    public function expireSessionCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'expireSessionCookie');
        return $pluginInfo ? $this->___callPlugins('expireSessionCookie', func_get_args(), $pluginInfo) : parent::expireSessionCookie();
    }
}
