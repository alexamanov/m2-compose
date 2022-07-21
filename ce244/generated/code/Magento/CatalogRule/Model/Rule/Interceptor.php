<?php
namespace Magento\CatalogRule\Model\Rule;

/**
 * Interceptor class for @see \Magento\CatalogRule\Model\Rule
 */
class Interceptor extends \Magento\CatalogRule\Model\Rule implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\CatalogRule\Model\Rule\Condition\CombineFactory $combineFactory, \Magento\CatalogRule\Model\Rule\Action\CollectionFactory $actionCollectionFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Framework\Model\ResourceModel\Iterator $resourceIterator, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogRule\Helper\Data $catalogRuleData, \Magento\Framework\App\Cache\TypeListInterface $cacheTypesList, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\CatalogRule\Model\Indexer\Rule\RuleProductProcessor $ruleProductProcessor, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $relatedCacheTypes = [], array $data = [], ?\Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory = null, ?\Magento\Framework\Api\AttributeValueFactory $customAttributeFactory = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\CatalogRule\Model\ResourceModel\Rule $ruleResourceModel = null, ?\Magento\CatalogRule\Model\ResourceModel\Product\ConditionsToCollectionApplier $conditionsToCollectionApplier = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $localeDate, $productCollectionFactory, $storeManager, $combineFactory, $actionCollectionFactory, $productFactory, $resourceIterator, $customerSession, $catalogRuleData, $cacheTypesList, $dateTime, $ruleProductProcessor, $resource, $resourceCollection, $relatedCacheTypes, $data, $extensionFactory, $customAttributeFactory, $serializer, $ruleResourceModel, $conditionsToCollectionApplier);
    }

    /**
     * {@inheritdoc}
     */
    public function getConditionsInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConditionsInstance');
        return $pluginInfo ? $this->___callPlugins('getConditionsInstance', func_get_args(), $pluginInfo) : parent::getConditionsInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getActionsInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionsInstance');
        return $pluginInfo ? $this->___callPlugins('getActionsInstance', func_get_args(), $pluginInfo) : parent::getActionsInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupIds');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupIds', func_get_args(), $pluginInfo) : parent::getCustomerGroupIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getNow()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNow');
        return $pluginInfo ? $this->___callPlugins('getNow', func_get_args(), $pluginInfo) : parent::getNow();
    }

    /**
     * {@inheritdoc}
     */
    public function setNow($now)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNow');
        return $pluginInfo ? $this->___callPlugins('setNow', func_get_args(), $pluginInfo) : parent::setNow($now);
    }

    /**
     * {@inheritdoc}
     */
    public function getMatchingProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMatchingProductIds');
        return $pluginInfo ? $this->___callPlugins('getMatchingProductIds', func_get_args(), $pluginInfo) : parent::getMatchingProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function callbackValidateProduct($args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'callbackValidateProduct');
        return $pluginInfo ? $this->___callPlugins('callbackValidateProduct', func_get_args(), $pluginInfo) : parent::callbackValidateProduct($args);
    }

    /**
     * {@inheritdoc}
     */
    public function validateData(\Magento\Framework\DataObject $dataObject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateData');
        return $pluginInfo ? $this->___callPlugins('validateData', func_get_args(), $pluginInfo) : parent::validateData($dataObject);
    }

    /**
     * {@inheritdoc}
     */
    public function calcProductPriceRule(\Magento\Catalog\Model\Product $product, $price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calcProductPriceRule');
        return $pluginInfo ? $this->___callPlugins('calcProductPriceRule', func_get_args(), $pluginInfo) : parent::calcProductPriceRule($product, $price);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductsFilter($productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductsFilter');
        return $pluginInfo ? $this->___callPlugins('setProductsFilter', func_get_args(), $pluginInfo) : parent::setProductsFilter($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsFilter');
        return $pluginInfo ? $this->___callPlugins('getProductsFilter', func_get_args(), $pluginInfo) : parent::getProductsFilter();
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
    public function reindex()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindex');
        return $pluginInfo ? $this->___callPlugins('reindex', func_get_args(), $pluginInfo) : parent::reindex();
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
    public function isRuleBehaviorChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRuleBehaviorChanged');
        return $pluginInfo ? $this->___callPlugins('isRuleBehaviorChanged', func_get_args(), $pluginInfo) : parent::isRuleBehaviorChanged();
    }

    /**
     * {@inheritdoc}
     */
    public function getConditionsFieldSetId($formName = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConditionsFieldSetId');
        return $pluginInfo ? $this->___callPlugins('getConditionsFieldSetId', func_get_args(), $pluginInfo) : parent::getConditionsFieldSetId($formName);
    }

    /**
     * {@inheritdoc}
     */
    public function getRuleId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRuleId');
        return $pluginInfo ? $this->___callPlugins('getRuleId', func_get_args(), $pluginInfo) : parent::getRuleId();
    }

    /**
     * {@inheritdoc}
     */
    public function setRuleId($ruleId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRuleId');
        return $pluginInfo ? $this->___callPlugins('setRuleId', func_get_args(), $pluginInfo) : parent::setRuleId($ruleId);
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
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
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
    public function setDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDescription');
        return $pluginInfo ? $this->___callPlugins('setDescription', func_get_args(), $pluginInfo) : parent::setDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsActive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsActive');
        return $pluginInfo ? $this->___callPlugins('getIsActive', func_get_args(), $pluginInfo) : parent::getIsActive();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsActive($isActive)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsActive');
        return $pluginInfo ? $this->___callPlugins('setIsActive', func_get_args(), $pluginInfo) : parent::setIsActive($isActive);
    }

    /**
     * {@inheritdoc}
     */
    public function getRuleCondition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRuleCondition');
        return $pluginInfo ? $this->___callPlugins('getRuleCondition', func_get_args(), $pluginInfo) : parent::getRuleCondition();
    }

    /**
     * {@inheritdoc}
     */
    public function setRuleCondition($condition)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRuleCondition');
        return $pluginInfo ? $this->___callPlugins('setRuleCondition', func_get_args(), $pluginInfo) : parent::setRuleCondition($condition);
    }

    /**
     * {@inheritdoc}
     */
    public function getStopRulesProcessing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStopRulesProcessing');
        return $pluginInfo ? $this->___callPlugins('getStopRulesProcessing', func_get_args(), $pluginInfo) : parent::getStopRulesProcessing();
    }

    /**
     * {@inheritdoc}
     */
    public function setStopRulesProcessing($isStopProcessing)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStopRulesProcessing');
        return $pluginInfo ? $this->___callPlugins('setStopRulesProcessing', func_get_args(), $pluginInfo) : parent::setStopRulesProcessing($isStopProcessing);
    }

    /**
     * {@inheritdoc}
     */
    public function getSortOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortOrder');
        return $pluginInfo ? $this->___callPlugins('getSortOrder', func_get_args(), $pluginInfo) : parent::getSortOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function setSortOrder($sortOrder)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSortOrder');
        return $pluginInfo ? $this->___callPlugins('setSortOrder', func_get_args(), $pluginInfo) : parent::setSortOrder($sortOrder);
    }

    /**
     * {@inheritdoc}
     */
    public function getSimpleAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSimpleAction');
        return $pluginInfo ? $this->___callPlugins('getSimpleAction', func_get_args(), $pluginInfo) : parent::getSimpleAction();
    }

    /**
     * {@inheritdoc}
     */
    public function setSimpleAction($action)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSimpleAction');
        return $pluginInfo ? $this->___callPlugins('setSimpleAction', func_get_args(), $pluginInfo) : parent::setSimpleAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountAmount', func_get_args(), $pluginInfo) : parent::getDiscountAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('setDiscountAmount', func_get_args(), $pluginInfo) : parent::setDiscountAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function getFromDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFromDate');
        return $pluginInfo ? $this->___callPlugins('getFromDate', func_get_args(), $pluginInfo) : parent::getFromDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getToDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getToDate');
        return $pluginInfo ? $this->___callPlugins('getToDate', func_get_args(), $pluginInfo) : parent::getToDate();
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
    public function setExtensionAttributes(\Magento\CatalogRule\Api\Data\RuleExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
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
    public function clearPriceRulesData() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearPriceRulesData');
        $pluginInfo ? $this->___callPlugins('clearPriceRulesData', func_get_args(), $pluginInfo) : parent::clearPriceRulesData();
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
    public function setConditions($conditions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConditions');
        return $pluginInfo ? $this->___callPlugins('setConditions', func_get_args(), $pluginInfo) : parent::setConditions($conditions);
    }

    /**
     * {@inheritdoc}
     */
    public function getConditions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConditions');
        return $pluginInfo ? $this->___callPlugins('getConditions', func_get_args(), $pluginInfo) : parent::getConditions();
    }

    /**
     * {@inheritdoc}
     */
    public function setActions($actions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setActions');
        return $pluginInfo ? $this->___callPlugins('setActions', func_get_args(), $pluginInfo) : parent::setActions($actions);
    }

    /**
     * {@inheritdoc}
     */
    public function getActions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActions');
        return $pluginInfo ? $this->___callPlugins('getActions', func_get_args(), $pluginInfo) : parent::getActions();
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function loadPost(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadPost');
        return $pluginInfo ? $this->___callPlugins('loadPost', func_get_args(), $pluginInfo) : parent::loadPost($data);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleteable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleteable');
        return $pluginInfo ? $this->___callPlugins('isDeleteable', func_get_args(), $pluginInfo) : parent::isDeleteable();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDeleteable($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDeleteable');
        return $pluginInfo ? $this->___callPlugins('setIsDeleteable', func_get_args(), $pluginInfo) : parent::setIsDeleteable($value);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadonly()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReadonly');
        return $pluginInfo ? $this->___callPlugins('isReadonly', func_get_args(), $pluginInfo) : parent::isReadonly();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsReadonly($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsReadonly');
        return $pluginInfo ? $this->___callPlugins('setIsReadonly', func_get_args(), $pluginInfo) : parent::setIsReadonly($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteIds');
        return $pluginInfo ? $this->___callPlugins('getWebsiteIds', func_get_args(), $pluginInfo) : parent::getWebsiteIds();
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
