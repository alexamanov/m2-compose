<?php
namespace Magento\Eav\Model\ResourceModel\Entity\Attribute;

/**
 * Interceptor class for @see \Magento\Eav\Model\ResourceModel\Entity\Attribute
 */
class Interceptor extends \Magento\Eav\Model\ResourceModel\Entity\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Entity\Type $eavEntityType, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $eavEntityType, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByCode(\Magento\Framework\Model\AbstractModel $object, $entityTypeId, $code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByCode');
        return $pluginInfo ? $this->___callPlugins('loadByCode', func_get_args(), $pluginInfo) : parent::loadByCode($object, $entityTypeId, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteEntity(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteEntity');
        return $pluginInfo ? $this->___callPlugins('deleteEntity', func_get_args(), $pluginInfo) : parent::deleteEntity($object);
    }

    /**
     * {@inheritdoc}
     */
    public function saveInSetIncluding(\Magento\Framework\Model\AbstractModel $object, $attributeEntityId = null, $attributeSetId = null, $attributeGroupId = null, $attributeSortOrder = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveInSetIncluding');
        return $pluginInfo ? $this->___callPlugins('saveInSetIncluding', func_get_args(), $pluginInfo) : parent::saveInSetIncluding($object, $attributeEntityId, $attributeSetId, $attributeGroupId, $attributeSortOrder);
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
    public function getEntityAttribute($entityAttributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityAttribute');
        return $pluginInfo ? $this->___callPlugins('getEntityAttribute', func_get_args(), $pluginInfo) : parent::getEntityAttribute($entityAttributeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeCodesByFrontendType($frontendType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeCodesByFrontendType');
        return $pluginInfo ? $this->___callPlugins('getAttributeCodesByFrontendType', func_get_args(), $pluginInfo) : parent::getAttributeCodesByFrontendType($frontendType);
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatUpdateSelect(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatUpdateSelect');
        return $pluginInfo ? $this->___callPlugins('getFlatUpdateSelect', func_get_args(), $pluginInfo) : parent::getFlatUpdateSelect($attribute, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function describeTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'describeTable');
        return $pluginInfo ? $this->___callPlugins('describeTable', func_get_args(), $pluginInfo) : parent::describeTable($table);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalAttributeTable($entityTypeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalAttributeTable');
        return $pluginInfo ? $this->___callPlugins('getAdditionalAttributeTable', func_get_args(), $pluginInfo) : parent::getAdditionalAttributeTable($entityTypeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabelsByAttributeId($attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabelsByAttributeId');
        return $pluginInfo ? $this->___callPlugins('getStoreLabelsByAttributeId', func_get_args(), $pluginInfo) : parent::getStoreLabelsByAttributeId($attributeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getValidAttributeIds($attributeIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidAttributeIds');
        return $pluginInfo ? $this->___callPlugins('getValidAttributeIds', func_get_args(), $pluginInfo) : parent::getValidAttributeIds($attributeIds);
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
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection();
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
