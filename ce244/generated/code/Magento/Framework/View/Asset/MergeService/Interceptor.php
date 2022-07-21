<?php
namespace Magento\Framework\View\Asset\MergeService;

/**
 * Interceptor class for @see \Magento\Framework\View\Asset\MergeService
 */
class Interceptor extends \Magento\Framework\View\Asset\MergeService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\View\Asset\ConfigInterface $config, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\State $state)
    {
        $this->___init();
        parent::__construct($objectManager, $config, $filesystem, $state);
    }

    /**
     * {@inheritdoc}
     */
    public function getMergedAssets(array $assets, $contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMergedAssets');
        return $pluginInfo ? $this->___callPlugins('getMergedAssets', func_get_args(), $pluginInfo) : parent::getMergedAssets($assets, $contentType);
    }

    /**
     * {@inheritdoc}
     */
    public function cleanMergedJsCss()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanMergedJsCss');
        return $pluginInfo ? $this->___callPlugins('cleanMergedJsCss', func_get_args(), $pluginInfo) : parent::cleanMergedJsCss();
    }
}
