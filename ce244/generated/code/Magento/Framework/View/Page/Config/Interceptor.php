<?php
namespace Magento\Framework\View\Page\Config;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config
 */
class Interceptor extends \Magento\Framework\View\Page\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\View\Asset\GroupedCollection $pageAssets, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Page\FaviconInterface $favicon, \Magento\Framework\View\Page\Title $title, \Magento\Framework\Locale\ResolverInterface $localeResolver, $isIncludesAvailable = true, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($assetRepo, $pageAssets, $scopeConfig, $favicon, $title, $localeResolver, $isIncludesAvailable, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function setBuilder(\Magento\Framework\View\Layout\BuilderInterface $builder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBuilder');
        return $pluginInfo ? $this->___callPlugins('setBuilder', func_get_args(), $pluginInfo) : parent::setBuilder($builder);
    }

    /**
     * {@inheritdoc}
     */
    public function publicBuild()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'publicBuild');
        return $pluginInfo ? $this->___callPlugins('publicBuild', func_get_args(), $pluginInfo) : parent::publicBuild();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function setMetadata($name, $content)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMetadata');
        return $pluginInfo ? $this->___callPlugins('setMetadata', func_get_args(), $pluginInfo) : parent::setMetadata($name, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadata');
        return $pluginInfo ? $this->___callPlugins('getMetadata', func_get_args(), $pluginInfo) : parent::getMetadata();
    }

    /**
     * {@inheritdoc}
     */
    public function setContentType($contentType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContentType');
        return $pluginInfo ? $this->___callPlugins('setContentType', func_get_args(), $pluginInfo) : parent::setContentType($contentType);
    }

    /**
     * {@inheritdoc}
     */
    public function getContentType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContentType');
        return $pluginInfo ? $this->___callPlugins('getContentType', func_get_args(), $pluginInfo) : parent::getContentType();
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaType($mediaType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaType');
        return $pluginInfo ? $this->___callPlugins('setMediaType', func_get_args(), $pluginInfo) : parent::setMediaType($mediaType);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaType');
        return $pluginInfo ? $this->___callPlugins('getMediaType', func_get_args(), $pluginInfo) : parent::getMediaType();
    }

    /**
     * {@inheritdoc}
     */
    public function setCharset($charset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCharset');
        return $pluginInfo ? $this->___callPlugins('setCharset', func_get_args(), $pluginInfo) : parent::setCharset($charset);
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCharset');
        return $pluginInfo ? $this->___callPlugins('getCharset', func_get_args(), $pluginInfo) : parent::getCharset();
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        return $pluginInfo ? $this->___callPlugins('setDescription', func_get_args(), $pluginInfo) : parent::setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDescription');
        return $pluginInfo ? $this->___callPlugins('getDescription', func_get_args(), $pluginInfo) : parent::getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function setMetaTitle($title)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMetaTitle');
        return $pluginInfo ? $this->___callPlugins('setMetaTitle', func_get_args(), $pluginInfo) : parent::setMetaTitle($title);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetaTitle');
        return $pluginInfo ? $this->___callPlugins('getMetaTitle', func_get_args(), $pluginInfo) : parent::getMetaTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function setKeywords($keywords)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setKeywords');
        return $pluginInfo ? $this->___callPlugins('setKeywords', func_get_args(), $pluginInfo) : parent::setKeywords($keywords);
    }

    /**
     * {@inheritdoc}
     */
    public function getKeywords()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getKeywords');
        return $pluginInfo ? $this->___callPlugins('getKeywords', func_get_args(), $pluginInfo) : parent::getKeywords();
    }

    /**
     * {@inheritdoc}
     */
    public function setRobots($robots)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRobots');
        return $pluginInfo ? $this->___callPlugins('setRobots', func_get_args(), $pluginInfo) : parent::setRobots($robots);
    }

    /**
     * {@inheritdoc}
     */
    public function getRobots()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRobots');
        return $pluginInfo ? $this->___callPlugins('getRobots', func_get_args(), $pluginInfo) : parent::getRobots();
    }

    /**
     * {@inheritdoc}
     */
    public function getAssetCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssetCollection');
        return $pluginInfo ? $this->___callPlugins('getAssetCollection', func_get_args(), $pluginInfo) : parent::getAssetCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function addPageAsset($file, array $properties = [], $name = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageAsset');
        return $pluginInfo ? $this->___callPlugins('addPageAsset', func_get_args(), $pluginInfo) : parent::addPageAsset($file, $properties, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function addRemotePageAsset($url, $contentType, array $properties = [], $name = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRemotePageAsset');
        return $pluginInfo ? $this->___callPlugins('addRemotePageAsset', func_get_args(), $pluginInfo) : parent::addRemotePageAsset($url, $contentType, $properties, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function addRss($title, $href)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRss');
        return $pluginInfo ? $this->___callPlugins('addRss', func_get_args(), $pluginInfo) : parent::addRss($title, $href);
    }

    /**
     * {@inheritdoc}
     */
    public function addBodyClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBodyClass');
        return $pluginInfo ? $this->___callPlugins('addBodyClass', func_get_args(), $pluginInfo) : parent::addBodyClass($className);
    }

    /**
     * {@inheritdoc}
     */
    public function setElementAttribute($elementType, $attribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElementAttribute');
        return $pluginInfo ? $this->___callPlugins('setElementAttribute', func_get_args(), $pluginInfo) : parent::setElementAttribute($elementType, $attribute, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAttribute($elementType, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAttribute');
        return $pluginInfo ? $this->___callPlugins('getElementAttribute', func_get_args(), $pluginInfo) : parent::getElementAttribute($elementType, $attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAttributes($elementType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAttributes');
        return $pluginInfo ? $this->___callPlugins('getElementAttributes', func_get_args(), $pluginInfo) : parent::getElementAttributes($elementType);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageLayout($handle)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageLayout');
        return $pluginInfo ? $this->___callPlugins('setPageLayout', func_get_args(), $pluginInfo) : parent::setPageLayout($handle);
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
    public function getFaviconFile()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFaviconFile');
        return $pluginInfo ? $this->___callPlugins('getFaviconFile', func_get_args(), $pluginInfo) : parent::getFaviconFile();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFavicon()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultFavicon');
        return $pluginInfo ? $this->___callPlugins('getDefaultFavicon', func_get_args(), $pluginInfo) : parent::getDefaultFavicon();
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncludes');
        return $pluginInfo ? $this->___callPlugins('getIncludes', func_get_args(), $pluginInfo) : parent::getIncludes();
    }
}
