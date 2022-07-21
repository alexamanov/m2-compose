<?php
namespace Magento\Widget\Model\Template\Filter;

/**
 * Interceptor class for @see \Magento\Widget\Model\Template\Filter
 */
class Interceptor extends \Magento\Widget\Model\Template\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Escaper $escaper, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Variable\Model\VariableFactory $coreVariableFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\LayoutInterface $layout, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\App\State $appState, \Magento\Framework\UrlInterface $urlModel, \Magento\Variable\Model\Source\Variables $configVariables, \Magento\Framework\Filter\VariableResolverInterface $variableResolver, \Magento\Email\Model\Template\Css\Processor $cssProcessor, \Magento\Framework\Filesystem $pubDirectory, \Magento\Framework\Css\PreProcessor\Adapter\CssInliner $cssInliner, \Magento\Widget\Model\ResourceModel\Widget $widgetResource, \Magento\Widget\Model\Widget $widget, $variables = [], array $directiveProcessors = [])
    {
        $this->___init();
        parent::__construct($string, $logger, $escaper, $assetRepo, $scopeConfig, $coreVariableFactory, $storeManager, $layout, $layoutFactory, $appState, $urlModel, $configVariables, $variableResolver, $cssProcessor, $pubDirectory, $cssInliner, $widgetResource, $widget, $variables, $directiveProcessors);
    }

    /**
     * {@inheritdoc}
     */
    public function generateWidget($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'generateWidget');
        return $pluginInfo ? $this->___callPlugins('generateWidget', func_get_args(), $pluginInfo) : parent::generateWidget($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function widgetDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'widgetDirective');
        return $pluginInfo ? $this->___callPlugins('widgetDirective', func_get_args(), $pluginInfo) : parent::widgetDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function mediaDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mediaDirective');
        return $pluginInfo ? $this->___callPlugins('mediaDirective', func_get_args(), $pluginInfo) : parent::mediaDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseAbsoluteLinks($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseAbsoluteLinks');
        return $pluginInfo ? $this->___callPlugins('setUseAbsoluteLinks', func_get_args(), $pluginInfo) : parent::setUseAbsoluteLinks($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseSessionInUrl($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseSessionInUrl');
        return $pluginInfo ? $this->___callPlugins('setUseSessionInUrl', func_get_args(), $pluginInfo) : parent::setUseSessionInUrl($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setPlainTemplateMode($plainTemplateMode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPlainTemplateMode');
        return $pluginInfo ? $this->___callPlugins('setPlainTemplateMode', func_get_args(), $pluginInfo) : parent::setPlainTemplateMode($plainTemplateMode);
    }

    /**
     * {@inheritdoc}
     */
    public function isPlainTemplateMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPlainTemplateMode');
        return $pluginInfo ? $this->___callPlugins('isPlainTemplateMode', func_get_args(), $pluginInfo) : parent::isPlainTemplateMode();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsChildTemplate($isChildTemplate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsChildTemplate');
        return $pluginInfo ? $this->___callPlugins('setIsChildTemplate', func_get_args(), $pluginInfo) : parent::setIsChildTemplate($isChildTemplate);
    }

    /**
     * {@inheritdoc}
     */
    public function isChildTemplate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isChildTemplate');
        return $pluginInfo ? $this->___callPlugins('isChildTemplate', func_get_args(), $pluginInfo) : parent::isChildTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function setDesignParams(array $designParams)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDesignParams');
        return $pluginInfo ? $this->___callPlugins('setDesignParams', func_get_args(), $pluginInfo) : parent::setDesignParams($designParams);
    }

    /**
     * {@inheritdoc}
     */
    public function getDesignParams()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDesignParams');
        return $pluginInfo ? $this->___callPlugins('getDesignParams', func_get_args(), $pluginInfo) : parent::getDesignParams();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        return $pluginInfo ? $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo) : parent::getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function blockDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'blockDirective');
        return $pluginInfo ? $this->___callPlugins('blockDirective', func_get_args(), $pluginInfo) : parent::blockDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function layoutDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'layoutDirective');
        return $pluginInfo ? $this->___callPlugins('layoutDirective', func_get_args(), $pluginInfo) : parent::layoutDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function emulateAreaCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'emulateAreaCallback');
        return $pluginInfo ? $this->___callPlugins('emulateAreaCallback', func_get_args(), $pluginInfo) : parent::emulateAreaCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function viewDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'viewDirective');
        return $pluginInfo ? $this->___callPlugins('viewDirective', func_get_args(), $pluginInfo) : parent::viewDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function storeDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'storeDirective');
        return $pluginInfo ? $this->___callPlugins('storeDirective', func_get_args(), $pluginInfo) : parent::storeDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function setUrlModel(\Magento\Framework\UrlInterface $urlModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUrlModel');
        return $pluginInfo ? $this->___callPlugins('setUrlModel', func_get_args(), $pluginInfo) : parent::setUrlModel($urlModel);
    }

    /**
     * {@inheritdoc}
     */
    public function transDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'transDirective');
        return $pluginInfo ? $this->___callPlugins('transDirective', func_get_args(), $pluginInfo) : parent::transDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function varDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'varDirective');
        return $pluginInfo ? $this->___callPlugins('varDirective', func_get_args(), $pluginInfo) : parent::varDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function modifierEscape($value, $type = 'html')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'modifierEscape');
        return $pluginInfo ? $this->___callPlugins('modifierEscape', func_get_args(), $pluginInfo) : parent::modifierEscape($value, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function protocolDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'protocolDirective');
        return $pluginInfo ? $this->___callPlugins('protocolDirective', func_get_args(), $pluginInfo) : parent::protocolDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function configDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'configDirective');
        return $pluginInfo ? $this->___callPlugins('configDirective', func_get_args(), $pluginInfo) : parent::configDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function customvarDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'customvarDirective');
        return $pluginInfo ? $this->___callPlugins('customvarDirective', func_get_args(), $pluginInfo) : parent::customvarDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function cssDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cssDirective');
        return $pluginInfo ? $this->___callPlugins('cssDirective', func_get_args(), $pluginInfo) : parent::cssDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function inlinecssDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'inlinecssDirective');
        return $pluginInfo ? $this->___callPlugins('inlinecssDirective', func_get_args(), $pluginInfo) : parent::inlinecssDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function getCssFilesContent(array $files)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCssFilesContent');
        return $pluginInfo ? $this->___callPlugins('getCssFilesContent', func_get_args(), $pluginInfo) : parent::getCssFilesContent($files);
    }

    /**
     * {@inheritdoc}
     */
    public function applyInlineCss($html)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyInlineCss');
        return $pluginInfo ? $this->___callPlugins('applyInlineCss', func_get_args(), $pluginInfo) : parent::applyInlineCss($html);
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setVariables(array $variables)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVariables');
        return $pluginInfo ? $this->___callPlugins('setVariables', func_get_args(), $pluginInfo) : parent::setVariables($variables);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateProcessor(callable $callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplateProcessor');
        return $pluginInfo ? $this->___callPlugins('setTemplateProcessor', func_get_args(), $pluginInfo) : parent::setTemplateProcessor($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateProcessor()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateProcessor');
        return $pluginInfo ? $this->___callPlugins('getTemplateProcessor', func_get_args(), $pluginInfo) : parent::getTemplateProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function addAfterFilterCallback(callable $afterFilterCallback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAfterFilterCallback');
        return $pluginInfo ? $this->___callPlugins('addAfterFilterCallback', func_get_args(), $pluginInfo) : parent::addAfterFilterCallback($afterFilterCallback);
    }

    /**
     * {@inheritdoc}
     */
    public function forDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'forDirective');
        return $pluginInfo ? $this->___callPlugins('forDirective', func_get_args(), $pluginInfo) : parent::forDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function templateDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'templateDirective');
        return $pluginInfo ? $this->___callPlugins('templateDirective', func_get_args(), $pluginInfo) : parent::templateDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function dependDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dependDirective');
        return $pluginInfo ? $this->___callPlugins('dependDirective', func_get_args(), $pluginInfo) : parent::dependDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function ifDirective($construction)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'ifDirective');
        return $pluginInfo ? $this->___callPlugins('ifDirective', func_get_args(), $pluginInfo) : parent::ifDirective($construction);
    }

    /**
     * {@inheritdoc}
     */
    public function setStrictMode(bool $strictMode) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStrictMode');
        return $pluginInfo ? $this->___callPlugins('setStrictMode', func_get_args(), $pluginInfo) : parent::setStrictMode($strictMode);
    }

    /**
     * {@inheritdoc}
     */
    public function isStrictMode() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStrictMode');
        return $pluginInfo ? $this->___callPlugins('isStrictMode', func_get_args(), $pluginInfo) : parent::isStrictMode();
    }
}
