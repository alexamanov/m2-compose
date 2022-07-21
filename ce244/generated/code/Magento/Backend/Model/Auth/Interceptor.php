<?php
namespace Magento\Backend\Model\Auth;

/**
 * Interceptor class for @see \Magento\Backend\Model\Auth
 */
class Interceptor extends \Magento\Backend\Model\Auth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Backend\Helper\Data $backendData, \Magento\Backend\Model\Auth\StorageInterface $authStorage, \Magento\Backend\Model\Auth\Credential\StorageInterface $credentialStorage, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\Framework\Data\Collection\ModelFactory $modelFactory)
    {
        $this->___init();
        parent::__construct($eventManager, $backendData, $authStorage, $credentialStorage, $coreConfig, $modelFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthStorage($storage)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAuthStorage');
        return $pluginInfo ? $this->___callPlugins('setAuthStorage', func_get_args(), $pluginInfo) : parent::setAuthStorage($storage);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthStorage');
        return $pluginInfo ? $this->___callPlugins('getAuthStorage', func_get_args(), $pluginInfo) : parent::getAuthStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUser');
        return $pluginInfo ? $this->___callPlugins('getUser', func_get_args(), $pluginInfo) : parent::getUser();
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentialStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCredentialStorage');
        return $pluginInfo ? $this->___callPlugins('getCredentialStorage', func_get_args(), $pluginInfo) : parent::getCredentialStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'login');
        return $pluginInfo ? $this->___callPlugins('login', func_get_args(), $pluginInfo) : parent::login($username, $password);
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
    public function isLoggedIn()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoggedIn');
        return $pluginInfo ? $this->___callPlugins('isLoggedIn', func_get_args(), $pluginInfo) : parent::isLoggedIn();
    }
}
