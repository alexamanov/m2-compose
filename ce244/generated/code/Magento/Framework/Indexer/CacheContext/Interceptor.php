<?php
namespace Magento\Framework\Indexer\CacheContext;

/**
 * Interceptor class for @see \Magento\Framework\Indexer\CacheContext
 */
class Interceptor extends \Magento\Framework\Indexer\CacheContext implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function registerEntities($cacheTag, $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerEntities');
        return $pluginInfo ? $this->___callPlugins('registerEntities', func_get_args(), $pluginInfo) : parent::registerEntities($cacheTag, $ids);
    }

    /**
     * {@inheritdoc}
     */
    public function registerTags($cacheTags)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerTags');
        return $pluginInfo ? $this->___callPlugins('registerTags', func_get_args(), $pluginInfo) : parent::registerTags($cacheTags);
    }

    /**
     * {@inheritdoc}
     */
    public function getRegisteredEntity($cacheTag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegisteredEntity');
        return $pluginInfo ? $this->___callPlugins('getRegisteredEntity', func_get_args(), $pluginInfo) : parent::getRegisteredEntity($cacheTag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }

    /**
     * {@inheritdoc}
     */
    public function flush() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'flush');
        $pluginInfo ? $this->___callPlugins('flush', func_get_args(), $pluginInfo) : parent::flush();
    }
}
