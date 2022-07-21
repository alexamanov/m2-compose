<?php
namespace Magento\Backend\Model\View\Result\Page;

/**
 * Interceptor class for @see \Magento\Backend\Model\View\Result\Page
 */
class Interceptor extends \Magento\Backend\Model\View\Result\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\View\Layout\ReaderPool $layoutReaderPool, \Magento\Framework\Translate\InlineInterface $translateInline, \Magento\Framework\View\Layout\BuilderFactory $layoutBuilderFactory, \Magento\Framework\View\Layout\GeneratorPool $generatorPool, \Magento\Framework\View\Page\Config\RendererFactory $pageConfigRendererFactory, \Magento\Framework\View\Page\Layout\Reader $pageLayoutReader, $template, $isIsolated = false, ?\Magento\Framework\View\EntitySpecificHandlesList $entitySpecificHandlesList = null)
    {
        $this->___init();
        parent::__construct($context, $layoutFactory, $layoutReaderPool, $translateInline, $layoutBuilderFactory, $generatorPool, $pageConfigRendererFactory, $pageLayoutReader, $template, $isIsolated, $entitySpecificHandlesList);
    }

    /**
     * {@inheritdoc}
     */
    public function setActiveMenu($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setActiveMenu');
        return $pluginInfo ? $this->___callPlugins('setActiveMenu', func_get_args(), $pluginInfo) : parent::setActiveMenu($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function addBreadcrumb($label, $title, $link = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBreadcrumb');
        return $pluginInfo ? $this->___callPlugins('addBreadcrumb', func_get_args(), $pluginInfo) : parent::addBreadcrumb($label, $title, $link);
    }

    /**
     * {@inheritdoc}
     */
    public function addContent(\Magento\Framework\View\Element\AbstractBlock $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addContent');
        return $pluginInfo ? $this->___callPlugins('addContent', func_get_args(), $pluginInfo) : parent::addContent($block);
    }

    /**
     * {@inheritdoc}
     */
    public function addLeft(\Magento\Framework\View\Element\AbstractBlock $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addLeft');
        return $pluginInfo ? $this->___callPlugins('addLeft', func_get_args(), $pluginInfo) : parent::addLeft($block);
    }

    /**
     * {@inheritdoc}
     */
    public function addJs(\Magento\Framework\View\Element\AbstractBlock $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addJs');
        return $pluginInfo ? $this->___callPlugins('addJs', func_get_args(), $pluginInfo) : parent::addJs($block);
    }

    /**
     * {@inheritdoc}
     */
    public function initLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initLayout');
        return $pluginInfo ? $this->___callPlugins('initLayout', func_get_args(), $pluginInfo) : parent::initLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function addDefaultHandle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addDefaultHandle');
        return $pluginInfo ? $this->___callPlugins('addDefaultHandle', func_get_args(), $pluginInfo) : parent::addDefaultHandle();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        return $pluginInfo ? $this->___callPlugins('getConfig', func_get_args(), $pluginInfo) : parent::getConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function addPageLayoutHandles(array $parameters = [], $defaultHandle = null, $entitySpecific = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPageLayoutHandles');
        return $pluginInfo ? $this->___callPlugins('addPageLayoutHandles', func_get_args(), $pluginInfo) : parent::addPageLayoutHandles($parameters, $defaultHandle, $entitySpecific);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLayout');
        return $pluginInfo ? $this->___callPlugins('getLayout', func_get_args(), $pluginInfo) : parent::getLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultLayoutHandle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultLayoutHandle');
        return $pluginInfo ? $this->___callPlugins('getDefaultLayoutHandle', func_get_args(), $pluginInfo) : parent::getDefaultLayoutHandle();
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
    public function addUpdate($update)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUpdate');
        return $pluginInfo ? $this->___callPlugins('addUpdate', func_get_args(), $pluginInfo) : parent::addUpdate($update);
    }

    /**
     * {@inheritdoc}
     */
    public function renderResult(\Magento\Framework\App\ResponseInterface $httpResponse)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderResult');
        return $pluginInfo ? $this->___callPlugins('renderResult', func_get_args(), $pluginInfo) : parent::renderResult($httpResponse);
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($httpCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpResponseCode');
        return $pluginInfo ? $this->___callPlugins('setHttpResponseCode', func_get_args(), $pluginInfo) : parent::setHttpResponseCode($httpCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setHeader($name, $value, $replace = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeader');
        return $pluginInfo ? $this->___callPlugins('setHeader', func_get_args(), $pluginInfo) : parent::setHeader($name, $value, $replace);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusHeader($httpCode, $version = null, $phrase = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusHeader');
        return $pluginInfo ? $this->___callPlugins('setStatusHeader', func_get_args(), $pluginInfo) : parent::setStatusHeader($httpCode, $version, $phrase);
    }
}
