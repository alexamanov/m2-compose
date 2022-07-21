<?php
namespace Magento\Framework\App\MaintenanceMode;

/**
 * Interceptor class for @see \Magento\Framework\App\MaintenanceMode
 */
class Interceptor extends \Magento\Framework\App\MaintenanceMode implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, ?\Magento\Framework\Event\Manager $eventManager = null)
    {
        $this->___init();
        parent::__construct($filesystem, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function isOn($remoteAddr = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOn');
        return $pluginInfo ? $this->___callPlugins('isOn', func_get_args(), $pluginInfo) : parent::isOn($remoteAddr);
    }

    /**
     * {@inheritdoc}
     */
    public function set($isOn)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'set');
        return $pluginInfo ? $this->___callPlugins('set', func_get_args(), $pluginInfo) : parent::set($isOn);
    }

    /**
     * {@inheritdoc}
     */
    public function setAddresses($addresses)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddresses');
        return $pluginInfo ? $this->___callPlugins('setAddresses', func_get_args(), $pluginInfo) : parent::setAddresses($addresses);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressInfo');
        return $pluginInfo ? $this->___callPlugins('getAddressInfo', func_get_args(), $pluginInfo) : parent::getAddressInfo();
    }
}
