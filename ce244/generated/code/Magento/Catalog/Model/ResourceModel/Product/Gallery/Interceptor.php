<?php
namespace Magento\Catalog\Model\ResourceModel\Product\Gallery;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Product\Gallery
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Product\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $connectionName = null, ?\Magento\Catalog\Model\Product\Media\Config $mediaConfig = null)
    {
        $this->___init();
        parent::__construct($context, $metadataPool, $connectionName, $mediaConfig);
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
    public function loadDataFromTableByValueId($tableNameAlias, array $ids, $storeId = null, ?array $cols = null, array $leftJoinTables = [], $whereCondition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadDataFromTableByValueId');
        return $pluginInfo ? $this->___callPlugins('loadDataFromTableByValueId', func_get_args(), $pluginInfo) : parent::loadDataFromTableByValueId($tableNameAlias, $ids, $storeId, $cols, $leftJoinTables, $whereCondition);
    }

    /**
     * {@inheritdoc}
     */
    public function loadProductGalleryByAttributeId($product, $attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadProductGalleryByAttributeId');
        return $pluginInfo ? $this->___callPlugins('loadProductGalleryByAttributeId', func_get_args(), $pluginInfo) : parent::loadProductGalleryByAttributeId($product, $attributeId);
    }

    /**
     * {@inheritdoc}
     */
    public function createBatchBaseSelect($storeId, $attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createBatchBaseSelect');
        return $pluginInfo ? $this->___callPlugins('createBatchBaseSelect', func_get_args(), $pluginInfo) : parent::createBatchBaseSelect($storeId, $attributeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTableAlias()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTableAlias');
        return $pluginInfo ? $this->___callPlugins('getMainTableAlias', func_get_args(), $pluginInfo) : parent::getMainTableAlias();
    }

    /**
     * {@inheritdoc}
     */
    public function bindValueToEntity($valueId, $entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'bindValueToEntity');
        return $pluginInfo ? $this->___callPlugins('bindValueToEntity', func_get_args(), $pluginInfo) : parent::bindValueToEntity($valueId, $entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function saveDataRow($table, array $data, array $fields = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveDataRow');
        return $pluginInfo ? $this->___callPlugins('saveDataRow', func_get_args(), $pluginInfo) : parent::saveDataRow($table, $data, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function insertGallery($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertGallery');
        return $pluginInfo ? $this->___callPlugins('insertGallery', func_get_args(), $pluginInfo) : parent::insertGallery($data);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteGallery($valueId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteGallery');
        return $pluginInfo ? $this->___callPlugins('deleteGallery', func_get_args(), $pluginInfo) : parent::deleteGallery($valueId);
    }

    /**
     * {@inheritdoc}
     */
    public function insertGalleryValueInStore($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'insertGalleryValueInStore');
        return $pluginInfo ? $this->___callPlugins('insertGalleryValueInStore', func_get_args(), $pluginInfo) : parent::insertGalleryValueInStore($data);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteGalleryValueInStore($valueId, $entityId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteGalleryValueInStore');
        return $pluginInfo ? $this->___callPlugins('deleteGalleryValueInStore', func_get_args(), $pluginInfo) : parent::deleteGalleryValueInStore($valueId, $entityId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function duplicate($attributeId, $newFiles, $originalProductId, $newProductId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicate');
        return $pluginInfo ? $this->___callPlugins('duplicate', func_get_args(), $pluginInfo) : parent::duplicate($attributeId, $newFiles, $originalProductId, $newProductId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductImages($product, $storeIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductImages');
        return $pluginInfo ? $this->___callPlugins('getProductImages', func_get_args(), $pluginInfo) : parent::getProductImages($product, $storeIds);
    }

    /**
     * {@inheritdoc}
     */
    public function countImageUses($image)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'countImageUses');
        return $pluginInfo ? $this->___callPlugins('countImageUses', func_get_args(), $pluginInfo) : parent::countImageUses($image);
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
    public function getMainTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMainTable');
        return $pluginInfo ? $this->___callPlugins('getMainTable', func_get_args(), $pluginInfo) : parent::getMainTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable($tableName);
    }

    /**
     * {@inheritdoc}
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($object, $value, $field);
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
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function addUniqueField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUniqueField');
        return $pluginInfo ? $this->___callPlugins('addUniqueField', func_get_args(), $pluginInfo) : parent::addUniqueField($field);
    }

    /**
     * {@inheritdoc}
     */
    public function resetUniqueField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetUniqueField');
        return $pluginInfo ? $this->___callPlugins('resetUniqueField', func_get_args(), $pluginInfo) : parent::resetUniqueField();
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unserializeFields');
        return $pluginInfo ? $this->___callPlugins('unserializeFields', func_get_args(), $pluginInfo) : parent::unserializeFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueFields');
        return $pluginInfo ? $this->___callPlugins('getUniqueFields', func_get_args(), $pluginInfo) : parent::getUniqueFields();
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanged($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanged');
        return $pluginInfo ? $this->___callPlugins('hasDataChanged', func_get_args(), $pluginInfo) : parent::hasDataChanged($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getChecksum($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChecksum');
        return $pluginInfo ? $this->___callPlugins('getChecksum', func_get_args(), $pluginInfo) : parent::getChecksum($table);
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
    public function serializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serializeFields');
        return $pluginInfo ? $this->___callPlugins('serializeFields', func_get_args(), $pluginInfo) : parent::serializeFields($object);
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
