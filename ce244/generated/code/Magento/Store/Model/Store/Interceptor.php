<?php
namespace Magento\Store\Model\Store;

/**
 * Interceptor class for @see \Magento\Store\Model\Store
 */
class Interceptor extends \Magento\Store\Model\Store implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Store\Model\ResourceModel\Store $resource, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Framework\App\Cache\Type\Config $configCacheType, \Magento\Framework\UrlInterface $url, \Magento\Framework\App\RequestInterface $request, \Magento\Config\Model\ResourceModel\Config\Data $configDataResource, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\Config\ReinitableConfigInterface $config, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\App\Http\Context $httpContext, \Magento\Framework\Session\SessionManagerInterface $session, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Store\Model\Information $information, $currencyInstalled, \Magento\Store\Api\GroupRepositoryInterface $groupRepository, \Magento\Store\Api\WebsiteRepositoryInterface $websiteRepository, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, $isCustomEntryPoint = false, array $data = [], ?\Magento\Framework\Event\ManagerInterface $eventManager = null, ?\Magento\Framework\MessageQueue\PoisonPill\PoisonPillPutInterface $pillPut = null, ?\Magento\Store\Model\Validation\StoreValidator $modelValidator = null, ?\Magento\Framework\Url\ModifierInterface $urlModifier = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $resource, $coreFileStorageDatabase, $configCacheType, $url, $request, $configDataResource, $filesystem, $config, $storeManager, $sidResolver, $httpContext, $session, $currencyFactory, $information, $currencyInstalled, $groupRepository, $websiteRepository, $resourceCollection, $isCustomEntryPoint, $data, $eventManager, $pillPut, $modelValidator, $urlModifier);
    }

    /**
     * {@inheritdoc}
     */
    public function load($key, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($key, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCode');
        return $pluginInfo ? $this->___callPlugins('getCode', func_get_args(), $pluginInfo) : parent::getCode();
    }

    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCode');
        return $pluginInfo ? $this->___callPlugins('setCode', func_get_args(), $pluginInfo) : parent::setCode($code);
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
    public function getConfig($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        return $pluginInfo ? $this->___callPlugins('getConfig', func_get_args(), $pluginInfo) : parent::getConfig($path);
    }

    /**
     * {@inheritdoc}
     */
    public function setWebsite(\Magento\Store\Model\Website $website)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWebsite');
        return $pluginInfo ? $this->___callPlugins('setWebsite', func_get_args(), $pluginInfo) : parent::setWebsite($website);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsite()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsite');
        return $pluginInfo ? $this->___callPlugins('getWebsite', func_get_args(), $pluginInfo) : parent::getWebsite();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUrl');
        return $pluginInfo ? $this->___callPlugins('getUrl', func_get_args(), $pluginInfo) : parent::getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl($type = 'link', $secure = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseUrl');
        return $pluginInfo ? $this->___callPlugins('getBaseUrl', func_get_args(), $pluginInfo) : parent::getBaseUrl($type, $secure);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseMediaDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseMediaDir');
        return $pluginInfo ? $this->___callPlugins('getBaseMediaDir', func_get_args(), $pluginInfo) : parent::getBaseMediaDir();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseStaticDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseStaticDir');
        return $pluginInfo ? $this->___callPlugins('getBaseStaticDir', func_get_args(), $pluginInfo) : parent::getBaseStaticDir();
    }

    /**
     * {@inheritdoc}
     */
    public function isUseStoreInUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isUseStoreInUrl');
        return $pluginInfo ? $this->___callPlugins('isUseStoreInUrl', func_get_args(), $pluginInfo) : parent::isUseStoreInUrl();
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
    public function isFrontUrlSecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFrontUrlSecure');
        return $pluginInfo ? $this->___callPlugins('isFrontUrlSecure', func_get_args(), $pluginInfo) : parent::isFrontUrlSecure();
    }

    /**
     * {@inheritdoc}
     */
    public function isUrlSecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isUrlSecure');
        return $pluginInfo ? $this->___callPlugins('isUrlSecure', func_get_args(), $pluginInfo) : parent::isUrlSecure();
    }

    /**
     * {@inheritdoc}
     */
    public function isCurrentlySecure()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCurrentlySecure');
        return $pluginInfo ? $this->___callPlugins('isCurrentlySecure', func_get_args(), $pluginInfo) : parent::isCurrentlySecure();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getBaseCurrencyCode', func_get_args(), $pluginInfo) : parent::getBaseCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCurrency()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCurrency');
        return $pluginInfo ? $this->___callPlugins('getBaseCurrency', func_get_args(), $pluginInfo) : parent::getBaseCurrency();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getDefaultCurrencyCode', func_get_args(), $pluginInfo) : parent::getDefaultCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultCurrency()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultCurrency');
        return $pluginInfo ? $this->___callPlugins('getDefaultCurrency', func_get_args(), $pluginInfo) : parent::getDefaultCurrency();
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrentCurrencyCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCurrentCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('setCurrentCurrencyCode', func_get_args(), $pluginInfo) : parent::setCurrentCurrencyCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getCurrentCurrencyCode', func_get_args(), $pluginInfo) : parent::getCurrentCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableCurrencyCodes($skipBaseNotAllowed = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableCurrencyCodes');
        return $pluginInfo ? $this->___callPlugins('getAvailableCurrencyCodes', func_get_args(), $pluginInfo) : parent::getAvailableCurrencyCodes($skipBaseNotAllowed);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedCurrencies()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedCurrencies');
        return $pluginInfo ? $this->___callPlugins('getAllowedCurrencies', func_get_args(), $pluginInfo) : parent::getAllowedCurrencies();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCurrency()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentCurrency');
        return $pluginInfo ? $this->___callPlugins('getCurrentCurrency', func_get_args(), $pluginInfo) : parent::getCurrentCurrency();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCurrencyRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentCurrencyRate');
        return $pluginInfo ? $this->___callPlugins('getCurrentCurrencyRate', func_get_args(), $pluginInfo) : parent::getCurrentCurrencyRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getRootCategoryId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRootCategoryId');
        return $pluginInfo ? $this->___callPlugins('getRootCategoryId', func_get_args(), $pluginInfo) : parent::getRootCategoryId();
    }

    /**
     * {@inheritdoc}
     */
    public function setGroup(\Magento\Store\Model\Group $group)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGroup');
        return $pluginInfo ? $this->___callPlugins('setGroup', func_get_args(), $pluginInfo) : parent::setGroup($group);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroup()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroup');
        return $pluginInfo ? $this->___callPlugins('getGroup', func_get_args(), $pluginInfo) : parent::getGroup();
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteId');
        return $pluginInfo ? $this->___callPlugins('getWebsiteId', func_get_args(), $pluginInfo) : parent::getWebsiteId();
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
    public function setWebsiteId($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWebsiteId');
        return $pluginInfo ? $this->___callPlugins('setWebsiteId', func_get_args(), $pluginInfo) : parent::setWebsiteId($websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupId');
        return $pluginInfo ? $this->___callPlugins('getGroupId', func_get_args(), $pluginInfo) : parent::getGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreGroupId');
        return $pluginInfo ? $this->___callPlugins('getStoreGroupId', func_get_args(), $pluginInfo) : parent::getStoreGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreGroupId($storeGroupId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreGroupId');
        return $pluginInfo ? $this->___callPlugins('setStoreGroupId', func_get_args(), $pluginInfo) : parent::setStoreGroupId($storeGroupId);
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
    public function getDefaultGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultGroupId');
        return $pluginInfo ? $this->___callPlugins('getDefaultGroupId', func_get_args(), $pluginInfo) : parent::getDefaultGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function isCanDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCanDelete');
        return $pluginInfo ? $this->___callPlugins('isCanDelete', func_get_args(), $pluginInfo) : parent::isCanDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function isDefault()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDefault');
        return $pluginInfo ? $this->___callPlugins('isDefault', func_get_args(), $pluginInfo) : parent::isDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentUrl($fromStore = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentUrl');
        return $pluginInfo ? $this->___callPlugins('getCurrentUrl', func_get_args(), $pluginInfo) : parent::getCurrentUrl($fromStore);
    }

    /**
     * {@inheritdoc}
     */
    public function isActive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isActive');
        return $pluginInfo ? $this->___callPlugins('isActive', func_get_args(), $pluginInfo) : parent::isActive();
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
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function resetConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetConfig');
        return $pluginInfo ? $this->___callPlugins('resetConfig', func_get_args(), $pluginInfo) : parent::resetConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function isReadOnly($value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReadOnly');
        return $pluginInfo ? $this->___callPlugins('isReadOnly', func_get_args(), $pluginInfo) : parent::isReadOnly($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getFrontendName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFrontendName');
        return $pluginInfo ? $this->___callPlugins('getFrontendName', func_get_args(), $pluginInfo) : parent::getFrontendName();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormattedAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormattedAddress');
        return $pluginInfo ? $this->___callPlugins('getFormattedAddress', func_get_args(), $pluginInfo) : parent::getFormattedAddress();
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
    public function getStorePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStorePath');
        return $pluginInfo ? $this->___callPlugins('getStorePath', func_get_args(), $pluginInfo) : parent::getStorePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getScopeType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScopeType');
        return $pluginInfo ? $this->___callPlugins('getScopeType', func_get_args(), $pluginInfo) : parent::getScopeType();
    }

    /**
     * {@inheritdoc}
     */
    public function getScopeTypeName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getScopeTypeName');
        return $pluginInfo ? $this->___callPlugins('getScopeTypeName', func_get_args(), $pluginInfo) : parent::getScopeTypeName();
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
    public function setExtensionAttributes(\Magento\Store\Api\Data\StoreExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
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
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
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
