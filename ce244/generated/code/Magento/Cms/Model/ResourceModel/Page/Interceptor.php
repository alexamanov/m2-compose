<?php
namespace Magento\Cms\Model\ResourceModel\Page;

/**
 * Interceptor class for @see \Magento\Cms\Model\ResourceModel\Page
 */
class Interceptor extends \Magento\Cms\Model\ResourceModel\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\EntityManager\EntityManager $entityManager, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $dateTime, $entityManager, $metadataPool, $connectionName);
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
    public function checkIdentifier($identifier, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkIdentifier');
        return $pluginInfo ? $this->___callPlugins('checkIdentifier', func_get_args(), $pluginInfo) : parent::checkIdentifier($identifier, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCmsPageTitleByIdentifier($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCmsPageTitleByIdentifier');
        return $pluginInfo ? $this->___callPlugins('getCmsPageTitleByIdentifier', func_get_args(), $pluginInfo) : parent::getCmsPageTitleByIdentifier($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function getCmsPageTitleById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCmsPageTitleById');
        return $pluginInfo ? $this->___callPlugins('getCmsPageTitleById', func_get_args(), $pluginInfo) : parent::getCmsPageTitleById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getCmsPageIdentifierById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCmsPageIdentifierById');
        return $pluginInfo ? $this->___callPlugins('getCmsPageIdentifierById', func_get_args(), $pluginInfo) : parent::getCmsPageIdentifierById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function lookupStoreIds($pageId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lookupStoreIds');
        return $pluginInfo ? $this->___callPlugins('lookupStoreIds', func_get_args(), $pluginInfo) : parent::lookupStoreIds($pageId);
    }

    /**
     * {@inheritdoc}
     */
    public function setStore($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStore');
        return $pluginInfo ? $this->___callPlugins('setStore', func_get_args(), $pluginInfo) : parent::setStore($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
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
