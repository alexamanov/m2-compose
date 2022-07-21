<?php
namespace Magento\Framework\View\Model\Layout\Merge;

/**
 * Interceptor class for @see \Magento\Framework\View\Model\Layout\Merge
 */
class Interceptor extends \Magento\Framework\View\Model\Layout\Merge implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\DesignInterface $design, \Magento\Framework\Url\ScopeResolverInterface $scopeResolver, \Magento\Framework\View\File\CollectorInterface $fileSource, \Magento\Framework\View\File\CollectorInterface $pageLayoutFileSource, \Magento\Framework\App\State $appState, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\Model\Layout\Update\Validator $validator, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem\File\ReadFactory $readFactory, ?\Magento\Framework\View\Design\ThemeInterface $theme = null, $cacheSuffix = '', ?\Magento\Framework\View\Layout\LayoutCacheKeyInterface $layoutCacheKey = null, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, ?int $cacheLifetime = null)
    {
        $this->___init();
        parent::__construct($design, $scopeResolver, $fileSource, $pageLayoutFileSource, $appState, $cache, $validator, $logger, $readFactory, $theme, $cacheSuffix, $layoutCacheKey, $serializer, $cacheLifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function addUpdate($update)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUpdate');
        return $pluginInfo ? $this->___callPlugins('addUpdate', func_get_args(), $pluginInfo) : parent::addUpdate($update);
    }

    /**
     * {@inheritdoc}
     */
    public function asArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asArray');
        return $pluginInfo ? $this->___callPlugins('asArray', func_get_args(), $pluginInfo) : parent::asArray();
    }

    /**
     * {@inheritdoc}
     */
    public function asString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asString');
        return $pluginInfo ? $this->___callPlugins('asString', func_get_args(), $pluginInfo) : parent::asString();
    }

    /**
     * {@inheritdoc}
     */
    public function addHandle($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addHandle');
        return $pluginInfo ? $this->___callPlugins('addHandle', func_get_args(), $pluginInfo) : parent::addHandle($handleName);
    }

    /**
     * {@inheritdoc}
     */
    public function removeHandle($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeHandle');
        return $pluginInfo ? $this->___callPlugins('removeHandle', func_get_args(), $pluginInfo) : parent::removeHandle($handleName);
    }

    /**
     * {@inheritdoc}
     */
    public function getHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHandles');
        return $pluginInfo ? $this->___callPlugins('getHandles', func_get_args(), $pluginInfo) : parent::getHandles();
    }

    /**
     * {@inheritdoc}
     */
    public function addPageHandles(array $handlesToTry)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageHandles');
        return $pluginInfo ? $this->___callPlugins('addPageHandles', func_get_args(), $pluginInfo) : parent::addPageHandles($handlesToTry);
    }

    /**
     * {@inheritdoc}
     */
    public function pageHandleExists($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pageHandleExists');
        return $pluginInfo ? $this->___callPlugins('pageHandleExists', func_get_args(), $pluginInfo) : parent::pageHandleExists($handleName);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageLayout');
        return $pluginInfo ? $this->___callPlugins('getPageLayout', func_get_args(), $pluginInfo) : parent::getPageLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function isLayoutDefined()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLayoutDefined');
        return $pluginInfo ? $this->___callPlugins('isLayoutDefined', func_get_args(), $pluginInfo) : parent::isLayoutDefined();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHandles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHandles');
        return $pluginInfo ? $this->___callPlugins('getPageHandles', func_get_args(), $pluginInfo) : parent::getPageHandles();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableHandles() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableHandles');
        return $pluginInfo ? $this->___callPlugins('getAvailableHandles', func_get_args(), $pluginInfo) : parent::getAvailableHandles();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllDesignAbstractions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllDesignAbstractions');
        return $pluginInfo ? $this->___callPlugins('getAllDesignAbstractions', func_get_args(), $pluginInfo) : parent::getAllDesignAbstractions();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageHandleType($handleName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageHandleType');
        return $pluginInfo ? $this->___callPlugins('getPageHandleType', func_get_args(), $pluginInfo) : parent::getPageHandleType($handleName);
    }

    /**
     * {@inheritdoc}
     */
    public function load($handles = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($handles);
    }

    /**
     * {@inheritdoc}
     */
    public function asSimplexml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asSimplexml');
        return $pluginInfo ? $this->___callPlugins('asSimplexml', func_get_args(), $pluginInfo) : parent::asSimplexml();
    }

    /**
     * {@inheritdoc}
     */
    public function validateUpdate($handle, $updateXml)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateUpdate');
        return $pluginInfo ? $this->___callPlugins('validateUpdate', func_get_args(), $pluginInfo) : parent::validateUpdate($handle, $updateXml);
    }

    /**
     * {@inheritdoc}
     */
    public function getDbUpdateString($handle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDbUpdateString');
        return $pluginInfo ? $this->___callPlugins('getDbUpdateString', func_get_args(), $pluginInfo) : parent::getDbUpdateString($handle);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileLayoutUpdatesXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileLayoutUpdatesXml');
        return $pluginInfo ? $this->___callPlugins('getFileLayoutUpdatesXml', func_get_args(), $pluginInfo) : parent::getFileLayoutUpdatesXml();
    }

    /**
     * {@inheritdoc}
     */
    public function getContainers()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContainers');
        return $pluginInfo ? $this->___callPlugins('getContainers', func_get_args(), $pluginInfo) : parent::getContainers();
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerDesignAbstraction(array $abstraction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerDesignAbstraction');
        return $pluginInfo ? $this->___callPlugins('isCustomerDesignAbstraction', func_get_args(), $pluginInfo) : parent::isCustomerDesignAbstraction($abstraction);
    }

    /**
     * {@inheritdoc}
     */
    public function isPageLayoutDesignAbstraction(array $abstraction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPageLayoutDesignAbstraction');
        return $pluginInfo ? $this->___callPlugins('isPageLayoutDesignAbstraction', func_get_args(), $pluginInfo) : parent::isPageLayoutDesignAbstraction($abstraction);
    }

    /**
     * {@inheritdoc}
     */
    public function getTheme()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTheme');
        return $pluginInfo ? $this->___callPlugins('getTheme', func_get_args(), $pluginInfo) : parent::getTheme();
    }

    /**
     * {@inheritdoc}
     */
    public function getScope()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScope');
        return $pluginInfo ? $this->___callPlugins('getScope', func_get_args(), $pluginInfo) : parent::getScope();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheId');
        return $pluginInfo ? $this->___callPlugins('getCacheId', func_get_args(), $pluginInfo) : parent::getCacheId();
    }
}
