<?php
namespace Magento\Config\Model\Config\Structure\Element\Field;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure\Element\Field
 */
class Interceptor extends \Magento\Config\Model\Config\Structure\Element\Field implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Config\Model\Config\BackendFactory $backendFactory, \Magento\Config\Model\Config\SourceFactory $sourceFactory, \Magento\Config\Model\Config\CommentFactory $commentFactory, \Magento\Framework\View\Element\BlockFactory $blockFactory, \Magento\Config\Model\Config\Structure\Element\Dependency\Mapper $dependencyMapper)
    {
        $this->___init();
        parent::__construct($storeManager, $moduleManager, $backendFactory, $sourceFactory, $commentFactory, $blockFactory, $dependencyMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel($labelPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabel');
        return $pluginInfo ? $this->___callPlugins('getLabel', func_get_args(), $pluginInfo) : parent::getLabel($labelPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getHint()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHint');
        return $pluginInfo ? $this->___callPlugins('getHint', func_get_args(), $pluginInfo) : parent::getHint();
    }

    /**
     * {@inheritdoc}
     */
    public function getComment($currentValue = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComment');
        return $pluginInfo ? $this->___callPlugins('getComment', func_get_args(), $pluginInfo) : parent::getComment($currentValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getTooltip()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTooltip');
        return $pluginInfo ? $this->___callPlugins('getTooltip', func_get_args(), $pluginInfo) : parent::getTooltip();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        return $pluginInfo ? $this->___callPlugins('getType', func_get_args(), $pluginInfo) : parent::getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredGroups($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequiredGroups');
        return $pluginInfo ? $this->___callPlugins('getRequiredGroups', func_get_args(), $pluginInfo) : parent::getRequiredGroups($fieldPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredFields($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequiredFields');
        return $pluginInfo ? $this->___callPlugins('getRequiredFields', func_get_args(), $pluginInfo) : parent::getRequiredFields($fieldPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendClass');
        return $pluginInfo ? $this->___callPlugins('getFrontendClass', func_get_args(), $pluginInfo) : parent::getFrontendClass();
    }

    /**
     * {@inheritdoc}
     */
    public function hasBackendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasBackendModel');
        return $pluginInfo ? $this->___callPlugins('hasBackendModel', func_get_args(), $pluginInfo) : parent::hasBackendModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendModel');
        return $pluginInfo ? $this->___callPlugins('getBackendModel', func_get_args(), $pluginInfo) : parent::getBackendModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getSectionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSectionId');
        return $pluginInfo ? $this->___callPlugins('getSectionId', func_get_args(), $pluginInfo) : parent::getSectionId();
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupPath');
        return $pluginInfo ? $this->___callPlugins('getGroupPath', func_get_args(), $pluginInfo) : parent::getGroupPath();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigPath');
        return $pluginInfo ? $this->___callPlugins('getConfigPath', func_get_args(), $pluginInfo) : parent::getConfigPath();
    }

    /**
     * {@inheritdoc}
     */
    public function showInDefault()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInDefault');
        return $pluginInfo ? $this->___callPlugins('showInDefault', func_get_args(), $pluginInfo) : parent::showInDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function showInWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInWebsite');
        return $pluginInfo ? $this->___callPlugins('showInWebsite', func_get_args(), $pluginInfo) : parent::showInWebsite();
    }

    /**
     * {@inheritdoc}
     */
    public function showInStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'showInStore');
        return $pluginInfo ? $this->___callPlugins('showInStore', func_get_args(), $pluginInfo) : parent::showInStore();
    }

    /**
     * {@inheritdoc}
     */
    public function canRestore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRestore');
        return $pluginInfo ? $this->___callPlugins('canRestore', func_get_args(), $pluginInfo) : parent::canRestore();
    }

    /**
     * {@inheritdoc}
     */
    public function populateInput($formField)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'populateInput');
        return $pluginInfo ? $this->___callPlugins('populateInput', func_get_args(), $pluginInfo) : parent::populateInput($formField);
    }

    /**
     * {@inheritdoc}
     */
    public function hasValidation()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasValidation');
        return $pluginInfo ? $this->___callPlugins('hasValidation', func_get_args(), $pluginInfo) : parent::hasValidation();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidation()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidation');
        return $pluginInfo ? $this->___callPlugins('getValidation', func_get_args(), $pluginInfo) : parent::getValidation();
    }

    /**
     * {@inheritdoc}
     */
    public function canBeEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canBeEmpty');
        return $pluginInfo ? $this->___callPlugins('canBeEmpty', func_get_args(), $pluginInfo) : parent::canBeEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function hasSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasSourceModel');
        return $pluginInfo ? $this->___callPlugins('hasSourceModel', func_get_args(), $pluginInfo) : parent::hasSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasOptions');
        return $pluginInfo ? $this->___callPlugins('hasOptions', func_get_args(), $pluginInfo) : parent::hasOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getDependencies($fieldPrefix, $storeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDependencies');
        return $pluginInfo ? $this->___callPlugins('getDependencies', func_get_args(), $pluginInfo) : parent::getDependencies($fieldPrefix, $storeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isAdvanced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAdvanced');
        return $pluginInfo ? $this->___callPlugins('isAdvanced', func_get_args(), $pluginInfo) : parent::isAdvanced();
    }

    /**
     * {@inheritdoc}
     */
    public function setData(array $data, $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($data, $scope);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendModel');
        return $pluginInfo ? $this->___callPlugins('getFrontendModel', func_get_args(), $pluginInfo) : parent::getFrontendModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($key);
    }

    /**
     * {@inheritdoc}
     */
    public function isVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisible');
        return $pluginInfo ? $this->___callPlugins('isVisible', func_get_args(), $pluginInfo) : parent::isVisible();
    }

    /**
     * {@inheritdoc}
     */
    public function getClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getClass');
        return $pluginInfo ? $this->___callPlugins('getClass', func_get_args(), $pluginInfo) : parent::getClass();
    }

    /**
     * {@inheritdoc}
     */
    public function getPath($fieldPrefix = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        return $pluginInfo ? $this->___callPlugins('getPath', func_get_args(), $pluginInfo) : parent::getPath($fieldPrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementVisibility');
        return $pluginInfo ? $this->___callPlugins('getElementVisibility', func_get_args(), $pluginInfo) : parent::getElementVisibility();
    }
}
