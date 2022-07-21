<?php
namespace Magento\Store\Model\StoreCookieManager;

/**
 * Interceptor class for @see \Magento\Store\Model\StoreCookieManager
 */
class Interceptor extends \Magento\Store\Model\StoreCookieManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager)
    {
        $this->___init();
        parent::__construct($cookieMetadataFactory, $cookieManager);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreCodeFromCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreCodeFromCookie');
        return $pluginInfo ? $this->___callPlugins('getStoreCodeFromCookie', func_get_args(), $pluginInfo) : parent::getStoreCodeFromCookie();
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreCookie(\Magento\Store\Api\Data\StoreInterface $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreCookie');
        return $pluginInfo ? $this->___callPlugins('setStoreCookie', func_get_args(), $pluginInfo) : parent::setStoreCookie($store);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteStoreCookie(\Magento\Store\Api\Data\StoreInterface $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteStoreCookie');
        return $pluginInfo ? $this->___callPlugins('deleteStoreCookie', func_get_args(), $pluginInfo) : parent::deleteStoreCookie($store);
    }
}
