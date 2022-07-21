<?php
namespace Magento\Framework\View\Asset\Minification;

/**
 * Interceptor class for @see \Magento\Framework\View\Asset\Minification
 */
class Interceptor extends \Magento\Framework\View\Asset\Minification implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\App\State $appState, $scope = 'store')
    {
        $this->___init();
        parent::__construct($scopeConfig, $appState, $scope);
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled($contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabled');
        return $pluginInfo ? $this->___callPlugins('isEnabled', func_get_args(), $pluginInfo) : parent::isEnabled($contentType);
    }

    /**
     * {@inheritdoc}
     */
    public function addMinifiedSign($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMinifiedSign');
        return $pluginInfo ? $this->___callPlugins('addMinifiedSign', func_get_args(), $pluginInfo) : parent::addMinifiedSign($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function removeMinifiedSign($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeMinifiedSign');
        return $pluginInfo ? $this->___callPlugins('removeMinifiedSign', func_get_args(), $pluginInfo) : parent::removeMinifiedSign($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function isMinifiedFilename($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isMinifiedFilename');
        return $pluginInfo ? $this->___callPlugins('isMinifiedFilename', func_get_args(), $pluginInfo) : parent::isMinifiedFilename($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function isExcluded($filename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isExcluded');
        return $pluginInfo ? $this->___callPlugins('isExcluded', func_get_args(), $pluginInfo) : parent::isExcluded($filename);
    }

    /**
     * {@inheritdoc}
     */
    public function getExcludes($contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExcludes');
        return $pluginInfo ? $this->___callPlugins('getExcludes', func_get_args(), $pluginInfo) : parent::getExcludes($contentType);
    }
}
