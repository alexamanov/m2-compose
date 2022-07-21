<?php
namespace Magento\PageBuilder\Ui\DataProvider\Product\ProductCollection;

/**
 * Interceptor class for @see \Magento\PageBuilder\Ui\DataProvider\Product\ProductCollection
 */
class Interceptor extends \Magento\PageBuilder\Ui\DataProvider\Product\ProductCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Catalog\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Catalog\Model\Indexer\Product\Flat\State $catalogProductFlatState, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Catalog\Model\ResourceModel\Url $catalogUrl, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Api\GroupManagementInterface $groupManagement, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Catalog\Model\ResourceModel\Product\Collection\ProductLimitationFactory $productLimitationFactory = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer = null, ?\Magento\Catalog\Model\Indexer\Product\Price\PriceTableResolver $priceTableResolver = null, ?\Magento\Framework\Indexer\DimensionFactory $dimensionFactory = null, ?\Magento\Catalog\Model\ResourceModel\Category $categoryResourceModel = null, ?\Magento\CatalogUrlRewrite\Model\Storage\DbStorage $urlFinder = null, ?\Magento\Catalog\Model\Product\Gallery\ReadHandler $productGalleryReadHandler = null, ?\Magento\Catalog\Model\ResourceModel\Product\Gallery $mediaGalleryResource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $moduleManager, $catalogProductFlatState, $scopeConfig, $productOptionFactory, $catalogUrl, $localeDate, $customerSession, $dateTime, $groupManagement, $connection, $productLimitationFactory, $metadataPool, $tableMaintainer, $priceTableResolver, $dimensionFactory, $categoryResourceModel, $urlFinder, $productGalleryReadHandler, $mediaGalleryResource);
    }

    /**
     * {@inheritdoc}
     */
    public function setVisibility($visibility)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVisibility');
        return $pluginInfo ? $this->___callPlugins('setVisibility', func_get_args(), $pluginInfo) : parent::setVisibility($visibility);
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogPreparedSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCatalogPreparedSelect');
        return $pluginInfo ? $this->___callPlugins('getCatalogPreparedSelect', func_get_args(), $pluginInfo) : parent::getCatalogPreparedSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceExpression($select)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceExpression');
        return $pluginInfo ? $this->___callPlugins('getPriceExpression', func_get_args(), $pluginInfo) : parent::getPriceExpression($select);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalPriceExpression($select)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalPriceExpression');
        return $pluginInfo ? $this->___callPlugins('getAdditionalPriceExpression', func_get_args(), $pluginInfo) : parent::getAdditionalPriceExpression($select);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrencyRate');
        return $pluginInfo ? $this->___callPlugins('getCurrencyRate', func_get_args(), $pluginInfo) : parent::getCurrencyRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatState()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatState');
        return $pluginInfo ? $this->___callPlugins('getFlatState', func_get_args(), $pluginInfo) : parent::getFlatState();
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabledFlat()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEnabledFlat');
        return $pluginInfo ? $this->___callPlugins('isEnabledFlat', func_get_args(), $pluginInfo) : parent::isEnabledFlat();
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
    public function setEntity($entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntity');
        return $pluginInfo ? $this->___callPlugins('setEntity', func_get_args(), $pluginInfo) : parent::setEntity($entity);
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
    public function _loadAttributes($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_loadAttributes');
        return $pluginInfo ? $this->___callPlugins('_loadAttributes', func_get_args(), $pluginInfo) : parent::_loadAttributes($printQuery, $logQuery);
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
    public function addIdFilter($productId, $exclude = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addIdFilter');
        return $pluginInfo ? $this->___callPlugins('addIdFilter', func_get_args(), $pluginInfo) : parent::addIdFilter($productId, $exclude);
    }

    /**
     * {@inheritdoc}
     */
    public function addWebsiteNamesToResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addWebsiteNamesToResult');
        return $pluginInfo ? $this->___callPlugins('addWebsiteNamesToResult', func_get_args(), $pluginInfo) : parent::addWebsiteNamesToResult();
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
    public function addStoreFilter($store = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addStoreFilter');
        return $pluginInfo ? $this->___callPlugins('addStoreFilter', func_get_args(), $pluginInfo) : parent::addStoreFilter($store);
    }

    /**
     * {@inheritdoc}
     */
    public function addWebsiteFilter($websites = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addWebsiteFilter');
        return $pluginInfo ? $this->___callPlugins('addWebsiteFilter', func_get_args(), $pluginInfo) : parent::addWebsiteFilter($websites);
    }

    /**
     * {@inheritdoc}
     */
    public function getLimitationFilters()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimitationFilters');
        return $pluginInfo ? $this->___callPlugins('getLimitationFilters', func_get_args(), $pluginInfo) : parent::getLimitationFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function addCategoryFilter(\Magento\Catalog\Model\Category $category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCategoryFilter');
        return $pluginInfo ? $this->___callPlugins('addCategoryFilter', func_get_args(), $pluginInfo) : parent::addCategoryFilter($category);
    }

    /**
     * {@inheritdoc}
     */
    public function addCategoriesFilter(array $categoriesFilter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCategoriesFilter');
        return $pluginInfo ? $this->___callPlugins('addCategoriesFilter', func_get_args(), $pluginInfo) : parent::addCategoriesFilter($categoriesFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function joinMinimalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'joinMinimalPrice');
        return $pluginInfo ? $this->___callPlugins('joinMinimalPrice', func_get_args(), $pluginInfo) : parent::joinMinimalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxAttributeValue($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxAttributeValue');
        return $pluginInfo ? $this->___callPlugins('getMaxAttributeValue', func_get_args(), $pluginInfo) : parent::getMaxAttributeValue($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeValueCountByRange($attribute, $range)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeValueCountByRange');
        return $pluginInfo ? $this->___callPlugins('getAttributeValueCountByRange', func_get_args(), $pluginInfo) : parent::getAttributeValueCountByRange($attribute, $range);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeValueCount($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeValueCount');
        return $pluginInfo ? $this->___callPlugins('getAttributeValueCount', func_get_args(), $pluginInfo) : parent::getAttributeValueCount($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllAttributeValues($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllAttributeValues');
        return $pluginInfo ? $this->___callPlugins('getAllAttributeValues', func_get_args(), $pluginInfo) : parent::getAllAttributeValues($attribute);
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
    public function getAllIds($limit = null, $offset = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIds');
        return $pluginInfo ? $this->___callPlugins('getAllIds', func_get_args(), $pluginInfo) : parent::getAllIds($limit, $offset);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCountSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCountSelect');
        return $pluginInfo ? $this->___callPlugins('getProductCountSelect', func_get_args(), $pluginInfo) : parent::getProductCountSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function unsProductCountSelect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsProductCountSelect');
        return $pluginInfo ? $this->___callPlugins('unsProductCountSelect', func_get_args(), $pluginInfo) : parent::unsProductCountSelect();
    }

    /**
     * {@inheritdoc}
     */
    public function addCountToCategories($categoryCollection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCountToCategories');
        return $pluginInfo ? $this->___callPlugins('addCountToCategories', func_get_args(), $pluginInfo) : parent::addCountToCategories($categoryCollection);
    }

    /**
     * {@inheritdoc}
     */
    public function getSetIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSetIds');
        return $pluginInfo ? $this->___callPlugins('getSetIds', func_get_args(), $pluginInfo) : parent::getSetIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductTypeIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductTypeIds');
        return $pluginInfo ? $this->___callPlugins('getProductTypeIds', func_get_args(), $pluginInfo) : parent::getProductTypeIds();
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
    public function addUrlRewrite($categoryId = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addUrlRewrite');
        return $pluginInfo ? $this->___callPlugins('addUrlRewrite', func_get_args(), $pluginInfo) : parent::addUrlRewrite($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function addMinimalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMinimalPrice');
        return $pluginInfo ? $this->___callPlugins('addMinimalPrice', func_get_args(), $pluginInfo) : parent::addMinimalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function addFinalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFinalPrice');
        return $pluginInfo ? $this->___callPlugins('addFinalPrice', func_get_args(), $pluginInfo) : parent::addFinalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllIdsCache($resetCache = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllIdsCache');
        return $pluginInfo ? $this->___callPlugins('getAllIdsCache', func_get_args(), $pluginInfo) : parent::getAllIdsCache($resetCache);
    }

    /**
     * {@inheritdoc}
     */
    public function setAllIdsCache($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllIdsCache');
        return $pluginInfo ? $this->___callPlugins('setAllIdsCache', func_get_args(), $pluginInfo) : parent::setAllIdsCache($value);
    }

    /**
     * {@inheritdoc}
     */
    public function addPriceData($customerGroupId = null, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPriceData');
        return $pluginInfo ? $this->___callPlugins('addPriceData', func_get_args(), $pluginInfo) : parent::addPriceData($customerGroupId, $websiteId);
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
    public function addTaxPercents()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTaxPercents');
        return $pluginInfo ? $this->___callPlugins('addTaxPercents', func_get_args(), $pluginInfo) : parent::addTaxPercents();
    }

    /**
     * {@inheritdoc}
     */
    public function requireTaxPercent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'requireTaxPercent');
        return $pluginInfo ? $this->___callPlugins('requireTaxPercent', func_get_args(), $pluginInfo) : parent::requireTaxPercent();
    }

    /**
     * {@inheritdoc}
     */
    public function addOptionsToResult()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOptionsToResult');
        return $pluginInfo ? $this->___callPlugins('addOptionsToResult', func_get_args(), $pluginInfo) : parent::addOptionsToResult();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilterByRequiredOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFilterByRequiredOptions');
        return $pluginInfo ? $this->___callPlugins('addFilterByRequiredOptions', func_get_args(), $pluginInfo) : parent::addFilterByRequiredOptions();
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
    public function applyFrontendPriceLimitations()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyFrontendPriceLimitations');
        return $pluginInfo ? $this->___callPlugins('applyFrontendPriceLimitations', func_get_args(), $pluginInfo) : parent::applyFrontendPriceLimitations();
    }

    /**
     * {@inheritdoc}
     */
    public function addCategoryIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCategoryIds');
        return $pluginInfo ? $this->___callPlugins('addCategoryIds', func_get_args(), $pluginInfo) : parent::addCategoryIds();
    }

    /**
     * {@inheritdoc}
     */
    public function addTierPriceData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTierPriceData');
        return $pluginInfo ? $this->___callPlugins('addTierPriceData', func_get_args(), $pluginInfo) : parent::addTierPriceData();
    }

    /**
     * {@inheritdoc}
     */
    public function addTierPriceDataByGroupId($customerGroupId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTierPriceDataByGroupId');
        return $pluginInfo ? $this->___callPlugins('addTierPriceDataByGroupId', func_get_args(), $pluginInfo) : parent::addTierPriceDataByGroupId($customerGroupId);
    }

    /**
     * {@inheritdoc}
     */
    public function addPriceDataFieldFilter($comparisonFormat, $fields)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addPriceDataFieldFilter');
        return $pluginInfo ? $this->___callPlugins('addPriceDataFieldFilter', func_get_args(), $pluginInfo) : parent::addPriceDataFieldFilter($comparisonFormat, $fields);
    }

    /**
     * {@inheritdoc}
     */
    public function addMediaGalleryData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMediaGalleryData');
        return $pluginInfo ? $this->___callPlugins('addMediaGalleryData', func_get_args(), $pluginInfo) : parent::addMediaGalleryData();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductEntityMetadata()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductEntityMetadata');
        return $pluginInfo ? $this->___callPlugins('getProductEntityMetadata', func_get_args(), $pluginInfo) : parent::getProductEntityMetadata();
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
    public function setOrder($attribute, $dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($attribute, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxPrice');
        return $pluginInfo ? $this->___callPlugins('getMaxPrice', func_get_args(), $pluginInfo) : parent::getMaxPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinPrice');
        return $pluginInfo ? $this->___callPlugins('getMinPrice', func_get_args(), $pluginInfo) : parent::getMinPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceStandardDeviation()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceStandardDeviation');
        return $pluginInfo ? $this->___callPlugins('getPriceStandardDeviation', func_get_args(), $pluginInfo) : parent::getPriceStandardDeviation();
    }

    /**
     * {@inheritdoc}
     */
    public function getPricesCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPricesCount');
        return $pluginInfo ? $this->___callPlugins('getPricesCount', func_get_args(), $pluginInfo) : parent::getPricesCount();
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
    public function addFieldToFilter($attribute, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($attribute, $condition);
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
