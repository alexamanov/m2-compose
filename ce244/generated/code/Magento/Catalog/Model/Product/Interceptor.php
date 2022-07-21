<?php
namespace Magento\Catalog\Model\Product;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product
 */
class Interceptor extends \Magento\Catalog\Model\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductAttributeRepositoryInterface $metadataService, \Magento\Catalog\Model\Product\Url $url, \Magento\Catalog\Model\Product\Link $productLink, \Magento\Catalog\Model\Product\Configuration\Item\OptionFactory $itemOptionFactory, \Magento\CatalogInventory\Api\Data\StockItemInterfaceFactory $stockItemFactory, \Magento\Catalog\Model\Product\OptionFactory $catalogProductOptionFactory, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Catalog\Model\Product\Attribute\Source\Status $catalogProductStatus, \Magento\Catalog\Model\Product\Media\Config $catalogProductMediaConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Module\Manager $moduleManager, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Catalog\Model\ResourceModel\Product $resource, \Magento\Catalog\Model\ResourceModel\Product\Collection $resourceCollection, \Magento\Framework\Data\CollectionFactory $collectionFactory, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\Catalog\Model\Indexer\Product\Flat\Processor $productFlatIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Price\Processor $productPriceIndexerProcessor, \Magento\Catalog\Model\Indexer\Product\Eav\Processor $productEavIndexerProcessor, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\Product\Image\CacheFactory $imageCacheFactory, \Magento\Catalog\Model\ProductLink\CollectionProvider $entityCollectionProvider, \Magento\Catalog\Model\Product\LinkTypeProvider $linkTypeProvider, \Magento\Catalog\Api\Data\ProductLinkInterfaceFactory $productLinkFactory, \Magento\Catalog\Api\Data\ProductLinkExtensionFactory $productLinkExtensionFactory, \Magento\Catalog\Model\Product\Attribute\Backend\Media\EntryConverterPool $mediaGalleryEntryConverterPool, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor, array $data = [], ?\Magento\Eav\Model\Config $config = null, ?\Magento\Catalog\Model\FilterProductCustomAttribute $filterCustomAttribute = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $storeManager, $metadataService, $url, $productLink, $itemOptionFactory, $stockItemFactory, $catalogProductOptionFactory, $catalogProductVisibility, $catalogProductStatus, $catalogProductMediaConfig, $catalogProductType, $moduleManager, $catalogProduct, $resource, $resourceCollection, $collectionFactory, $filesystem, $indexerRegistry, $productFlatIndexerProcessor, $productPriceIndexerProcessor, $productEavIndexerProcessor, $categoryRepository, $imageCacheFactory, $entityCollectionProvider, $linkTypeProvider, $productLinkFactory, $productLinkExtensionFactory, $mediaGalleryEntryConverterPool, $dataObjectHelper, $joinProcessor, $data, $config, $filterCustomAttribute);
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
    public function getUrlModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlModel');
        return $pluginInfo ? $this->___callPlugins('getUrlModel', func_get_args(), $pluginInfo) : parent::getUrlModel();
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
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        return $pluginInfo ? $this->___callPlugins('getPrice', func_get_args(), $pluginInfo) : parent::getPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibility');
        return $pluginInfo ? $this->___callPlugins('getVisibility', func_get_args(), $pluginInfo) : parent::getVisibility();
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
    public function setPriceCalculation($calculate = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPriceCalculation');
        return $pluginInfo ? $this->___callPlugins('setPriceCalculation', func_get_args(), $pluginInfo) : parent::setPriceCalculation($calculate);
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
    public function getStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        return $pluginInfo ? $this->___callPlugins('getStatus', func_get_args(), $pluginInfo) : parent::getStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeInstance');
        return $pluginInfo ? $this->___callPlugins('getTypeInstance', func_get_args(), $pluginInfo) : parent::getTypeInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeInstance($instance)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeInstance');
        return $pluginInfo ? $this->___callPlugins('setTypeInstance', func_get_args(), $pluginInfo) : parent::setTypeInstance($instance);
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLinkInstance');
        return $pluginInfo ? $this->___callPlugins('getLinkInstance', func_get_args(), $pluginInfo) : parent::getLinkInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdBySku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdBySku');
        return $pluginInfo ? $this->___callPlugins('getIdBySku', func_get_args(), $pluginInfo) : parent::getIdBySku($sku);
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
    public function getCategory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategory');
        return $pluginInfo ? $this->___callPlugins('getCategory', func_get_args(), $pluginInfo) : parent::getCategory();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryIds');
        return $pluginInfo ? $this->___callPlugins('getCategoryIds', func_get_args(), $pluginInfo) : parent::getCategoryIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryCollection');
        return $pluginInfo ? $this->___callPlugins('getCategoryCollection', func_get_args(), $pluginInfo) : parent::getCategoryCollection();
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
    public function getStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreIds');
        return $pluginInfo ? $this->___callPlugins('getStoreIds', func_get_args(), $pluginInfo) : parent::getStoreIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes($groupId = null, $skipSuper = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        return $pluginInfo ? $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo) : parent::getAttributes($groupId, $skipSuper);
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
    public function canAffectOptions($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canAffectOptions');
        return $pluginInfo ? $this->___callPlugins('canAffectOptions', func_get_args(), $pluginInfo) : parent::canAffectOptions($value);
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
    public function setQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQty');
        return $pluginInfo ? $this->___callPlugins('setQty', func_get_args(), $pluginInfo) : parent::setQty($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        return $pluginInfo ? $this->___callPlugins('getQty', func_get_args(), $pluginInfo) : parent::getQty();
    }

    /**
     * {@inheritdoc}
     */
    public function priceReindexCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'priceReindexCallback');
        return $pluginInfo ? $this->___callPlugins('priceReindexCallback', func_get_args(), $pluginInfo) : parent::priceReindexCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function eavReindexCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'eavReindexCallback');
        return $pluginInfo ? $this->___callPlugins('eavReindexCallback', func_get_args(), $pluginInfo) : parent::eavReindexCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function isDataChanged()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDataChanged');
        return $pluginInfo ? $this->___callPlugins('isDataChanged', func_get_args(), $pluginInfo) : parent::isDataChanged();
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
    public function cleanCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanCache');
        return $pluginInfo ? $this->___callPlugins('cleanCache', func_get_args(), $pluginInfo) : parent::cleanCache();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceModel');
        return $pluginInfo ? $this->___callPlugins('getPriceModel', func_get_args(), $pluginInfo) : parent::getPriceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceInfo');
        return $pluginInfo ? $this->___callPlugins('getPriceInfo', func_get_args(), $pluginInfo) : parent::getPriceInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getTierPrices()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTierPrices');
        return $pluginInfo ? $this->___callPlugins('getTierPrices', func_get_args(), $pluginInfo) : parent::getTierPrices();
    }

    /**
     * {@inheritdoc}
     */
    public function setTierPrices(?array $tierPrices = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTierPrices');
        return $pluginInfo ? $this->___callPlugins('setTierPrices', func_get_args(), $pluginInfo) : parent::setTierPrices($tierPrices);
    }

    /**
     * {@inheritdoc}
     */
    public function getTierPrice($qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTierPrice');
        return $pluginInfo ? $this->___callPlugins('getTierPrice', func_get_args(), $pluginInfo) : parent::getTierPrice($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormattedPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormattedPrice');
        return $pluginInfo ? $this->___callPlugins('getFormattedPrice', func_get_args(), $pluginInfo) : parent::getFormattedPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatedPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormatedPrice');
        return $pluginInfo ? $this->___callPlugins('getFormatedPrice', func_get_args(), $pluginInfo) : parent::getFormatedPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setFinalPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFinalPrice');
        return $pluginInfo ? $this->___callPlugins('setFinalPrice', func_get_args(), $pluginInfo) : parent::setFinalPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function getFinalPrice($qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFinalPrice');
        return $pluginInfo ? $this->___callPlugins('getFinalPrice', func_get_args(), $pluginInfo) : parent::getFinalPrice($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculatedFinalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCalculatedFinalPrice');
        return $pluginInfo ? $this->___callPlugins('getCalculatedFinalPrice', func_get_args(), $pluginInfo) : parent::getCalculatedFinalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinimalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinimalPrice');
        return $pluginInfo ? $this->___callPlugins('getMinimalPrice', func_get_args(), $pluginInfo) : parent::getMinimalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialPrice');
        return $pluginInfo ? $this->___callPlugins('getSpecialPrice', func_get_args(), $pluginInfo) : parent::getSpecialPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialFromDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialFromDate');
        return $pluginInfo ? $this->___callPlugins('getSpecialFromDate', func_get_args(), $pluginInfo) : parent::getSpecialFromDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecialToDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecialToDate');
        return $pluginInfo ? $this->___callPlugins('getSpecialToDate', func_get_args(), $pluginInfo) : parent::getSpecialToDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProducts');
        return $pluginInfo ? $this->___callPlugins('getRelatedProducts', func_get_args(), $pluginInfo) : parent::getRelatedProducts();
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProductIds');
        return $pluginInfo ? $this->___callPlugins('getRelatedProductIds', func_get_args(), $pluginInfo) : parent::getRelatedProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedProductCollection');
        return $pluginInfo ? $this->___callPlugins('getRelatedProductCollection', func_get_args(), $pluginInfo) : parent::getRelatedProductCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getRelatedLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelatedLinkCollection');
        return $pluginInfo ? $this->___callPlugins('getRelatedLinkCollection', func_get_args(), $pluginInfo) : parent::getRelatedLinkCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProducts');
        return $pluginInfo ? $this->___callPlugins('getUpSellProducts', func_get_args(), $pluginInfo) : parent::getUpSellProducts();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProductIds');
        return $pluginInfo ? $this->___callPlugins('getUpSellProductIds', func_get_args(), $pluginInfo) : parent::getUpSellProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellProductCollection');
        return $pluginInfo ? $this->___callPlugins('getUpSellProductCollection', func_get_args(), $pluginInfo) : parent::getUpSellProductCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpSellLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpSellLinkCollection');
        return $pluginInfo ? $this->___callPlugins('getUpSellLinkCollection', func_get_args(), $pluginInfo) : parent::getUpSellLinkCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProducts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProducts');
        return $pluginInfo ? $this->___callPlugins('getCrossSellProducts', func_get_args(), $pluginInfo) : parent::getCrossSellProducts();
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProductIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProductIds');
        return $pluginInfo ? $this->___callPlugins('getCrossSellProductIds', func_get_args(), $pluginInfo) : parent::getCrossSellProductIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellProductCollection');
        return $pluginInfo ? $this->___callPlugins('getCrossSellProductCollection', func_get_args(), $pluginInfo) : parent::getCrossSellProductCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCrossSellLinkCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCrossSellLinkCollection');
        return $pluginInfo ? $this->___callPlugins('getCrossSellLinkCollection', func_get_args(), $pluginInfo) : parent::getCrossSellLinkCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductLinks()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductLinks');
        return $pluginInfo ? $this->___callPlugins('getProductLinks', func_get_args(), $pluginInfo) : parent::getProductLinks();
    }

    /**
     * {@inheritdoc}
     */
    public function setProductLinks(?array $links = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductLinks');
        return $pluginInfo ? $this->___callPlugins('setProductLinks', func_get_args(), $pluginInfo) : parent::setProductLinks($links);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributes');
        return $pluginInfo ? $this->___callPlugins('getMediaAttributes', func_get_args(), $pluginInfo) : parent::getMediaAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributeValues()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributeValues');
        return $pluginInfo ? $this->___callPlugins('getMediaAttributeValues', func_get_args(), $pluginInfo) : parent::getMediaAttributeValues();
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaGalleryImages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaGalleryImages');
        return $pluginInfo ? $this->___callPlugins('getMediaGalleryImages', func_get_args(), $pluginInfo) : parent::getMediaGalleryImages();
    }

    /**
     * {@inheritdoc}
     */
    public function hasGalleryAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasGalleryAttribute');
        return $pluginInfo ? $this->___callPlugins('hasGalleryAttribute', func_get_args(), $pluginInfo) : parent::hasGalleryAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function addImageToMediaGallery($file, $mediaAttribute = null, $move = false, $exclude = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addImageToMediaGallery');
        return $pluginInfo ? $this->___callPlugins('addImageToMediaGallery', func_get_args(), $pluginInfo) : parent::addImageToMediaGallery($file, $mediaAttribute, $move, $exclude);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaConfig');
        return $pluginInfo ? $this->___callPlugins('getMediaConfig', func_get_args(), $pluginInfo) : parent::getMediaConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleInCatalogStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleInCatalogStatuses');
        return $pluginInfo ? $this->___callPlugins('getVisibleInCatalogStatuses', func_get_args(), $pluginInfo) : parent::getVisibleInCatalogStatuses();
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleStatuses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleStatuses');
        return $pluginInfo ? $this->___callPlugins('getVisibleStatuses', func_get_args(), $pluginInfo) : parent::getVisibleStatuses();
    }

    /**
     * {@inheritdoc}
     */
    public function isVisibleInCatalog()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisibleInCatalog');
        return $pluginInfo ? $this->___callPlugins('isVisibleInCatalog', func_get_args(), $pluginInfo) : parent::isVisibleInCatalog();
    }

    /**
     * {@inheritdoc}
     */
    public function getVisibleInSiteVisibilities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVisibleInSiteVisibilities');
        return $pluginInfo ? $this->___callPlugins('getVisibleInSiteVisibilities', func_get_args(), $pluginInfo) : parent::getVisibleInSiteVisibilities();
    }

    /**
     * {@inheritdoc}
     */
    public function isVisibleInSiteVisibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVisibleInSiteVisibility');
        return $pluginInfo ? $this->___callPlugins('isVisibleInSiteVisibility', func_get_args(), $pluginInfo) : parent::isVisibleInSiteVisibility();
    }

    /**
     * {@inheritdoc}
     */
    public function isDuplicable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDuplicable');
        return $pluginInfo ? $this->___callPlugins('isDuplicable', func_get_args(), $pluginInfo) : parent::isDuplicable();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDuplicable($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDuplicable');
        return $pluginInfo ? $this->___callPlugins('setIsDuplicable', func_get_args(), $pluginInfo) : parent::setIsDuplicable($value);
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        return $pluginInfo ? $this->___callPlugins('isSalable', func_get_args(), $pluginInfo) : parent::isSalable();
    }

    /**
     * {@inheritdoc}
     */
    public function isAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        return $pluginInfo ? $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo) : parent::isAvailable();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsSalable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsSalable');
        return $pluginInfo ? $this->___callPlugins('getIsSalable', func_get_args(), $pluginInfo) : parent::getIsSalable();
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVirtual');
        return $pluginInfo ? $this->___callPlugins('isVirtual', func_get_args(), $pluginInfo) : parent::isVirtual();
    }

    /**
     * {@inheritdoc}
     */
    public function isSaleable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaleable');
        return $pluginInfo ? $this->___callPlugins('isSaleable', func_get_args(), $pluginInfo) : parent::isSaleable();
    }

    /**
     * {@inheritdoc}
     */
    public function isInStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInStock');
        return $pluginInfo ? $this->___callPlugins('isInStock', func_get_args(), $pluginInfo) : parent::isInStock();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeText($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeText');
        return $pluginInfo ? $this->___callPlugins('getAttributeText', func_get_args(), $pluginInfo) : parent::getAttributeText($attributeCode);
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
    public function getProductUrl($useSid = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductUrl');
        return $pluginInfo ? $this->___callPlugins('getProductUrl', func_get_args(), $pluginInfo) : parent::getProductUrl($useSid);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrlInStore($params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrlInStore');
        return $pluginInfo ? $this->___callPlugins('getUrlInStore', func_get_args(), $pluginInfo) : parent::getUrlInStore($params);
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
    public function addAttributeUpdate($code, $value, $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeUpdate');
        return $pluginInfo ? $this->___callPlugins('addAttributeUpdate', func_get_args(), $pluginInfo) : parent::addAttributeUpdate($code, $value, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($arrAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function fromArray(array $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fromArray');
        return $pluginInfo ? $this->___callPlugins('fromArray', func_get_args(), $pluginInfo) : parent::fromArray($data);
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
    public function getGiftMessageAvailable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGiftMessageAvailable');
        return $pluginInfo ? $this->___callPlugins('getGiftMessageAvailable', func_get_args(), $pluginInfo) : parent::getGiftMessageAvailable();
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isComposite');
        return $pluginInfo ? $this->___callPlugins('isComposite', func_get_args(), $pluginInfo) : parent::isComposite();
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canConfigure');
        return $pluginInfo ? $this->___callPlugins('canConfigure', func_get_args(), $pluginInfo) : parent::canConfigure();
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        return $pluginInfo ? $this->___callPlugins('getSku', func_get_args(), $pluginInfo) : parent::getSku();
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        return $pluginInfo ? $this->___callPlugins('getWeight', func_get_args(), $pluginInfo) : parent::getWeight();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionInstance');
        return $pluginInfo ? $this->___callPlugins('getOptionInstance', func_get_args(), $pluginInfo) : parent::getOptionInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function addOption(\Magento\Catalog\Model\Product\Option $option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOption');
        return $pluginInfo ? $this->___callPlugins('addOption', func_get_args(), $pluginInfo) : parent::addOption($option);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionById($optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionById');
        return $pluginInfo ? $this->___callPlugins('getOptionById', func_get_args(), $pluginInfo) : parent::getOptionById($optionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOptionsCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOptionsCollection');
        return $pluginInfo ? $this->___callPlugins('getProductOptionsCollection', func_get_args(), $pluginInfo) : parent::getProductOptionsCollection();
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
    public function getIsVirtual()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsVirtual');
        return $pluginInfo ? $this->___callPlugins('getIsVirtual', func_get_args(), $pluginInfo) : parent::getIsVirtual();
    }

    /**
     * {@inheritdoc}
     */
    public function addCustomOption($code, $value, $product = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCustomOption');
        return $pluginInfo ? $this->___callPlugins('addCustomOption', func_get_args(), $pluginInfo) : parent::addCustomOption($code, $value, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomOptions(array $options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomOptions');
        return $pluginInfo ? $this->___callPlugins('setCustomOptions', func_get_args(), $pluginInfo) : parent::setCustomOptions($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomOptions');
        return $pluginInfo ? $this->___callPlugins('getCustomOptions', func_get_args(), $pluginInfo) : parent::getCustomOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomOption($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomOption');
        return $pluginInfo ? $this->___callPlugins('getCustomOption', func_get_args(), $pluginInfo) : parent::getCustomOption($code);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasCustomOptions');
        return $pluginInfo ? $this->___callPlugins('hasCustomOptions', func_get_args(), $pluginInfo) : parent::hasCustomOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function canBeShowInCategory($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canBeShowInCategory');
        return $pluginInfo ? $this->___callPlugins('canBeShowInCategory', func_get_args(), $pluginInfo) : parent::canBeShowInCategory($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableInCategories()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableInCategories');
        return $pluginInfo ? $this->___callPlugins('getAvailableInCategories', func_get_args(), $pluginInfo) : parent::getAvailableInCategories();
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
    public function reset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reset');
        return $pluginInfo ? $this->___callPlugins('reset', func_get_args(), $pluginInfo) : parent::reset();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheIdTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheIdTags');
        return $pluginInfo ? $this->___callPlugins('getCacheIdTags', func_get_args(), $pluginInfo) : parent::getCacheIdTags();
    }

    /**
     * {@inheritdoc}
     */
    public function isProductsHasSku(array $productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isProductsHasSku');
        return $pluginInfo ? $this->___callPlugins('isProductsHasSku', func_get_args(), $pluginInfo) : parent::isProductsHasSku($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest(\Magento\Framework\DataObject $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBuyRequest');
        return $pluginInfo ? $this->___callPlugins('processBuyRequest', func_get_args(), $pluginInfo) : parent::processBuyRequest($buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function getPreconfiguredValues()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPreconfiguredValues');
        return $pluginInfo ? $this->___callPlugins('getPreconfiguredValues', func_get_args(), $pluginInfo) : parent::getPreconfiguredValues();
    }

    /**
     * {@inheritdoc}
     */
    public function prepareCustomOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareCustomOptions');
        return $pluginInfo ? $this->___callPlugins('prepareCustomOptions', func_get_args(), $pluginInfo) : parent::prepareCustomOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductEntitiesInfo($columns = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductEntitiesInfo');
        return $pluginInfo ? $this->___callPlugins('getProductEntitiesInfo', func_get_args(), $pluginInfo) : parent::getProductEntitiesInfo($columns);
    }

    /**
     * {@inheritdoc}
     */
    public function isDisabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDisabled');
        return $pluginInfo ? $this->___callPlugins('isDisabled', func_get_args(), $pluginInfo) : parent::isDisabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getImage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage();
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
    public function reloadPriceInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reloadPriceInfo');
        return $pluginInfo ? $this->___callPlugins('reloadPriceInfo', func_get_args(), $pluginInfo) : parent::reloadPriceInfo();
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
    public function setSku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSku');
        return $pluginInfo ? $this->___callPlugins('setSku', func_get_args(), $pluginInfo) : parent::setSku($sku);
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
    public function setStoreId($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributeSetId($attributeSetId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttributeSetId');
        return $pluginInfo ? $this->___callPlugins('setAttributeSetId', func_get_args(), $pluginInfo) : parent::setAttributeSetId($attributeSetId);
    }

    /**
     * {@inheritdoc}
     */
    public function setPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrice');
        return $pluginInfo ? $this->___callPlugins('setPrice', func_get_args(), $pluginInfo) : parent::setPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatus');
        return $pluginInfo ? $this->___callPlugins('setStatus', func_get_args(), $pluginInfo) : parent::setStatus($status);
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
    public function setCreatedAt($createdAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreatedAt');
        return $pluginInfo ? $this->___callPlugins('setCreatedAt', func_get_args(), $pluginInfo) : parent::setCreatedAt($createdAt);
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
    public function setWeight($weight)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWeight');
        return $pluginInfo ? $this->___callPlugins('setWeight', func_get_args(), $pluginInfo) : parent::setWeight($weight);
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        return $pluginInfo ? $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo) : parent::setTypeId($typeId);
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
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\ProductExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaGalleryEntries()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaGalleryEntries');
        return $pluginInfo ? $this->___callPlugins('getMediaGalleryEntries', func_get_args(), $pluginInfo) : parent::getMediaGalleryEntries();
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaGalleryEntries(?array $mediaGalleryEntries = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaGalleryEntries');
        return $pluginInfo ? $this->___callPlugins('setMediaGalleryEntries', func_get_args(), $pluginInfo) : parent::setMediaGalleryEntries($mediaGalleryEntries);
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
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setAssociatedProductIds(array $productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAssociatedProductIds');
        return $pluginInfo ? $this->___callPlugins('setAssociatedProductIds', func_get_args(), $pluginInfo) : parent::setAssociatedProductIds($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantityAndStockStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuantityAndStockStatus');
        return $pluginInfo ? $this->___callPlugins('getQuantityAndStockStatus', func_get_args(), $pluginInfo) : parent::getQuantityAndStockStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuantityAndStockStatus($quantityAndStockStatusData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuantityAndStockStatus');
        return $pluginInfo ? $this->___callPlugins('setQuantityAndStockStatus', func_get_args(), $pluginInfo) : parent::setQuantityAndStockStatus($quantityAndStockStatusData);
    }

    /**
     * {@inheritdoc}
     */
    public function getStockData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockData');
        return $pluginInfo ? $this->___callPlugins('getStockData', func_get_args(), $pluginInfo) : parent::getStockData();
    }

    /**
     * {@inheritdoc}
     */
    public function setStockData($stockData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStockData');
        return $pluginInfo ? $this->___callPlugins('setStockData', func_get_args(), $pluginInfo) : parent::setStockData($stockData);
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
