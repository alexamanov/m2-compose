<?php
namespace Magento\Catalog\Model\ResourceModel\Eav\Attribute;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Eav\Attribute
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Eav\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\Entity\TypeFactory $eavTypeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Eav\Api\Data\AttributeOptionInterfaceFactory $optionDataFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Catalog\Model\Product\ReservedAttributeList $reservedAttributeList, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Stdlib\DateTime\DateTimeFormatterInterface $dateTimeFormatter, \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Eav\Processor $indexerEavProcessor, \Magento\Catalog\Helper\Product\Flat\Indexer $productFlatIndexerHelper, \Magento\Catalog\Model\Attribute\LockValidatorInterface $lockValidator, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Eav\Api\Data\AttributeExtensionFactory $eavAttributeFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $eavConfig, $eavTypeFactory, $storeManager, $resourceHelper, $universalFactory, $optionDataFactory, $dataObjectProcessor, $dataObjectHelper, $localeDate, $reservedAttributeList, $localeResolver, $dateTimeFormatter, $productFlatIndexerProcessor, $indexerEavProcessor, $productFlatIndexerHelper, $lockValidator, $resource, $resourceCollection, $data, $eavAttributeFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabledInFlat()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabledInFlat');
        return $pluginInfo ? $this->___callPlugins('isEnabledInFlat', func_get_args(), $pluginInfo) : parent::isEnabledInFlat();
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsGlobal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsGlobal');
        return $pluginInfo ? $this->___callPlugins('getIsGlobal', func_get_args(), $pluginInfo) : parent::getIsGlobal();
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeGlobal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeGlobal');
        return $pluginInfo ? $this->___callPlugins('isScopeGlobal', func_get_args(), $pluginInfo) : parent::isScopeGlobal();
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeWebsite');
        return $pluginInfo ? $this->___callPlugins('isScopeWebsite', func_get_args(), $pluginInfo) : parent::isScopeWebsite();
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeStore');
        return $pluginInfo ? $this->___callPlugins('isScopeStore', func_get_args(), $pluginInfo) : parent::isScopeStore();
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
    public function getApplyTo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getApplyTo');
        return $pluginInfo ? $this->___callPlugins('getApplyTo', func_get_args(), $pluginInfo) : parent::getApplyTo();
    }

    /**
     * {@inheritdoc}
     */
    public function getSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSourceModel');
        return $pluginInfo ? $this->___callPlugins('getSourceModel', func_get_args(), $pluginInfo) : parent::getSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowedForRuleCondition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowedForRuleCondition');
        return $pluginInfo ? $this->___callPlugins('isAllowedForRuleCondition', func_get_args(), $pluginInfo) : parent::isAllowedForRuleCondition();
    }

    /**
     * {@inheritdoc}
     */
    public function _getDefaultSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_getDefaultSourceModel');
        return $pluginInfo ? $this->___callPlugins('_getDefaultSourceModel', func_get_args(), $pluginInfo) : parent::_getDefaultSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function isIndexable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isIndexable');
        return $pluginInfo ? $this->___callPlugins('isIndexable', func_get_args(), $pluginInfo) : parent::isIndexable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexType');
        return $pluginInfo ? $this->___callPlugins('getIndexType', func_get_args(), $pluginInfo) : parent::getIndexType();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsWysiwygEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsWysiwygEnabled');
        return $pluginInfo ? $this->___callPlugins('getIsWysiwygEnabled', func_get_args(), $pluginInfo) : parent::getIsWysiwygEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsHtmlAllowedOnFront()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsHtmlAllowedOnFront');
        return $pluginInfo ? $this->___callPlugins('getIsHtmlAllowedOnFront', func_get_args(), $pluginInfo) : parent::getIsHtmlAllowedOnFront();
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedForSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedForSortBy');
        return $pluginInfo ? $this->___callPlugins('getUsedForSortBy', func_get_args(), $pluginInfo) : parent::getUsedForSortBy();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterable');
        return $pluginInfo ? $this->___callPlugins('getIsFilterable', func_get_args(), $pluginInfo) : parent::getIsFilterable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterableInSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterableInSearch');
        return $pluginInfo ? $this->___callPlugins('getIsFilterableInSearch', func_get_args(), $pluginInfo) : parent::getIsFilterableInSearch();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUsedInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUsedInGrid');
        return $pluginInfo ? $this->___callPlugins('getIsUsedInGrid', func_get_args(), $pluginInfo) : parent::getIsUsedInGrid();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleInGrid');
        return $pluginInfo ? $this->___callPlugins('getIsVisibleInGrid', func_get_args(), $pluginInfo) : parent::getIsVisibleInGrid();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFilterableInGrid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFilterableInGrid');
        return $pluginInfo ? $this->___callPlugins('getIsFilterableInGrid', func_get_args(), $pluginInfo) : parent::getIsFilterableInGrid();
    }

    /**
     * {@inheritdoc}
     */
    public function getPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPosition');
        return $pluginInfo ? $this->___callPlugins('getPosition', func_get_args(), $pluginInfo) : parent::getPosition();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsSearchable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsSearchable');
        return $pluginInfo ? $this->___callPlugins('getIsSearchable', func_get_args(), $pluginInfo) : parent::getIsSearchable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleInAdvancedSearch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleInAdvancedSearch');
        return $pluginInfo ? $this->___callPlugins('getIsVisibleInAdvancedSearch', func_get_args(), $pluginInfo) : parent::getIsVisibleInAdvancedSearch();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsComparable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsComparable');
        return $pluginInfo ? $this->___callPlugins('getIsComparable', func_get_args(), $pluginInfo) : parent::getIsComparable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUsedForPromoRules()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUsedForPromoRules');
        return $pluginInfo ? $this->___callPlugins('getIsUsedForPromoRules', func_get_args(), $pluginInfo) : parent::getIsUsedForPromoRules();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisibleOnFront()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisibleOnFront');
        return $pluginInfo ? $this->___callPlugins('getIsVisibleOnFront', func_get_args(), $pluginInfo) : parent::getIsVisibleOnFront();
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedInProductListing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedInProductListing');
        return $pluginInfo ? $this->___callPlugins('getUsedInProductListing', func_get_args(), $pluginInfo) : parent::getUsedInProductListing();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVisible');
        return $pluginInfo ? $this->___callPlugins('getIsVisible', func_get_args(), $pluginInfo) : parent::getIsVisible();
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
    public function setIsWysiwygEnabled($isWysiwygEnabled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsWysiwygEnabled');
        return $pluginInfo ? $this->___callPlugins('setIsWysiwygEnabled', func_get_args(), $pluginInfo) : parent::setIsWysiwygEnabled($isWysiwygEnabled);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsHtmlAllowedOnFront($isHtmlAllowedOnFront)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsHtmlAllowedOnFront');
        return $pluginInfo ? $this->___callPlugins('setIsHtmlAllowedOnFront', func_get_args(), $pluginInfo) : parent::setIsHtmlAllowedOnFront($isHtmlAllowedOnFront);
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedForSortBy($usedForSortBy)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedForSortBy');
        return $pluginInfo ? $this->___callPlugins('setUsedForSortBy', func_get_args(), $pluginInfo) : parent::setUsedForSortBy($usedForSortBy);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFilterable($isFilterable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFilterable');
        return $pluginInfo ? $this->___callPlugins('setIsFilterable', func_get_args(), $pluginInfo) : parent::setIsFilterable($isFilterable);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFilterableInSearch($isFilterableInSearch)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFilterableInSearch');
        return $pluginInfo ? $this->___callPlugins('setIsFilterableInSearch', func_get_args(), $pluginInfo) : parent::setIsFilterableInSearch($isFilterableInSearch);
    }

    /**
     * {@inheritdoc}
     */
    public function setPosition($position)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPosition');
        return $pluginInfo ? $this->___callPlugins('setPosition', func_get_args(), $pluginInfo) : parent::setPosition($position);
    }

    /**
     * {@inheritdoc}
     */
    public function setApplyTo($applyTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setApplyTo');
        return $pluginInfo ? $this->___callPlugins('setApplyTo', func_get_args(), $pluginInfo) : parent::setApplyTo($applyTo);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsSearchable($isSearchable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsSearchable');
        return $pluginInfo ? $this->___callPlugins('setIsSearchable', func_get_args(), $pluginInfo) : parent::setIsSearchable($isSearchable);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisibleInAdvancedSearch($isVisibleInAdvancedSearch)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisibleInAdvancedSearch');
        return $pluginInfo ? $this->___callPlugins('setIsVisibleInAdvancedSearch', func_get_args(), $pluginInfo) : parent::setIsVisibleInAdvancedSearch($isVisibleInAdvancedSearch);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsComparable($isComparable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsComparable');
        return $pluginInfo ? $this->___callPlugins('setIsComparable', func_get_args(), $pluginInfo) : parent::setIsComparable($isComparable);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUsedForPromoRules($isUsedForPromoRules)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUsedForPromoRules');
        return $pluginInfo ? $this->___callPlugins('setIsUsedForPromoRules', func_get_args(), $pluginInfo) : parent::setIsUsedForPromoRules($isUsedForPromoRules);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisibleOnFront($isVisibleOnFront)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisibleOnFront');
        return $pluginInfo ? $this->___callPlugins('setIsVisibleOnFront', func_get_args(), $pluginInfo) : parent::setIsVisibleOnFront($isVisibleOnFront);
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedInProductListing($usedInProductListing)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedInProductListing');
        return $pluginInfo ? $this->___callPlugins('setUsedInProductListing', func_get_args(), $pluginInfo) : parent::setUsedInProductListing($usedInProductListing);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisible($isVisible)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisible');
        return $pluginInfo ? $this->___callPlugins('setIsVisible', func_get_args(), $pluginInfo) : parent::setIsVisible($isVisible);
    }

    /**
     * {@inheritdoc}
     */
    public function setScope($scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setScope');
        return $pluginInfo ? $this->___callPlugins('setScope', func_get_args(), $pluginInfo) : parent::setScope($scope);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUsedInGrid($isUsedInGrid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUsedInGrid');
        return $pluginInfo ? $this->___callPlugins('setIsUsedInGrid', func_get_args(), $pluginInfo) : parent::setIsUsedInGrid($isUsedInGrid);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsVisibleInGrid($isVisibleInGrid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsVisibleInGrid');
        return $pluginInfo ? $this->___callPlugins('setIsVisibleInGrid', func_get_args(), $pluginInfo) : parent::setIsVisibleInGrid($isVisibleInGrid);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFilterableInGrid($isFilterableInGrid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFilterableInGrid');
        return $pluginInfo ? $this->___callPlugins('setIsFilterableInGrid', func_get_args(), $pluginInfo) : parent::setIsFilterableInGrid($isFilterableInGrid);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteEntity');
        return $pluginInfo ? $this->___callPlugins('deleteEntity', func_get_args(), $pluginInfo) : parent::deleteEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function loadEntityAttributeIdBySet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadEntityAttributeIdBySet');
        return $pluginInfo ? $this->___callPlugins('loadEntityAttributeIdBySet', func_get_args(), $pluginInfo) : parent::loadEntityAttributeIdBySet();
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendTypeByInput($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendTypeByInput');
        return $pluginInfo ? $this->___callPlugins('getBackendTypeByInput', func_get_args(), $pluginInfo) : parent::getBackendTypeByInput($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValueByInput($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValueByInput');
        return $pluginInfo ? $this->___callPlugins('getDefaultValueByInput', func_get_args(), $pluginInfo) : parent::getDefaultValueByInput($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeCodesByFrontendType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeCodesByFrontendType');
        return $pluginInfo ? $this->___callPlugins('getAttributeCodesByFrontendType', func_get_args(), $pluginInfo) : parent::getAttributeCodesByFrontendType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabels()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabels');
        return $pluginInfo ? $this->___callPlugins('getStoreLabels', func_get_args(), $pluginInfo) : parent::getStoreLabels();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabel($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabel');
        return $pluginInfo ? $this->___callPlugins('getStoreLabel', func_get_args(), $pluginInfo) : parent::getStoreLabel($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSortWeight($setId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortWeight');
        return $pluginInfo ? $this->___callPlugins('getSortWeight', func_get_args(), $pluginInfo) : parent::getSortWeight($setId);
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
    public function loadByCode($entityType, $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByCode');
        return $pluginInfo ? $this->___callPlugins('loadByCode', func_get_args(), $pluginInfo) : parent::loadByCode($entityType, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeId($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeId');
        return $pluginInfo ? $this->___callPlugins('setAttributeId', func_get_args(), $pluginInfo) : parent::setAttributeId($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeId');
        return $pluginInfo ? $this->___callPlugins('getAttributeId', func_get_args(), $pluginInfo) : parent::getAttributeId();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeCode($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeCode');
        return $pluginInfo ? $this->___callPlugins('setAttributeCode', func_get_args(), $pluginInfo) : parent::setAttributeCode($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeCode');
        return $pluginInfo ? $this->___callPlugins('getAttributeCode', func_get_args(), $pluginInfo) : parent::getAttributeCode();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeModel($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeModel');
        return $pluginInfo ? $this->___callPlugins('setAttributeModel', func_get_args(), $pluginInfo) : parent::setAttributeModel($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeModel');
        return $pluginInfo ? $this->___callPlugins('getAttributeModel', func_get_args(), $pluginInfo) : parent::getAttributeModel();
    }

    /**
     * {@inheritdoc}
     */
    public function setBackendType($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendType');
        return $pluginInfo ? $this->___callPlugins('setBackendType', func_get_args(), $pluginInfo) : parent::setBackendType($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendType');
        return $pluginInfo ? $this->___callPlugins('getBackendType', func_get_args(), $pluginInfo) : parent::getBackendType();
    }

    /**
     * {@inheritdoc}
     */
    public function setBackendModel($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendModel');
        return $pluginInfo ? $this->___callPlugins('setBackendModel', func_get_args(), $pluginInfo) : parent::setBackendModel($data);
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
    public function setBackendTable($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackendTable');
        return $pluginInfo ? $this->___callPlugins('setBackendTable', func_get_args(), $pluginInfo) : parent::setBackendTable($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultValue');
        return $pluginInfo ? $this->___callPlugins('getDefaultValue', func_get_args(), $pluginInfo) : parent::getDefaultValue();
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultValue($defaultValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultValue');
        return $pluginInfo ? $this->___callPlugins('setDefaultValue', func_get_args(), $pluginInfo) : parent::setDefaultValue($defaultValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSetId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSetId');
        return $pluginInfo ? $this->___callPlugins('getAttributeSetId', func_get_args(), $pluginInfo) : parent::getAttributeSetId();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeSetId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeSetId');
        return $pluginInfo ? $this->___callPlugins('setAttributeSetId', func_get_args(), $pluginInfo) : parent::setAttributeSetId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTypeId');
        return $pluginInfo ? $this->___callPlugins('getEntityTypeId', func_get_args(), $pluginInfo) : parent::getEntityTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityTypeId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityTypeId');
        return $pluginInfo ? $this->___callPlugins('setEntityTypeId', func_get_args(), $pluginInfo) : parent::setEntityTypeId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityType');
        return $pluginInfo ? $this->___callPlugins('setEntityType', func_get_args(), $pluginInfo) : parent::setEntityType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getAlias($entity = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAlias');
        return $pluginInfo ? $this->___callPlugins('getAlias', func_get_args(), $pluginInfo) : parent::getAlias($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityType');
        return $pluginInfo ? $this->___callPlugins('getEntityType', func_get_args(), $pluginInfo) : parent::getEntityType();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntity($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntity');
        return $pluginInfo ? $this->___callPlugins('setEntity', func_get_args(), $pluginInfo) : parent::setEntity($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntity');
        return $pluginInfo ? $this->___callPlugins('getEntity', func_get_args(), $pluginInfo) : parent::getEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityIdField');
        return $pluginInfo ? $this->___callPlugins('getEntityIdField', func_get_args(), $pluginInfo) : parent::getEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getBackend()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackend');
        return $pluginInfo ? $this->___callPlugins('getBackend', func_get_args(), $pluginInfo) : parent::getBackend();
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
    public function getSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSource');
        return $pluginInfo ? $this->___callPlugins('getSource', func_get_args(), $pluginInfo) : parent::getSource();
    }

    /**
     * {@inheritdoc}
     */
    public function usesSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'usesSource');
        return $pluginInfo ? $this->___callPlugins('usesSource', func_get_args(), $pluginInfo) : parent::usesSource();
    }

    /**
     * {@inheritdoc}
     */
    public function isValueEmpty($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValueEmpty');
        return $pluginInfo ? $this->___callPlugins('isValueEmpty', func_get_args(), $pluginInfo) : parent::isValueEmpty($value);
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowedEmptyTextValue($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowedEmptyTextValue');
        return $pluginInfo ? $this->___callPlugins('isAllowedEmptyTextValue', func_get_args(), $pluginInfo) : parent::isAllowedEmptyTextValue($value);
    }

    /**
     * {@inheritdoc}
     */
    public function isInSet($setId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInSet');
        return $pluginInfo ? $this->___callPlugins('isInSet', func_get_args(), $pluginInfo) : parent::isInSet($setId);
    }

    /**
     * {@inheritdoc}
     */
    public function isInGroup($setId, $groupId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInGroup');
        return $pluginInfo ? $this->___callPlugins('isInGroup', func_get_args(), $pluginInfo) : parent::isInGroup($setId, $groupId);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdByCode($entityType, $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdByCode');
        return $pluginInfo ? $this->___callPlugins('getIdByCode', func_get_args(), $pluginInfo) : parent::getIdByCode($entityType, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function isStatic()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isStatic');
        return $pluginInfo ? $this->___callPlugins('isStatic', func_get_args(), $pluginInfo) : parent::isStatic();
    }

    /**
     * {@inheritdoc}
     */
    public function getBackendTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackendTable');
        return $pluginInfo ? $this->___callPlugins('getBackendTable', func_get_args(), $pluginInfo) : parent::getBackendTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatColumns');
        return $pluginInfo ? $this->___callPlugins('getFlatColumns', func_get_args(), $pluginInfo) : parent::getFlatColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function _getFlatColumnsDdlDefinition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_getFlatColumnsDdlDefinition');
        return $pluginInfo ? $this->___callPlugins('_getFlatColumnsDdlDefinition', func_get_args(), $pluginInfo) : parent::_getFlatColumnsDdlDefinition();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatIndexes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatIndexes');
        return $pluginInfo ? $this->___callPlugins('getFlatIndexes', func_get_args(), $pluginInfo) : parent::getFlatIndexes();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatUpdateSelect($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatUpdateSelect');
        return $pluginInfo ? $this->___callPlugins('getFlatUpdateSelect', func_get_args(), $pluginInfo) : parent::getFlatUpdateSelect($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUnique()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUnique');
        return $pluginInfo ? $this->___callPlugins('getIsUnique', func_get_args(), $pluginInfo) : parent::getIsUnique();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUnique($isUnique)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUnique');
        return $pluginInfo ? $this->___callPlugins('setIsUnique', func_get_args(), $pluginInfo) : parent::setIsUnique($isUnique);
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
    public function setFrontendClass($frontendClass)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendClass');
        return $pluginInfo ? $this->___callPlugins('setFrontendClass', func_get_args(), $pluginInfo) : parent::setFrontendClass($frontendClass);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendInput()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendInput');
        return $pluginInfo ? $this->___callPlugins('getFrontendInput', func_get_args(), $pluginInfo) : parent::getFrontendInput();
    }

    /**
     * {@inheritdoc}
     */
    public function setFrontendInput($frontendInput)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendInput');
        return $pluginInfo ? $this->___callPlugins('setFrontendInput', func_get_args(), $pluginInfo) : parent::setFrontendInput($frontendInput);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsRequired()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsRequired');
        return $pluginInfo ? $this->___callPlugins('getIsRequired', func_get_args(), $pluginInfo) : parent::getIsRequired();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsRequired($isRequired)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsRequired');
        return $pluginInfo ? $this->___callPlugins('setIsRequired', func_get_args(), $pluginInfo) : parent::setIsRequired($isRequired);
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
    public function setOptions(?array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        return $pluginInfo ? $this->___callPlugins('setOptions', func_get_args(), $pluginInfo) : parent::setOptions($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUserDefined()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUserDefined');
        return $pluginInfo ? $this->___callPlugins('getIsUserDefined', func_get_args(), $pluginInfo) : parent::getIsUserDefined();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUserDefined($isUserDefined)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUserDefined');
        return $pluginInfo ? $this->___callPlugins('setIsUserDefined', func_get_args(), $pluginInfo) : parent::setIsUserDefined($isUserDefined);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultFrontendLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultFrontendLabel');
        return $pluginInfo ? $this->___callPlugins('getDefaultFrontendLabel', func_get_args(), $pluginInfo) : parent::getDefaultFrontendLabel();
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultFrontendLabel($defaultFrontendLabel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDefaultFrontendLabel');
        return $pluginInfo ? $this->___callPlugins('setDefaultFrontendLabel', func_get_args(), $pluginInfo) : parent::setDefaultFrontendLabel($defaultFrontendLabel);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendLabels()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendLabels');
        return $pluginInfo ? $this->___callPlugins('getFrontendLabels', func_get_args(), $pluginInfo) : parent::getFrontendLabels();
    }

    /**
     * {@inheritdoc}
     */
    public function setFrontendLabels(?array $frontendLabels = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFrontendLabels');
        return $pluginInfo ? $this->___callPlugins('setFrontendLabels', func_get_args(), $pluginInfo) : parent::setFrontendLabels($frontendLabels);
    }

    /**
     * {@inheritdoc}
     */
    public function getNote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNote');
        return $pluginInfo ? $this->___callPlugins('getNote', func_get_args(), $pluginInfo) : parent::getNote();
    }

    /**
     * {@inheritdoc}
     */
    public function setNote($note)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNote');
        return $pluginInfo ? $this->___callPlugins('setNote', func_get_args(), $pluginInfo) : parent::setNote($note);
    }

    /**
     * {@inheritdoc}
     */
    public function setSourceModel($sourceModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSourceModel');
        return $pluginInfo ? $this->___callPlugins('setSourceModel', func_get_args(), $pluginInfo) : parent::setSourceModel($sourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRules()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRules');
        return $pluginInfo ? $this->___callPlugins('getValidationRules', func_get_args(), $pluginInfo) : parent::getValidationRules();
    }

    /**
     * {@inheritdoc}
     */
    public function setValidationRules(?array $validationRules = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValidationRules');
        return $pluginInfo ? $this->___callPlugins('setValidationRules', func_get_args(), $pluginInfo) : parent::setValidationRules($validationRules);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo) : parent::getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\Eav\Api\Data\AttributeExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo) : parent::getCustomAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo) : parent::getCustomAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo) : parent::setCustomAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo) : parent::setCustomAttribute($attributeCode, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo) : parent::setIdFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
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
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        return $pluginInfo ? $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo) : parent::isDeleted($isDeleted);
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        return $pluginInfo ? $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo) : parent::hasDataChanges();
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        return $pluginInfo ? $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo) : parent::setDataChanges($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        return $pluginInfo ? $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo) : parent::getOrigData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        return $pluginInfo ? $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo) : parent::setOrigData($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        return $pluginInfo ? $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo) : parent::dataHasChangedFor($field);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        return $pluginInfo ? $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo) : parent::getResourceName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        return $pluginInfo ? $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo) : parent::getResourceCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($modelId, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoad($identifier, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeLoad');
        return $pluginInfo ? $this->___callPlugins('beforeLoad', func_get_args(), $pluginInfo) : parent::beforeLoad($identifier, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad();
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        return $pluginInfo ? $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo) : parent::isSaveAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        return $pluginInfo ? $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo) : parent::setHasDataChanges($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        return $pluginInfo ? $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo) : parent::afterCommitCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        return $pluginInfo ? $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo) : parent::isObjectNew($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        return $pluginInfo ? $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo) : parent::validateBeforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        return $pluginInfo ? $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo) : parent::getCacheTags();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        return $pluginInfo ? $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo) : parent::cleanModelCache();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        return $pluginInfo ? $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo) : parent::getEntityId();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        return $pluginInfo ? $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo) : parent::setEntityId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        return $pluginInfo ? $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo) : parent::clearInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        return $pluginInfo ? $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo) : parent::getStoredData();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        return $pluginInfo ? $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo) : parent::getEventPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
