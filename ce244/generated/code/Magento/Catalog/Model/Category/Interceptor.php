<?php
namespace Magento\Catalog\Model\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category
 */
class Interceptor extends \Magento\Catalog\Model\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\CategoryAttributeRepositoryInterface $metadataService, \Magento\Catalog\Model\ResourceModel\Category\Tree $categoryTreeResource, \Magento\Catalog\Model\ResourceModel\Category\TreeFactory $categoryTreeFactory, \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeCollectionFactory, \Magento\Framework\UrlInterface $url, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Framework\Filter\FilterManager $filter, \Magento\Catalog\Model\Indexer\Category\Flat\State $flatState, \Magento\CatalogUrlRewrite\Model\CategoryUrlPathGenerator $categoryUrlPathGenerator, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $storeManager, $metadataService, $categoryTreeResource, $categoryTreeFactory, $storeCollectionFactory, $url, $productCollectionFactory, $catalogConfig, $filter, $flatState, $categoryUrlPathGenerator, $urlFinder, $indexerRegistry, $categoryRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getUseFlatResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseFlatResource');
        return $pluginInfo ? $this->___callPlugins('getUseFlatResource', func_get_args(), $pluginInfo) : parent::getUseFlatResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlInstance');
        return $pluginInfo ? $this->___callPlugins('getUrlInstance', func_get_args(), $pluginInfo) : parent::getUrlInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeModel');
        return $pluginInfo ? $this->___callPlugins('getTreeModel', func_get_args(), $pluginInfo) : parent::getTreeModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getTreeModelInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTreeModelInstance');
        return $pluginInfo ? $this->___callPlugins('getTreeModelInstance', func_get_args(), $pluginInfo) : parent::getTreeModelInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function move($parentId, $afterCategoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'move');
        return $pluginInfo ? $this->___callPlugins('move', func_get_args(), $pluginInfo) : parent::move($parentId, $afterCategoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSetId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultAttributeSetId');
        return $pluginInfo ? $this->___callPlugins('getDefaultAttributeSetId', func_get_args(), $pluginInfo) : parent::getDefaultAttributeSetId();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCollection');
        return $pluginInfo ? $this->___callPlugins('getProductCollection', func_get_args(), $pluginInfo) : parent::getProductCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($noDesignAttributes = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        return $pluginInfo ? $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo) : parent::getAttributes($noDesignAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsPosition()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsPosition');
        return $pluginInfo ? $this->___callPlugins('getProductsPosition', func_get_args(), $pluginInfo) : parent::getProductsPosition();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreIds');
        return $pluginInfo ? $this->___callPlugins('getStoreIds', func_get_args(), $pluginInfo) : parent::getStoreIds();
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
    public function setStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryIdUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryIdUrl');
        return $pluginInfo ? $this->___callPlugins('getCategoryIdUrl', func_get_args(), $pluginInfo) : parent::getCategoryIdUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function formatUrlKey($str)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatUrlKey');
        return $pluginInfo ? $this->___callPlugins('formatUrlKey', func_get_args(), $pluginInfo) : parent::formatUrlKey($str);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageUrl($attributeCode = 'image')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageUrl');
        return $pluginInfo ? $this->___callPlugins('getImageUrl', func_get_args(), $pluginInfo) : parent::getImageUrl($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategory');
        return $pluginInfo ? $this->___callPlugins('getParentCategory', func_get_args(), $pluginInfo) : parent::getParentCategory();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentId');
        return $pluginInfo ? $this->___callPlugins('getParentId', func_get_args(), $pluginInfo) : parent::getParentId();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentIds');
        return $pluginInfo ? $this->___callPlugins('getParentIds', func_get_args(), $pluginInfo) : parent::getParentIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomDesignDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomDesignDate');
        return $pluginInfo ? $this->___callPlugins('getCustomDesignDate', func_get_args(), $pluginInfo) : parent::getCustomDesignDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getDesignAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDesignAttributes');
        return $pluginInfo ? $this->___callPlugins('getDesignAttributes', func_get_args(), $pluginInfo) : parent::getDesignAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllChildren($asArray = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllChildren');
        return $pluginInfo ? $this->___callPlugins('getAllChildren', func_get_args(), $pluginInfo) : parent::getAllChildren($asArray);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($recursive = false, $isActive = true, $sortByPosition = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren($recursive, $isActive, $sortByPosition);
    }

    /**
     * {@inheritdoc}
     */
    public function getPathInStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathInStore');
        return $pluginInfo ? $this->___callPlugins('getPathInStore', func_get_args(), $pluginInfo) : parent::getPathInStore();
    }

    /**
     * {@inheritdoc}
     */
    public function checkId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkId');
        return $pluginInfo ? $this->___callPlugins('checkId', func_get_args(), $pluginInfo) : parent::checkId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getPathIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPathIds');
        return $pluginInfo ? $this->___callPlugins('getPathIds', func_get_args(), $pluginInfo) : parent::getPathIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getLevel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLevel');
        return $pluginInfo ? $this->___callPlugins('getLevel', func_get_args(), $pluginInfo) : parent::getLevel();
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
    public function hasChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasChildren');
        return $pluginInfo ? $this->___callPlugins('hasChildren', func_get_args(), $pluginInfo) : parent::hasChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequestPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequestPath');
        return $pluginInfo ? $this->___callPlugins('getRequestPath', func_get_args(), $pluginInfo) : parent::getRequestPath();
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
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function getAnchorsAbove()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnchorsAbove');
        return $pluginInfo ? $this->___callPlugins('getAnchorsAbove', func_get_args(), $pluginInfo) : parent::getAnchorsAbove();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCount');
        return $pluginInfo ? $this->___callPlugins('getProductCount', func_get_args(), $pluginInfo) : parent::getProductCount();
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
    public function getParentCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentCategories');
        return $pluginInfo ? $this->___callPlugins('getParentCategories', func_get_args(), $pluginInfo) : parent::getParentCategories();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCategories');
        return $pluginInfo ? $this->___callPlugins('getChildrenCategories', func_get_args(), $pluginInfo) : parent::getChildrenCategories();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDesignCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentDesignCategory');
        return $pluginInfo ? $this->___callPlugins('getParentDesignCategory', func_get_args(), $pluginInfo) : parent::getParentDesignCategory();
    }

    /**
     * {@inheritdoc}
     */
    public function isInRootCategoryList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInRootCategoryList');
        return $pluginInfo ? $this->___callPlugins('isInRootCategoryList', func_get_args(), $pluginInfo) : parent::isInRootCategoryList();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableSortBy');
        return $pluginInfo ? $this->___callPlugins('getAvailableSortBy', func_get_args(), $pluginInfo) : parent::getAvailableSortBy();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableSortByOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableSortByOptions');
        return $pluginInfo ? $this->___callPlugins('getAvailableSortByOptions', func_get_args(), $pluginInfo) : parent::getAvailableSortByOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultSortBy()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultSortBy');
        return $pluginInfo ? $this->___callPlugins('getDefaultSortBy', func_get_args(), $pluginInfo) : parent::getDefaultSortBy();
    }

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate();
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
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        return $pluginInfo ? $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo) : parent::getCacheTags();
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
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
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
    public function getPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPath');
        return $pluginInfo ? $this->___callPlugins('getPath', func_get_args(), $pluginInfo) : parent::getPath();
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
    public function getChildrenCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenCount');
        return $pluginInfo ? $this->___callPlugins('getChildrenCount', func_get_args(), $pluginInfo) : parent::getChildrenCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedAt');
        return $pluginInfo ? $this->___callPlugins('getCreatedAt', func_get_args(), $pluginInfo) : parent::getCreatedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('getUpdatedAt', func_get_args(), $pluginInfo) : parent::getUpdatedAt();
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
    public function getCategoryId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryId');
        return $pluginInfo ? $this->___callPlugins('getCategoryId', func_get_args(), $pluginInfo) : parent::getCategoryId();
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayMode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDisplayMode');
        return $pluginInfo ? $this->___callPlugins('getDisplayMode', func_get_args(), $pluginInfo) : parent::getDisplayMode();
    }

    /**
     * {@inheritdoc}
     */
    public function getIncludeInMenu()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncludeInMenu');
        return $pluginInfo ? $this->___callPlugins('getIncludeInMenu', func_get_args(), $pluginInfo) : parent::getIncludeInMenu();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlKey');
        return $pluginInfo ? $this->___callPlugins('getUrlKey', func_get_args(), $pluginInfo) : parent::getUrlKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenData');
        return $pluginInfo ? $this->___callPlugins('getChildrenData', func_get_args(), $pluginInfo) : parent::getChildrenData();
    }

    /**
     * {@inheritdoc}
     */
    public function __toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__toArray');
        return $pluginInfo ? $this->___callPlugins('__toArray', func_get_args(), $pluginInfo) : parent::__toArray();
    }

    /**
     * {@inheritdoc}
     */
    public function toFlatArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toFlatArray');
        return $pluginInfo ? $this->___callPlugins('toFlatArray', func_get_args(), $pluginInfo) : parent::toFlatArray();
    }

    /**
     * {@inheritdoc}
     */
    public function setParentId($parentId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentId');
        return $pluginInfo ? $this->___callPlugins('setParentId', func_get_args(), $pluginInfo) : parent::setParentId($parentId);
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
    public function setIsActive($isActive)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsActive');
        return $pluginInfo ? $this->___callPlugins('setIsActive', func_get_args(), $pluginInfo) : parent::setIsActive($isActive);
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
    public function setLevel($level)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLevel');
        return $pluginInfo ? $this->___callPlugins('setLevel', func_get_args(), $pluginInfo) : parent::setLevel($level);
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('setUpdatedAt', func_get_args(), $pluginInfo) : parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreatedAt');
        return $pluginInfo ? $this->___callPlugins('setCreatedAt', func_get_args(), $pluginInfo) : parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritdoc}
     */
    public function setPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPath');
        return $pluginInfo ? $this->___callPlugins('setPath', func_get_args(), $pluginInfo) : parent::setPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function setAvailableSortBy($availableSortBy)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAvailableSortBy');
        return $pluginInfo ? $this->___callPlugins('setAvailableSortBy', func_get_args(), $pluginInfo) : parent::setAvailableSortBy($availableSortBy);
    }

    /**
     * {@inheritdoc}
     */
    public function setIncludeInMenu($includeInMenu)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIncludeInMenu');
        return $pluginInfo ? $this->___callPlugins('setIncludeInMenu', func_get_args(), $pluginInfo) : parent::setIncludeInMenu($includeInMenu);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductCount($productCount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductCount');
        return $pluginInfo ? $this->___callPlugins('setProductCount', func_get_args(), $pluginInfo) : parent::setProductCount($productCount);
    }

    /**
     * {@inheritdoc}
     */
    public function setChildrenData(?array $childrenData = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setChildrenData');
        return $pluginInfo ? $this->___callPlugins('setChildrenData', func_get_args(), $pluginInfo) : parent::setChildrenData($childrenData);
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
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function lockAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lockAttribute');
        return $pluginInfo ? $this->___callPlugins('lockAttribute', func_get_args(), $pluginInfo) : parent::lockAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function unlockAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unlockAttribute');
        return $pluginInfo ? $this->___callPlugins('unlockAttribute', func_get_args(), $pluginInfo) : parent::unlockAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function unlockAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unlockAttributes');
        return $pluginInfo ? $this->___callPlugins('unlockAttributes', func_get_args(), $pluginInfo) : parent::unlockAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getLockedAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLockedAttributes');
        return $pluginInfo ? $this->___callPlugins('getLockedAttributes', func_get_args(), $pluginInfo) : parent::getLockedAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function hasLockedAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasLockedAttributes');
        return $pluginInfo ? $this->___callPlugins('hasLockedAttributes', func_get_args(), $pluginInfo) : parent::hasLockedAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function isLockedAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLockedAttribute');
        return $pluginInfo ? $this->___callPlugins('isLockedAttribute', func_get_args(), $pluginInfo) : parent::isLockedAttribute($attributeCode);
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
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        return $pluginInfo ? $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo) : parent::getResourceCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function loadByAttribute($attribute, $value, $additionalAttributes = '*')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByAttribute');
        return $pluginInfo ? $this->___callPlugins('loadByAttribute', func_get_args(), $pluginInfo) : parent::loadByAttribute($attribute, $value, $additionalAttributes);
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
    public function getWebsiteStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteStoreIds');
        return $pluginInfo ? $this->___callPlugins('getWebsiteStoreIds', func_get_args(), $pluginInfo) : parent::getWebsiteStoreIds();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeDefaultValue($attributeCode, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeDefaultValue');
        return $pluginInfo ? $this->___callPlugins('setAttributeDefaultValue', func_get_args(), $pluginInfo) : parent::setAttributeDefaultValue($attributeCode, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeDefaultValue($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeDefaultValue');
        return $pluginInfo ? $this->___callPlugins('getAttributeDefaultValue', func_get_args(), $pluginInfo) : parent::getAttributeDefaultValue($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setExistsStoreValueFlag($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExistsStoreValueFlag');
        return $pluginInfo ? $this->___callPlugins('setExistsStoreValueFlag', func_get_args(), $pluginInfo) : parent::setExistsStoreValueFlag($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getExistsStoreValueFlag($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExistsStoreValueFlag');
        return $pluginInfo ? $this->___callPlugins('getExistsStoreValueFlag', func_get_args(), $pluginInfo) : parent::getExistsStoreValueFlag($attributeCode);
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
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
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
