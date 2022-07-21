<?php
namespace Magento\Framework\App\PageCache\Cache;

/**
 * Interceptor class for @see \Magento\Framework\App\PageCache\Cache
 */
class Interceptor extends \Magento\Framework\App\PageCache\Cache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Frontend\Pool $frontendPool, $cacheIdentifier = null)
    {
        $this->___init();
        parent::__construct($frontendPool, $cacheIdentifier);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontend');
        return $pluginInfo ? $this->___callPlugins('getFrontend', func_get_args(), $pluginInfo) : parent::getFrontend();
    }

    /**
     * {@inheritdoc}
     */
    public function load($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $identifier, $tags = [], $lifeTime = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($data, $identifier, $tags, $lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'remove');
        return $pluginInfo ? $this->___callPlugins('remove', func_get_args(), $pluginInfo) : parent::remove($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function clean($tags = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        return $pluginInfo ? $this->___callPlugins('clean', func_get_args(), $pluginInfo) : parent::clean($tags);
    }
}
