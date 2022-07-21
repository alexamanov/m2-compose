<?php
namespace Magento\Customer\Model\Authorization\CustomerSessionUserContext;

/**
 * Interceptor class for @see \Magento\Customer\Model\Authorization\CustomerSessionUserContext
 */
class Interceptor extends \Magento\Customer\Model\Authorization\CustomerSessionUserContext implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUserId');
        return $pluginInfo ? $this->___callPlugins('getUserId', func_get_args(), $pluginInfo) : parent::getUserId();
    }

    /**
     * {@inheritdoc}
     */
    public function getUserType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUserType');
        return $pluginInfo ? $this->___callPlugins('getUserType', func_get_args(), $pluginInfo) : parent::getUserType();
    }
}
