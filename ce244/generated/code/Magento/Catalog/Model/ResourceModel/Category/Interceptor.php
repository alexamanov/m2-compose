<?php
namespace Magento\Catalog\Model\ResourceModel\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Category
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Factory $modelFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Catalog\Model\ResourceModel\Category\TreeFactory $categoryTreeFactory, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Catalog\Model\Indexer\Category\Product\Processor $indexerProcessor, $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Framework\EntityManager\EntityManager $entityManager = null, ?\Magento\Catalog\Model\ResourceModel\Category\AggregateCount $aggregateCount = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $modelFactory, $eventManager, $categoryTreeFactory, $categoryCollectionFactory, $indexerProcessor, $data, $serializer, $metadataPool, $entityManager, $aggregateCount);
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
    public function getCategoryProductTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryProductTable');
        return $pluginInfo ? $this->___callPlugins('getCategoryProductTable', func_get_args(), $pluginInfo) : parent::getCategoryProductTable();
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
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        return $pluginInfo ? $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo) : parent::getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteChildren(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteChildren');
        return $pluginInfo ? $this->___callPlugins('deleteChildren', func_get_args(), $pluginInfo) : parent::deleteChildren($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPosition($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsPosition');
        return $pluginInfo ? $this->___callPlugins('getProductsPosition', func_get_args(), $pluginInfo) : parent::getProductsPosition($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCount($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCount');
        return $pluginInfo ? $this->___callPlugins('getChildrenCount', func_get_args(), $pluginInfo) : parent::getChildrenCount($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkId');
        return $pluginInfo ? $this->___callPlugins('checkId', func_get_args(), $pluginInfo) : parent::checkId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyIds(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyIds');
        return $pluginInfo ? $this->___callPlugins('verifyIds', func_get_args(), $pluginInfo) : parent::verifyIds($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenAmount($category, $isActiveFlag = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenAmount');
        return $pluginInfo ? $this->___callPlugins('getChildrenAmount', func_get_args(), $pluginInfo) : parent::getChildrenAmount($category, $isActiveFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsActiveAttributeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsActiveAttributeId');
        return $pluginInfo ? $this->___callPlugins('getIsActiveAttributeId', func_get_args(), $pluginInfo) : parent::getIsActiveAttributeId();
    }

    /**
     * {@inheritdoc}
     */
    public function findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findWhereAttributeIs');
        return $pluginInfo ? $this->___callPlugins('findWhereAttributeIs', func_get_args(), $pluginInfo) : parent::findWhereAttributeIs($entityIdsFilter, $attribute, $expectedValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCount($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCount');
        return $pluginInfo ? $this->___callPlugins('getProductCount', func_get_args(), $pluginInfo) : parent::getProductCount($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories($parent, $recursionLevel = 0, $sorted = false, $asCollection = false, $toLoad = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategories');
        return $pluginInfo ? $this->___callPlugins('getCategories', func_get_args(), $pluginInfo) : parent::getCategories($parent, $recursionLevel, $sorted, $asCollection, $toLoad);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentCategories($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategories');
        return $pluginInfo ? $this->___callPlugins('getParentCategories', func_get_args(), $pluginInfo) : parent::getParentCategories($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDesignCategory($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentDesignCategory');
        return $pluginInfo ? $this->___callPlugins('getParentDesignCategory', func_get_args(), $pluginInfo) : parent::getParentDesignCategory($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCategories');
        return $pluginInfo ? $this->___callPlugins('getChildrenCategories', func_get_args(), $pluginInfo) : parent::getChildrenCategories($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($category, $recursive = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren($category, $recursive);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChildren($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllChildren');
        return $pluginInfo ? $this->___callPlugins('getAllChildren', func_get_args(), $pluginInfo) : parent::getAllChildren($category);
    }

    /**
     * {@inheritdoc}
     */
    public function isInRootCategoryList($category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInRootCategoryList');
        return $pluginInfo ? $this->___callPlugins('isInRootCategoryList', func_get_args(), $pluginInfo) : parent::isInRootCategoryList($category);
    }

    /**
     * {@inheritdoc}
     */
    public function isForbiddenToDelete($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isForbiddenToDelete');
        return $pluginInfo ? $this->___callPlugins('isForbiddenToDelete', func_get_args(), $pluginInfo) : parent::isForbiddenToDelete($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryPathById($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryPathById');
        return $pluginInfo ? $this->___callPlugins('getCategoryPathById', func_get_args(), $pluginInfo) : parent::getCategoryPathById($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function changeParent(\Magento\Catalog\Model\Category $category, \Magento\Catalog\Model\Category $newParent, $afterCategoryId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeParent');
        return $pluginInfo ? $this->___callPlugins('changeParent', func_get_args(), $pluginInfo) : parent::changeParent($category, $newParent, $afterCategoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function countVisible()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'countVisible');
        return $pluginInfo ? $this->___callPlugins('countVisible', func_get_args(), $pluginInfo) : parent::countVisible();
    }

    /**
     * {@inheritdoc}
     */
    public function load($object, $entityId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($object, $entityId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryWithChildren(int $categoryId) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryWithChildren');
        return $pluginInfo ? $this->___callPlugins('getCategoryWithChildren', func_get_args(), $pluginInfo) : parent::getCategoryWithChildren($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultStoreId');
        return $pluginInfo ? $this->___callPlugins('getDefaultStoreId', func_get_args(), $pluginInfo) : parent::getDefaultStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeRawValue($entityId, $attribute, $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeRawValue');
        return $pluginInfo ? $this->___callPlugins('getAttributeRawValue', func_get_args(), $pluginInfo) : parent::getAttributeRawValue($entityId, $attribute, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection($connection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnection');
        return $pluginInfo ? $this->___callPlugins('setConnection', func_get_args(), $pluginInfo) : parent::setConnection($connection);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection();
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
    public function getTable($alias)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setType');
        return $pluginInfo ? $this->___callPlugins('setType', func_get_args(), $pluginInfo) : parent::setType($type);
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
    public function getTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeId');
        return $pluginInfo ? $this->___callPlugins('getTypeId', func_get_args(), $pluginInfo) : parent::getTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function unsetAttributes($attributes = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetAttributes');
        return $pluginInfo ? $this->___callPlugins('unsetAttributes', func_get_args(), $pluginInfo) : parent::unsetAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttribute(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttribute');
        return $pluginInfo ? $this->___callPlugins('addAttribute', func_get_args(), $pluginInfo) : parent::addAttribute($attribute, $object);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialLoad($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPartialLoad');
        return $pluginInfo ? $this->___callPlugins('isPartialLoad', func_get_args(), $pluginInfo) : parent::isPartialLoad($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialSave($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPartialSave');
        return $pluginInfo ? $this->___callPlugins('isPartialSave', func_get_args(), $pluginInfo) : parent::isPartialSave($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function loadAllAttributes($object = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadAllAttributes');
        return $pluginInfo ? $this->___callPlugins('loadAllAttributes', func_get_args(), $pluginInfo) : parent::loadAllAttributes($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getSortedAttributes($setId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSortedAttributes');
        return $pluginInfo ? $this->___callPlugins('getSortedAttributes', func_get_args(), $pluginInfo) : parent::getSortedAttributes($setId);
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($firstAttribute, $secondAttribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'attributesCompare');
        return $pluginInfo ? $this->___callPlugins('attributesCompare', func_get_args(), $pluginInfo) : parent::attributesCompare($firstAttribute, $secondAttribute);
    }

    /**
     * {@inheritdoc}
     */
    public function walkAttributes($partMethod, array $args = [], $collectExceptionMessages = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walkAttributes');
        return $pluginInfo ? $this->___callPlugins('walkAttributes', func_get_args(), $pluginInfo) : parent::walkAttributes($partMethod, $args, $collectExceptionMessages);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesByCode');
        return $pluginInfo ? $this->___callPlugins('getAttributesByCode', func_get_args(), $pluginInfo) : parent::getAttributesByCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesByTable');
        return $pluginInfo ? $this->___callPlugins('getAttributesByTable', func_get_args(), $pluginInfo) : parent::getAttributesByTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTable');
        return $pluginInfo ? $this->___callPlugins('getEntityTable', func_get_args(), $pluginInfo) : parent::getEntityTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLinkField');
        return $pluginInfo ? $this->___callPlugins('getLinkField', func_get_args(), $pluginInfo) : parent::getLinkField();
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
    public function getValueEntityIdField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueEntityIdField');
        return $pluginInfo ? $this->___callPlugins('getValueEntityIdField', func_get_args(), $pluginInfo) : parent::getValueEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueTablePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueTablePrefix');
        return $pluginInfo ? $this->___callPlugins('getValueTablePrefix', func_get_args(), $pluginInfo) : parent::getValueTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTablePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTablePrefix');
        return $pluginInfo ? $this->___callPlugins('getEntityTablePrefix', func_get_args(), $pluginInfo) : parent::getEntityTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeStatic($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeStatic');
        return $pluginInfo ? $this->___callPlugins('isAttributeStatic', func_get_args(), $pluginInfo) : parent::isAttributeStatic($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function setNewIncrementId(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNewIncrementId');
        return $pluginInfo ? $this->___callPlugins('setNewIncrementId', func_get_args(), $pluginInfo) : parent::setNewIncrementId($object);
    }

    /**
     * {@inheritdoc}
     */
    public function checkAttributeUniqueValue(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkAttributeUniqueValue');
        return $pluginInfo ? $this->___callPlugins('checkAttributeUniqueValue', func_get_args(), $pluginInfo) : parent::checkAttributeUniqueValue($attribute, $object);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributeSourceModel');
        return $pluginInfo ? $this->___callPlugins('getDefaultAttributeSourceModel', func_get_args(), $pluginInfo) : parent::getDefaultAttributeSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function saveAttribute(\Magento\Framework\DataObject $object, $attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveAttribute');
        return $pluginInfo ? $this->___callPlugins('saveAttribute', func_get_args(), $pluginInfo) : parent::saveAttribute($object, $attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributes');
        return $pluginInfo ? $this->___callPlugins('getDefaultAttributes', func_get_args(), $pluginInfo) : parent::getDefaultAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beginTransaction');
        return $pluginInfo ? $this->___callPlugins('beginTransaction', func_get_args(), $pluginInfo) : parent::beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCommitCallback');
        return $pluginInfo ? $this->___callPlugins('addCommitCallback', func_get_args(), $pluginInfo) : parent::addCommitCallback($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'commit');
        return $pluginInfo ? $this->___callPlugins('commit', func_get_args(), $pluginInfo) : parent::commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'rollBack');
        return $pluginInfo ? $this->___callPlugins('rollBack', func_get_args(), $pluginInfo) : parent::rollBack();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidationRulesBeforeSave');
        return $pluginInfo ? $this->___callPlugins('getValidationRulesBeforeSave', func_get_args(), $pluginInfo) : parent::getValidationRulesBeforeSave();
    }
}
