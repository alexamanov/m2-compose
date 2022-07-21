<?php
namespace Magento\CatalogInventory\Model\ResourceModel\Stock\Status;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\ResourceModel\Stock\Status
 */
class Interceptor extends \Magento\CatalogInventory\Model\ResourceModel\Stock\Status implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Store\Model\WebsiteFactory $websiteFactory, \Magento\Eav\Model\Config $eavConfig, $connectionName = null, $stockConfiguration = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $websiteFactory, $eavConfig, $connectionName, $stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function saveProductStatus($productId, $status, $qty, $websiteId, $stockId = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveProductStatus');
        return $pluginInfo ? $this->___callPlugins('saveProductStatus', func_get_args(), $pluginInfo) : parent::saveProductStatus($productId, $status, $qty, $websiteId, $stockId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsStockStatuses($productIds, $websiteId, $stockId = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsStockStatuses');
        return $pluginInfo ? $this->___callPlugins('getProductsStockStatuses', func_get_args(), $pluginInfo) : parent::getProductsStockStatuses($productIds, $websiteId, $stockId);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteStores()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteStores');
        return $pluginInfo ? $this->___callPlugins('getWebsiteStores', func_get_args(), $pluginInfo) : parent::getWebsiteStores();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsType($productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsType');
        return $pluginInfo ? $this->___callPlugins('getProductsType', func_get_args(), $pluginInfo) : parent::getProductsType($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCollection($lastEntityId = 0, $limit = 1000)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCollection');
        return $pluginInfo ? $this->___callPlugins('getProductCollection', func_get_args(), $pluginInfo) : parent::getProductCollection($lastEntityId, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function addStockStatusToSelect(\Magento\Framework\DB\Select $select, \Magento\Store\Model\Website $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStockStatusToSelect');
        return $pluginInfo ? $this->___callPlugins('addStockStatusToSelect', func_get_args(), $pluginInfo) : parent::addStockStatusToSelect($select, $website);
    }

    /**
     * {@inheritdoc}
     */
    public function addStockDataToCollection($collection, $isFilterInStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStockDataToCollection');
        return $pluginInfo ? $this->___callPlugins('addStockDataToCollection', func_get_args(), $pluginInfo) : parent::addStockDataToCollection($collection, $isFilterInStock);
    }

    /**
     * {@inheritdoc}
     */
    public function addIsInStockFilterToCollection($collection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIsInStockFilterToCollection');
        return $pluginInfo ? $this->___callPlugins('addIsInStockFilterToCollection', func_get_args(), $pluginInfo) : parent::addIsInStockFilterToCollection($collection);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductStatus($productIds, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductStatus');
        return $pluginInfo ? $this->___callPlugins('getProductStatus', func_get_args(), $pluginInfo) : parent::getProductStatus($productIds, $storeId);
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
