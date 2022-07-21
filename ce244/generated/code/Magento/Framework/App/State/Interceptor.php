<?php
namespace Magento\Framework\App\State;

/**
 * Interceptor class for @see \Magento\Framework\App\State
 */
class Interceptor extends \Magento\Framework\App\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\ScopeInterface $configScope, $mode = 'default')
    {
        $this->___init();
        parent::__construct($configScope, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function getMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMode');
        return $pluginInfo ? $this->___callPlugins('getMode', func_get_args(), $pluginInfo) : parent::getMode();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDownloader($flag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDownloader');
        return $pluginInfo ? $this->___callPlugins('setIsDownloader', func_get_args(), $pluginInfo) : parent::setIsDownloader($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setAreaCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAreaCode');
        return $pluginInfo ? $this->___callPlugins('setAreaCode', func_get_args(), $pluginInfo) : parent::setAreaCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getAreaCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAreaCode');
        return $pluginInfo ? $this->___callPlugins('getAreaCode', func_get_args(), $pluginInfo) : parent::getAreaCode();
    }

    /**
     * {@inheritdoc}
     */
    public function isAreaCodeEmulated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAreaCodeEmulated');
        return $pluginInfo ? $this->___callPlugins('isAreaCodeEmulated', func_get_args(), $pluginInfo) : parent::isAreaCodeEmulated();
    }

    /**
     * {@inheritdoc}
     */
    public function emulateAreaCode($areaCode, $callback, $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'emulateAreaCode');
        return $pluginInfo ? $this->___callPlugins('emulateAreaCode', func_get_args(), $pluginInfo) : parent::emulateAreaCode($areaCode, $callback, $params);
    }
}
