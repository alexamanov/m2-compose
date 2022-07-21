<?php
namespace Magento\Framework\View\Layout;

/**
 * Interceptor class for @see \Magento\Framework\View\Layout
 */
class Interceptor extends \Magento\Framework\View\Layout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Layout\ProcessorFactory $processorFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\View\Layout\Data\Structure $structure, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\View\Design\Theme\ResolverInterface $themeResolver, \Magento\Framework\View\Layout\ReaderPool $readerPool, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\Cache\FrontendInterface $cache, \Magento\Framework\View\Layout\Reader\ContextFactory $readerContextFactory, \Magento\Framework\View\Layout\Generator\ContextFactory $generatorContextFactory, \Magento\Framework\App\State $appState, \Psr\Log\LoggerInterface $logger, $cacheable = true, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null, ?int $cacheLifetime = null)
    {
        $this->___init();
        parent::__construct($processorFactory, $eventManager, $structure, $messageManager, $themeResolver, $readerPool, $generatorPool, $cache, $readerContextFactory, $generatorContextFactory, $appState, $logger, $cacheable, $serializer, $cacheLifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function setGeneratorPool(\Magento\Framework\View\Layout\GeneratorPool $generatorPool)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGeneratorPool');
        return $pluginInfo ? $this->___callPlugins('setGeneratorPool', func_get_args(), $pluginInfo) : parent::setGeneratorPool($generatorPool);
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
    public function getUpdate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdate');
        return $pluginInfo ? $this->___callPlugins('getUpdate', func_get_args(), $pluginInfo) : parent::getUpdate();
    }

    /**
     * {@inheritdoc}
     */
    public function generateXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateXml');
        return $pluginInfo ? $this->___callPlugins('generateXml', func_get_args(), $pluginInfo) : parent::generateXml();
    }

    /**
     * {@inheritdoc}
     */
    public function generateElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateElements');
        return $pluginInfo ? $this->___callPlugins('generateElements', func_get_args(), $pluginInfo) : parent::generateElements();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlock');
        return $pluginInfo ? $this->___callPlugins('getChildBlock', func_get_args(), $pluginInfo) : parent::getChildBlock($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($parentName, $elementName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChild');
        return $pluginInfo ? $this->___callPlugins('setChild', func_get_args(), $pluginInfo) : parent::setChild($parentName, $elementName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function reorderChild($parentName, $childName, $offsetOrSibling, $after = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reorderChild');
        return $pluginInfo ? $this->___callPlugins('reorderChild', func_get_args(), $pluginInfo) : parent::reorderChild($parentName, $childName, $offsetOrSibling, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetChild');
        return $pluginInfo ? $this->___callPlugins('unsetChild', func_get_args(), $pluginInfo) : parent::unsetChild($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames($parentName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildNames');
        return $pluginInfo ? $this->___callPlugins('getChildNames', func_get_args(), $pluginInfo) : parent::getChildNames($parentName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlocks($parentName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildBlocks');
        return $pluginInfo ? $this->___callPlugins('getChildBlocks', func_get_args(), $pluginInfo) : parent::getChildBlocks($parentName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildName($parentName, $alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildName');
        return $pluginInfo ? $this->___callPlugins('getChildName', func_get_args(), $pluginInfo) : parent::getChildName($parentName, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function renderElement($name, $useCache = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderElement');
        return $pluginInfo ? $this->___callPlugins('renderElement', func_get_args(), $pluginInfo) : parent::renderElement($name, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function renderNonCachedElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderNonCachedElement');
        return $pluginInfo ? $this->___callPlugins('renderNonCachedElement', func_get_args(), $pluginInfo) : parent::renderNonCachedElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function addToParentGroup($blockName, $parentGroupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addToParentGroup');
        return $pluginInfo ? $this->___callPlugins('addToParentGroup', func_get_args(), $pluginInfo) : parent::addToParentGroup($blockName, $parentGroupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($blockName, $groupName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupChildNames');
        return $pluginInfo ? $this->___callPlugins('getGroupChildNames', func_get_args(), $pluginInfo) : parent::getGroupChildNames($blockName, $groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function hasElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasElement');
        return $pluginInfo ? $this->___callPlugins('hasElement', func_get_args(), $pluginInfo) : parent::hasElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementProperty($name, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementProperty');
        return $pluginInfo ? $this->___callPlugins('getElementProperty', func_get_args(), $pluginInfo) : parent::getElementProperty($name, $attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function isBlock($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isBlock');
        return $pluginInfo ? $this->___callPlugins('isBlock', func_get_args(), $pluginInfo) : parent::isBlock($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isUiComponent($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isUiComponent');
        return $pluginInfo ? $this->___callPlugins('isUiComponent', func_get_args(), $pluginInfo) : parent::isUiComponent($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isContainer($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isContainer');
        return $pluginInfo ? $this->___callPlugins('isContainer', func_get_args(), $pluginInfo) : parent::isContainer($name);
    }

    /**
     * {@inheritdoc}
     */
    public function isManipulationAllowed($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isManipulationAllowed');
        return $pluginInfo ? $this->___callPlugins('isManipulationAllowed', func_get_args(), $pluginInfo) : parent::isManipulationAllowed($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setBlock($name, $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBlock');
        return $pluginInfo ? $this->___callPlugins('setBlock', func_get_args(), $pluginInfo) : parent::setBlock($name, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetElement');
        return $pluginInfo ? $this->___callPlugins('unsetElement', func_get_args(), $pluginInfo) : parent::unsetElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function createBlock($type, $name = '', array $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createBlock');
        return $pluginInfo ? $this->___callPlugins('createBlock', func_get_args(), $pluginInfo) : parent::createBlock($type, $name, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function addBlock($block, $name = '', $parent = '', $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBlock');
        return $pluginInfo ? $this->___callPlugins('addBlock', func_get_args(), $pluginInfo) : parent::addBlock($block, $name, $parent, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function addContainer($name, $label, array $options = [], $parent = '', $alias = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addContainer');
        return $pluginInfo ? $this->___callPlugins('addContainer', func_get_args(), $pluginInfo) : parent::addContainer($name, $label, $options, $parent, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function renameElement($oldName, $newName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameElement');
        return $pluginInfo ? $this->___callPlugins('renameElement', func_get_args(), $pluginInfo) : parent::renameElement($oldName, $newName);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllBlocks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllBlocks');
        return $pluginInfo ? $this->___callPlugins('getAllBlocks', func_get_args(), $pluginInfo) : parent::getAllBlocks();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlock($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlock');
        return $pluginInfo ? $this->___callPlugins('getBlock', func_get_args(), $pluginInfo) : parent::getBlock($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getUiComponent($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUiComponent');
        return $pluginInfo ? $this->___callPlugins('getUiComponent', func_get_args(), $pluginInfo) : parent::getUiComponent($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentName($childName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentName');
        return $pluginInfo ? $this->___callPlugins('getParentName', func_get_args(), $pluginInfo) : parent::getParentName($childName);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementAlias($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementAlias');
        return $pluginInfo ? $this->___callPlugins('getElementAlias', func_get_args(), $pluginInfo) : parent::getElementAlias($name);
    }

    /**
     * {@inheritdoc}
     */
    public function addOutputElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOutputElement');
        return $pluginInfo ? $this->___callPlugins('addOutputElement', func_get_args(), $pluginInfo) : parent::addOutputElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function removeOutputElement($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeOutputElement');
        return $pluginInfo ? $this->___callPlugins('removeOutputElement', func_get_args(), $pluginInfo) : parent::removeOutputElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOutput');
        return $pluginInfo ? $this->___callPlugins('getOutput', func_get_args(), $pluginInfo) : parent::getOutput();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessagesBlock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessagesBlock');
        return $pluginInfo ? $this->___callPlugins('getMessagesBlock', func_get_args(), $pluginInfo) : parent::getMessagesBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockSingleton($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBlockSingleton');
        return $pluginInfo ? $this->___callPlugins('getBlockSingleton', func_get_args(), $pluginInfo) : parent::getBlockSingleton($type);
    }

    /**
     * {@inheritdoc}
     */
    public function addAdjustableRenderer($namespace, $staticType, $dynamicType, $type, $template, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAdjustableRenderer');
        return $pluginInfo ? $this->___callPlugins('addAdjustableRenderer', func_get_args(), $pluginInfo) : parent::addAdjustableRenderer($namespace, $staticType, $dynamicType, $type, $template, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getRendererOptions($namespace, $staticType, $dynamicType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRendererOptions');
        return $pluginInfo ? $this->___callPlugins('getRendererOptions', func_get_args(), $pluginInfo) : parent::getRendererOptions($namespace, $staticType, $dynamicType);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRenderer($namespace, $staticType, $dynamicType, $data = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRenderer');
        return $pluginInfo ? $this->___callPlugins('executeRenderer', func_get_args(), $pluginInfo) : parent::executeRenderer($namespace, $staticType, $dynamicType, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function initMessages($messageGroups = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initMessages');
        return $pluginInfo ? $this->___callPlugins('initMessages', func_get_args(), $pluginInfo) : parent::initMessages($messageGroups);
    }

    /**
     * {@inheritdoc}
     */
    public function isCacheable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCacheable');
        return $pluginInfo ? $this->___callPlugins('isCacheable', func_get_args(), $pluginInfo) : parent::isCacheable();
    }

    /**
     * {@inheritdoc}
     */
    public function isPrivate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPrivate');
        return $pluginInfo ? $this->___callPlugins('isPrivate', func_get_args(), $pluginInfo) : parent::isPrivate();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsPrivate($isPrivate = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsPrivate');
        return $pluginInfo ? $this->___callPlugins('setIsPrivate', func_get_args(), $pluginInfo) : parent::setIsPrivate($isPrivate);
    }

    /**
     * {@inheritdoc}
     */
    public function getReaderContext()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReaderContext');
        return $pluginInfo ? $this->___callPlugins('getReaderContext', func_get_args(), $pluginInfo) : parent::getReaderContext();
    }

    /**
     * {@inheritdoc}
     */
    public function setXml(\Magento\Framework\Simplexml\Element $node)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setXml');
        return $pluginInfo ? $this->___callPlugins('setXml', func_get_args(), $pluginInfo) : parent::setXml($node);
    }

    /**
     * {@inheritdoc}
     */
    public function getNode($path = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNode');
        return $pluginInfo ? $this->___callPlugins('getNode', func_get_args(), $pluginInfo) : parent::getNode($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getXpath($xpath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXpath');
        return $pluginInfo ? $this->___callPlugins('getXpath', func_get_args(), $pluginInfo) : parent::getXpath($xpath);
    }

    /**
     * {@inheritdoc}
     */
    public function getXmlString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getXmlString');
        return $pluginInfo ? $this->___callPlugins('getXmlString', func_get_args(), $pluginInfo) : parent::getXmlString();
    }

    /**
     * {@inheritdoc}
     */
    public function loadFile($filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadFile');
        return $pluginInfo ? $this->___callPlugins('loadFile', func_get_args(), $pluginInfo) : parent::loadFile($filePath);
    }

    /**
     * {@inheritdoc}
     */
    public function loadString($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadString');
        return $pluginInfo ? $this->___callPlugins('loadString', func_get_args(), $pluginInfo) : parent::loadString($string);
    }

    /**
     * {@inheritdoc}
     */
    public function loadDom(\DOMNode $dom)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadDom');
        return $pluginInfo ? $this->___callPlugins('loadDom', func_get_args(), $pluginInfo) : parent::loadDom($dom);
    }

    /**
     * {@inheritdoc}
     */
    public function setNode($path, $value, $overwrite = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNode');
        return $pluginInfo ? $this->___callPlugins('setNode', func_get_args(), $pluginInfo) : parent::setNode($path, $value, $overwrite);
    }

    /**
     * {@inheritdoc}
     */
    public function applyExtends()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyExtends');
        return $pluginInfo ? $this->___callPlugins('applyExtends', func_get_args(), $pluginInfo) : parent::applyExtends();
    }

    /**
     * {@inheritdoc}
     */
    public function processFileData($text)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileData');
        return $pluginInfo ? $this->___callPlugins('processFileData', func_get_args(), $pluginInfo) : parent::processFileData($text);
    }

    /**
     * {@inheritdoc}
     */
    public function extend(\Magento\Framework\Simplexml\Config $config, $overwrite = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'extend');
        return $pluginInfo ? $this->___callPlugins('extend', func_get_args(), $pluginInfo) : parent::extend($config, $overwrite);
    }
}
