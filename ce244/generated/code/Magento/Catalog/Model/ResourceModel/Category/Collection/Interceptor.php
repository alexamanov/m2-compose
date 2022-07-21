<?php
namespace Magento\Catalog\Model\ResourceModel\Category\Collection;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Category\Collection
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Category\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Eav\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig = null, ?\Magento\Catalog\Model\Product\Visibility $catalogProductVisibility = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $connection, $scopeConfig, $catalogProductVisibility);
    }

    /**
     * {@inheritdoc}
     */
    public function addIdFilter($categoryIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIdFilter');
        return $pluginInfo ? $this->___callPlugins('addIdFilter', func_get_args(), $pluginInfo) : parent::addIdFilter($categoryIds);
    }

    /**
     * {@inheritdoc}
     */
    public function setLoadProductCount($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLoadProductCount');
        return $pluginInfo ? $this->___callPlugins('setLoadProductCount', func_get_args(), $pluginInfo) : parent::setLoadProductCount($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductStoreId');
        return $pluginInfo ? $this->___callPlugins('setProductStoreId', func_get_args(), $pluginInfo) : parent::setProductStoreId($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductStoreId');
        return $pluginInfo ? $this->___callPlugins('getProductStoreId', func_get_args(), $pluginInfo) : parent::getProductStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function loadProductCount($items, $countRegular = true, $countAnchor = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadProductCount');
        return $pluginInfo ? $this->___callPlugins('loadProductCount', func_get_args(), $pluginInfo) : parent::loadProductCount($items, $countRegular, $countAnchor);
    }

    /**
     * {@inheritdoc}
     */
    public function addPathFilter($regexp)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPathFilter');
        return $pluginInfo ? $this->___callPlugins('addPathFilter', func_get_args(), $pluginInfo) : parent::addPathFilter($regexp);
    }

    /**
     * {@inheritdoc}
     */
    public function joinUrlRewrite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinUrlRewrite');
        return $pluginInfo ? $this->___callPlugins('joinUrlRewrite', func_get_args(), $pluginInfo) : parent::joinUrlRewrite();
    }

    /**
     * {@inheritdoc}
     */
    public function addIsActiveFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIsActiveFilter');
        return $pluginInfo ? $this->___callPlugins('addIsActiveFilter', func_get_args(), $pluginInfo) : parent::addIsActiveFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addNameToResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addNameToResult');
        return $pluginInfo ? $this->___callPlugins('addNameToResult', func_get_args(), $pluginInfo) : parent::addNameToResult();
    }

    /**
     * {@inheritdoc}
     */
    public function addUrlRewriteToResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUrlRewriteToResult');
        return $pluginInfo ? $this->___callPlugins('addUrlRewriteToResult', func_get_args(), $pluginInfo) : parent::addUrlRewriteToResult();
    }

    /**
     * {@inheritdoc}
     */
    public function addPathsFilter($paths)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPathsFilter');
        return $pluginInfo ? $this->___callPlugins('addPathsFilter', func_get_args(), $pluginInfo) : parent::addPathsFilter($paths);
    }

    /**
     * {@inheritdoc}
     */
    public function addLevelFilter($level)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addLevelFilter');
        return $pluginInfo ? $this->___callPlugins('addLevelFilter', func_get_args(), $pluginInfo) : parent::addLevelFilter($level);
    }

    /**
     * {@inheritdoc}
     */
    public function addRootLevelFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRootLevelFilter');
        return $pluginInfo ? $this->___callPlugins('addRootLevelFilter', func_get_args(), $pluginInfo) : parent::addRootLevelFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addNavigationMaxDepthFilter()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addNavigationMaxDepthFilter');
        return $pluginInfo ? $this->___callPlugins('addNavigationMaxDepthFilter', func_get_args(), $pluginInfo) : parent::addNavigationMaxDepthFilter();
    }

    /**
     * {@inheritdoc}
     */
    public function addOrderField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrderField');
        return $pluginInfo ? $this->___callPlugins('addOrderField', func_get_args(), $pluginInfo) : parent::addOrderField($field);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductWebsiteTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductWebsiteTable');
        return $pluginInfo ? $this->___callPlugins('getProductWebsiteTable', func_get_args(), $pluginInfo) : parent::getProductWebsiteTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTable');
        return $pluginInfo ? $this->___callPlugins('getProductTable', func_get_args(), $pluginInfo) : parent::getProductTable();
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
    public function getDefaultStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultStoreId');
        return $pluginInfo ? $this->___callPlugins('getDefaultStoreId', func_get_args(), $pluginInfo) : parent::getDefaultStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($table)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTable');
        return $pluginInfo ? $this->___callPlugins('getTable', func_get_args(), $pluginInfo) : parent::getTable($table);
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
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function setObject($object = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setObject');
        return $pluginInfo ? $this->___callPlugins('setObject', func_get_args(), $pluginInfo) : parent::setObject($object);
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Framework\DataObject $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        return $pluginInfo ? $this->___callPlugins('addItem', func_get_args(), $pluginInfo) : parent::addItem($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToFilter($attribute, $condition = null, $joinType = 'inner')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToFilter');
        return $pluginInfo ? $this->___callPlugins('addAttributeToFilter', func_get_args(), $pluginInfo) : parent::addAttributeToFilter($attribute, $condition, $joinType);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($attribute, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($attribute, $condition);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToSort($attribute, $dir = 'ASC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToSort');
        return $pluginInfo ? $this->___callPlugins('addAttributeToSort', func_get_args(), $pluginInfo) : parent::addAttributeToSort($attribute, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeToSelect($attribute, $joinType = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeToSelect');
        return $pluginInfo ? $this->___callPlugins('addAttributeToSelect', func_get_args(), $pluginInfo) : parent::addAttributeToSelect($attribute, $joinType);
    }

    /**
     * {@inheritdoc}
     */
    public function addEntityTypeToSelect($entityType, $prefix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addEntityTypeToSelect');
        return $pluginInfo ? $this->___callPlugins('addEntityTypeToSelect', func_get_args(), $pluginInfo) : parent::addEntityTypeToSelect($entityType, $prefix);
    }

    /**
     * {@inheritdoc}
     */
    public function addStaticField($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStaticField');
        return $pluginInfo ? $this->___callPlugins('addStaticField', func_get_args(), $pluginInfo) : parent::addStaticField($field);
    }

    /**
     * {@inheritdoc}
     */
    public function addExpressionAttributeToSelect($alias, $expression, $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addExpressionAttributeToSelect');
        return $pluginInfo ? $this->___callPlugins('addExpressionAttributeToSelect', func_get_args(), $pluginInfo) : parent::addExpressionAttributeToSelect($alias, $expression, $attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function groupByAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'groupByAttribute');
        return $pluginInfo ? $this->___callPlugins('groupByAttribute', func_get_args(), $pluginInfo) : parent::groupByAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function joinAttribute($alias, $attribute, $bind, $filter = null, $joinType = 'inner', $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinAttribute');
        return $pluginInfo ? $this->___callPlugins('joinAttribute', func_get_args(), $pluginInfo) : parent::joinAttribute($alias, $attribute, $bind, $filter, $joinType, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function joinField($alias, $table, $field, $bind, $cond = null, $joinType = 'inner')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinField');
        return $pluginInfo ? $this->___callPlugins('joinField', func_get_args(), $pluginInfo) : parent::joinField($alias, $table, $field, $bind, $cond, $joinType);
    }

    /**
     * {@inheritdoc}
     */
    public function joinTable($table, $bind, $fields = null, $cond = null, $joinType = 'inner')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinTable');
        return $pluginInfo ? $this->___callPlugins('joinTable', func_get_args(), $pluginInfo) : parent::joinTable($table, $bind, $fields, $cond, $joinType);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAttributeToSelect($attribute = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAttributeToSelect');
        return $pluginInfo ? $this->___callPlugins('removeAttributeToSelect', func_get_args(), $pluginInfo) : parent::removeAttributeToSelect($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function setPage($pageNum, $pageSize)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPage');
        return $pluginInfo ? $this->___callPlugins('setPage', func_get_args(), $pluginInfo) : parent::setPage($pageNum, $pageSize);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIds($limit = null, $offset = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        return $pluginInfo ? $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo) : parent::getAllIds($limit, $offset);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIdsSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIdsSql');
        return $pluginInfo ? $this->___callPlugins('getAllIdsSql', func_get_args(), $pluginInfo) : parent::getAllIdsSql();
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
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }

    /**
     * {@inheritdoc}
     */
    public function importFromArray($arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importFromArray');
        return $pluginInfo ? $this->___callPlugins('importFromArray', func_get_args(), $pluginInfo) : parent::importFromArray($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function exportToArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'exportToArray');
        return $pluginInfo ? $this->___callPlugins('exportToArray', func_get_args(), $pluginInfo) : parent::exportToArray();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getRowIdFieldName', func_get_args(), $pluginInfo) : parent::getRowIdFieldName();
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
    public function setRowIdFieldName($fieldName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRowIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setRowIdFieldName', func_get_args(), $pluginInfo) : parent::setRowIdFieldName($fieldName);
    }

    /**
     * {@inheritdoc}
     */
    public function _loadEntities($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_loadEntities');
        return $pluginInfo ? $this->___callPlugins('_loadEntities', func_get_args(), $pluginInfo) : parent::_loadEntities($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function _loadAttributes($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_loadAttributes');
        return $pluginInfo ? $this->___callPlugins('_loadAttributes', func_get_args(), $pluginInfo) : parent::_loadAttributes($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($attribute, $dir = 'ASC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($attribute, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray($arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($arrAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeAdded($attributeCode) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeAdded');
        return $pluginInfo ? $this->___callPlugins('isAttributeAdded', func_get_args(), $pluginInfo) : parent::isAttributeAdded($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getLoadedIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLoadedIds');
        return $pluginInfo ? $this->___callPlugins('getLoadedIds', func_get_args(), $pluginInfo) : parent::getLoadedIds();
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        return $pluginInfo ? $this->___callPlugins('clear', func_get_args(), $pluginInfo) : parent::clear();
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllItems');
        return $pluginInfo ? $this->___callPlugins('removeAllItems', func_get_args(), $pluginInfo) : parent::removeAllItems();
    }

    /**
     * {@inheritdoc}
     */
    public function removeItemByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItemByKey');
        return $pluginInfo ? $this->___callPlugins('removeItemByKey', func_get_args(), $pluginInfo) : parent::removeItemByKey($key);
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
    public function addFieldToSelect($field, $alias = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToSelect');
        return $pluginInfo ? $this->___callPlugins('addFieldToSelect', func_get_args(), $pluginInfo) : parent::addFieldToSelect($field, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function removeFieldFromSelect($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeFieldFromSelect');
        return $pluginInfo ? $this->___callPlugins('removeFieldFromSelect', func_get_args(), $pluginInfo) : parent::removeFieldFromSelect($field);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllFieldsFromSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllFieldsFromSelect');
        return $pluginInfo ? $this->___callPlugins('removeAllFieldsFromSelect', func_get_args(), $pluginInfo) : parent::removeAllFieldsFromSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function addBindParam($name, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBindParam');
        return $pluginInfo ? $this->___callPlugins('addBindParam', func_get_args(), $pluginInfo) : parent::addBindParam($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection(\Magento\Framework\DB\Adapter\AdapterInterface $conn)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConnection');
        return $pluginInfo ? $this->___callPlugins('setConnection', func_get_args(), $pluginInfo) : parent::setConnection($conn);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelect');
        return $pluginInfo ? $this->___callPlugins('getSelect', func_get_args(), $pluginInfo) : parent::getSelect();
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
    public function getSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSize');
        return $pluginInfo ? $this->___callPlugins('getSize', func_get_args(), $pluginInfo) : parent::getSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectCountSql()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectCountSql');
        return $pluginInfo ? $this->___callPlugins('getSelectCountSql', func_get_args(), $pluginInfo) : parent::getSelectCountSql();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectSql($stringMode = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectSql');
        return $pluginInfo ? $this->___callPlugins('getSelectSql', func_get_args(), $pluginInfo) : parent::getSelectSql($stringMode);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        return $pluginInfo ? $this->___callPlugins('addOrder', func_get_args(), $pluginInfo) : parent::addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function unshiftOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unshiftOrder');
        return $pluginInfo ? $this->___callPlugins('unshiftOrder', func_get_args(), $pluginInfo) : parent::unshiftOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function distinct($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'distinct');
        return $pluginInfo ? $this->___callPlugins('distinct', func_get_args(), $pluginInfo) : parent::distinct($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function loadWithFilter($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadWithFilter');
        return $pluginInfo ? $this->___callPlugins('loadWithFilter', func_get_args(), $pluginInfo) : parent::loadWithFilter($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchItem');
        return $pluginInfo ? $this->___callPlugins('fetchItem', func_get_args(), $pluginInfo) : parent::fetchItem();
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
    public function resetData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetData');
        return $pluginInfo ? $this->___callPlugins('resetData', func_get_args(), $pluginInfo) : parent::resetData();
    }

    /**
     * {@inheritdoc}
     */
    public function loadData($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadData');
        return $pluginInfo ? $this->___callPlugins('loadData', func_get_args(), $pluginInfo) : parent::loadData($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function printLogQuery($printQuery = false, $logQuery = false, $sql = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'printLogQuery');
        return $pluginInfo ? $this->___callPlugins('printLogQuery', func_get_args(), $pluginInfo) : parent::printLogQuery($printQuery, $logQuery, $sql);
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterToMap($filter, $alias, $group = 'fields')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilterToMap');
        return $pluginInfo ? $this->___callPlugins('addFilterToMap', func_get_args(), $pluginInfo) : parent::addFilterToMap($filter, $alias, $group);
    }

    /**
     * {@inheritdoc}
     */
    public function joinExtensionAttribute(\Magento\Framework\Api\ExtensionAttribute\JoinDataInterface $join, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinExtensionAttribute');
        return $pluginInfo ? $this->___callPlugins('joinExtensionAttribute', func_get_args(), $pluginInfo) : parent::joinExtensionAttribute($join, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemObjectClass()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemObjectClass');
        return $pluginInfo ? $this->___callPlugins('getItemObjectClass', func_get_args(), $pluginInfo) : parent::getItemObjectClass();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter($field, $value, $type = 'and')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilter');
        return $pluginInfo ? $this->___callPlugins('addFilter', func_get_args(), $pluginInfo) : parent::addFilter($field, $value, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilter');
        return $pluginInfo ? $this->___callPlugins('getFilter', func_get_args(), $pluginInfo) : parent::getFilter($field);
    }

    /**
     * {@inheritdoc}
     */
    public function isLoaded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoaded');
        return $pluginInfo ? $this->___callPlugins('isLoaded', func_get_args(), $pluginInfo) : parent::isLoaded();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastPageNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastPageNumber');
        return $pluginInfo ? $this->___callPlugins('getLastPageNumber', func_get_args(), $pluginInfo) : parent::getLastPageNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getPageSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageSize');
        return $pluginInfo ? $this->___callPlugins('getPageSize', func_get_args(), $pluginInfo) : parent::getPageSize();
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstItem');
        return $pluginInfo ? $this->___callPlugins('getFirstItem', func_get_args(), $pluginInfo) : parent::getFirstItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastItem');
        return $pluginInfo ? $this->___callPlugins('getLastItem', func_get_args(), $pluginInfo) : parent::getLastItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        return $pluginInfo ? $this->___callPlugins('getItems', func_get_args(), $pluginInfo) : parent::getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getColumnValues($colName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getColumnValues');
        return $pluginInfo ? $this->___callPlugins('getColumnValues', func_get_args(), $pluginInfo) : parent::getColumnValues($colName);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemsByColumnValue', func_get_args(), $pluginInfo) : parent::getItemsByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByColumnValue($column, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemByColumnValue');
        return $pluginInfo ? $this->___callPlugins('getItemByColumnValue', func_get_args(), $pluginInfo) : parent::getItemByColumnValue($column, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function walk($callback, array $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'walk');
        return $pluginInfo ? $this->___callPlugins('walk', func_get_args(), $pluginInfo) : parent::walk($callback, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function each($objMethod, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'each');
        return $pluginInfo ? $this->___callPlugins('each', func_get_args(), $pluginInfo) : parent::each($objMethod, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataToAll($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataToAll');
        return $pluginInfo ? $this->___callPlugins('setDataToAll', func_get_args(), $pluginInfo) : parent::setDataToAll($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setCurPage($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurPage');
        return $pluginInfo ? $this->___callPlugins('setCurPage', func_get_args(), $pluginInfo) : parent::setCurPage($page);
    }

    /**
     * {@inheritdoc}
     */
    public function setPageSize($size)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPageSize');
        return $pluginInfo ? $this->___callPlugins('setPageSize', func_get_args(), $pluginInfo) : parent::setPageSize($size);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemObjectClass($className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemObjectClass');
        return $pluginInfo ? $this->___callPlugins('setItemObjectClass', func_get_args(), $pluginInfo) : parent::setItemObjectClass($className);
    }

    /**
     * {@inheritdoc}
     */
    public function getNewEmptyItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewEmptyItem');
        return $pluginInfo ? $this->___callPlugins('getNewEmptyItem', func_get_args(), $pluginInfo) : parent::getNewEmptyItem();
    }

    /**
     * {@inheritdoc}
     */
    public function toXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionHash');
        return $pluginInfo ? $this->___callPlugins('toOptionHash', func_get_args(), $pluginInfo) : parent::toOptionHash();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($idValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        return $pluginInfo ? $this->___callPlugins('getItemById', func_get_args(), $pluginInfo) : parent::getItemById($idValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIterator');
        return $pluginInfo ? $this->___callPlugins('getIterator', func_get_args(), $pluginInfo) : parent::getIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'count');
        return $pluginInfo ? $this->___callPlugins('count', func_get_args(), $pluginInfo) : parent::count();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlag');
        return $pluginInfo ? $this->___callPlugins('getFlag', func_get_args(), $pluginInfo) : parent::getFlag($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFlag($flag, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFlag');
        return $pluginInfo ? $this->___callPlugins('setFlag', func_get_args(), $pluginInfo) : parent::setFlag($flag, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function hasFlag($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasFlag');
        return $pluginInfo ? $this->___callPlugins('hasFlag', func_get_args(), $pluginInfo) : parent::hasFlag($flag);
    }
}
