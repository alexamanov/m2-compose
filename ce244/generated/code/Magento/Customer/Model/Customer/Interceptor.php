<?php
namespace Magento\Customer\Model\Customer;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer
 */
class Interceptor extends \Magento\Customer\Model\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\Config $config, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Model\ResourceModel\Customer $resource, \Magento\Customer\Model\Config\Share $configShare, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Customer\Model\ResourceModel\Address\CollectionFactory $addressesFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Customer\Api\CustomerMetadataInterface $metadataService, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null, ?\Magento\Framework\Math\Random $mathRandom = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $config, $scopeConfig, $resource, $configShare, $addressFactory, $addressesFactory, $transportBuilder, $groupRepository, $encryptor, $dateTime, $customerDataFactory, $dataObjectProcessor, $dataObjectHelper, $metadataService, $indexerRegistry, $resourceCollection, $data, $accountConfirmation, $mathRandom);
    }

    /**
     * {@inheritdoc}
     */
    public function _construct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_construct');
        return $pluginInfo ? $this->___callPlugins('_construct', func_get_args(), $pluginInfo) : parent::_construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getDataModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataModel');
        return $pluginInfo ? $this->___callPlugins('getDataModel', func_get_args(), $pluginInfo) : parent::getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function updateData($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateData');
        return $pluginInfo ? $this->___callPlugins('updateData', func_get_args(), $pluginInfo) : parent::updateData($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function getSharingConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSharingConfig');
        return $pluginInfo ? $this->___callPlugins('getSharingConfig', func_get_args(), $pluginInfo) : parent::getSharingConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($login, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        return $pluginInfo ? $this->___callPlugins('authenticate', func_get_args(), $pluginInfo) : parent::authenticate($login, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByEmail($customerEmail)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByEmail');
        return $pluginInfo ? $this->___callPlugins('loadByEmail', func_get_args(), $pluginInfo) : parent::loadByEmail($customerEmail);
    }

    /**
     * {@inheritdoc}
     */
    public function changePassword($newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changePassword');
        return $pluginInfo ? $this->___callPlugins('changePassword', func_get_args(), $pluginInfo) : parent::changePassword($newPassword);
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
    public function addAddress(\Magento\Customer\Model\Address $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAddress');
        return $pluginInfo ? $this->___callPlugins('addAddress', func_get_args(), $pluginInfo) : parent::addAddress($address);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressById($addressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressById');
        return $pluginInfo ? $this->___callPlugins('getAddressById', func_get_args(), $pluginInfo) : parent::getAddressById($addressId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressItemById($addressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressItemById');
        return $pluginInfo ? $this->___callPlugins('getAddressItemById', func_get_args(), $pluginInfo) : parent::getAddressItemById($addressId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressCollection');
        return $pluginInfo ? $this->___callPlugins('getAddressCollection', func_get_args(), $pluginInfo) : parent::getAddressCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressesCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressesCollection');
        return $pluginInfo ? $this->___callPlugins('getAddressesCollection', func_get_args(), $pluginInfo) : parent::getAddressesCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getAddresses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddresses');
        return $pluginInfo ? $this->___callPlugins('getAddresses', func_get_args(), $pluginInfo) : parent::getAddresses();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributes');
        return $pluginInfo ? $this->___callPlugins('getAttributes', func_get_args(), $pluginInfo) : parent::getAttributes();
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
    public function setPassword($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPassword');
        return $pluginInfo ? $this->___callPlugins('setPassword', func_get_args(), $pluginInfo) : parent::setPassword($password);
    }

    /**
     * {@inheritdoc}
     */
    public function hashPassword($password, $salt = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hashPassword');
        return $pluginInfo ? $this->___callPlugins('hashPassword', func_get_args(), $pluginInfo) : parent::hashPassword($password, $salt);
    }

    /**
     * {@inheritdoc}
     */
    public function validatePassword($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validatePassword');
        return $pluginInfo ? $this->___callPlugins('validatePassword', func_get_args(), $pluginInfo) : parent::validatePassword($password);
    }

    /**
     * {@inheritdoc}
     */
    public function encryptPassword($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'encryptPassword');
        return $pluginInfo ? $this->___callPlugins('encryptPassword', func_get_args(), $pluginInfo) : parent::encryptPassword($password);
    }

    /**
     * {@inheritdoc}
     */
    public function decryptPassword($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'decryptPassword');
        return $pluginInfo ? $this->___callPlugins('decryptPassword', func_get_args(), $pluginInfo) : parent::decryptPassword($password);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryAddress($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryAddress');
        return $pluginInfo ? $this->___callPlugins('getPrimaryAddress', func_get_args(), $pluginInfo) : parent::getPrimaryAddress($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryBillingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryBillingAddress');
        return $pluginInfo ? $this->___callPlugins('getPrimaryBillingAddress', func_get_args(), $pluginInfo) : parent::getPrimaryBillingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultBillingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultBillingAddress');
        return $pluginInfo ? $this->___callPlugins('getDefaultBillingAddress', func_get_args(), $pluginInfo) : parent::getDefaultBillingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryShippingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryShippingAddress');
        return $pluginInfo ? $this->___callPlugins('getPrimaryShippingAddress', func_get_args(), $pluginInfo) : parent::getPrimaryShippingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultShippingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultShippingAddress');
        return $pluginInfo ? $this->___callPlugins('getDefaultShippingAddress', func_get_args(), $pluginInfo) : parent::getDefaultShippingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryAddressIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryAddressIds');
        return $pluginInfo ? $this->___callPlugins('getPrimaryAddressIds', func_get_args(), $pluginInfo) : parent::getPrimaryAddressIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getPrimaryAddresses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrimaryAddresses');
        return $pluginInfo ? $this->___callPlugins('getPrimaryAddresses', func_get_args(), $pluginInfo) : parent::getPrimaryAddresses();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalAddresses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalAddresses');
        return $pluginInfo ? $this->___callPlugins('getAdditionalAddresses', func_get_args(), $pluginInfo) : parent::getAdditionalAddresses();
    }

    /**
     * {@inheritdoc}
     */
    public function isAddressPrimary(\Magento\Customer\Model\Address $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAddressPrimary');
        return $pluginInfo ? $this->___callPlugins('isAddressPrimary', func_get_args(), $pluginInfo) : parent::isAddressPrimary($address);
    }

    /**
     * {@inheritdoc}
     */
    public function sendNewAccountEmail($type = 'registered', $backUrl = '', $storeId = '0')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendNewAccountEmail');
        return $pluginInfo ? $this->___callPlugins('sendNewAccountEmail', func_get_args(), $pluginInfo) : parent::sendNewAccountEmail($type, $backUrl, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function isConfirmationRequired()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isConfirmationRequired');
        return $pluginInfo ? $this->___callPlugins('isConfirmationRequired', func_get_args(), $pluginInfo) : parent::isConfirmationRequired();
    }

    /**
     * {@inheritdoc}
     */
    public function getRandomConfirmationKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRandomConfirmationKey');
        return $pluginInfo ? $this->___callPlugins('getRandomConfirmationKey', func_get_args(), $pluginInfo) : parent::getRandomConfirmationKey();
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordReminderEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordReminderEmail');
        return $pluginInfo ? $this->___callPlugins('sendPasswordReminderEmail', func_get_args(), $pluginInfo) : parent::sendPasswordReminderEmail();
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordResetConfirmationEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordResetConfirmationEmail');
        return $pluginInfo ? $this->___callPlugins('sendPasswordResetConfirmationEmail', func_get_args(), $pluginInfo) : parent::sendPasswordResetConfirmationEmail();
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
    public function getTaxClassId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxClassId');
        return $pluginInfo ? $this->___callPlugins('getTaxClassId', func_get_args(), $pluginInfo) : parent::getTaxClassId();
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
    public function getSharedStoreIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSharedStoreIds');
        return $pluginInfo ? $this->___callPlugins('getSharedStoreIds', func_get_args(), $pluginInfo) : parent::getSharedStoreIds();
    }

    /**
     * {@inheritdoc}
     */
    public function getSharedWebsiteIds()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSharedWebsiteIds');
        return $pluginInfo ? $this->___callPlugins('getSharedWebsiteIds', func_get_args(), $pluginInfo) : parent::getSharedWebsiteIds();
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
    public function setStore(\Magento\Store\Model\Store $store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStore');
        return $pluginInfo ? $this->___callPlugins('setStore', func_get_args(), $pluginInfo) : parent::setStore($store);
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
    public function unsetSubscription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetSubscription');
        return $pluginInfo ? $this->___callPlugins('unsetSubscription', func_get_args(), $pluginInfo) : parent::unsetSubscription();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanAllAddresses()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanAllAddresses');
        return $pluginInfo ? $this->___callPlugins('cleanAllAddresses', func_get_args(), $pluginInfo) : parent::cleanAllAddresses();
    }

    /**
     * {@inheritdoc}
     */
    public function addError($error)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addError');
        return $pluginInfo ? $this->___callPlugins('addError', func_get_args(), $pluginInfo) : parent::addError($error);
    }

    /**
     * {@inheritdoc}
     */
    public function getErrors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getErrors');
        return $pluginInfo ? $this->___callPlugins('getErrors', func_get_args(), $pluginInfo) : parent::getErrors();
    }

    /**
     * {@inheritdoc}
     */
    public function resetErrors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetErrors');
        return $pluginInfo ? $this->___callPlugins('resetErrors', func_get_args(), $pluginInfo) : parent::resetErrors();
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
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
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
    public function getCreatedAtTimestamp()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedAtTimestamp');
        return $pluginInfo ? $this->___callPlugins('getCreatedAtTimestamp', func_get_args(), $pluginInfo) : parent::getCreatedAtTimestamp();
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
    public function getEntityType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityType');
        return $pluginInfo ? $this->___callPlugins('getEntityType', func_get_args(), $pluginInfo) : parent::getEntityType();
    }

    /**
     * {@inheritdoc}
     */
    public function changeResetPasswordLinkToken($passwordLinkToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeResetPasswordLinkToken');
        return $pluginInfo ? $this->___callPlugins('changeResetPasswordLinkToken', func_get_args(), $pluginInfo) : parent::changeResetPasswordLinkToken($passwordLinkToken);
    }

    /**
     * {@inheritdoc}
     */
    public function isResetPasswordLinkTokenExpired()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isResetPasswordLinkTokenExpired');
        return $pluginInfo ? $this->___callPlugins('isResetPasswordLinkTokenExpired', func_get_args(), $pluginInfo) : parent::isResetPasswordLinkTokenExpired();
    }

    /**
     * {@inheritdoc}
     */
    public function getResetPasswordLinkExpirationPeriod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResetPasswordLinkExpirationPeriod');
        return $pluginInfo ? $this->___callPlugins('getResetPasswordLinkExpirationPeriod', func_get_args(), $pluginInfo) : parent::getResetPasswordLinkExpirationPeriod();
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerLocked()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerLocked');
        return $pluginInfo ? $this->___callPlugins('isCustomerLocked', func_get_args(), $pluginInfo) : parent::isCustomerLocked();
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordConfirm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPasswordConfirm');
        return $pluginInfo ? $this->___callPlugins('getPasswordConfirm', func_get_args(), $pluginInfo) : parent::getPasswordConfirm();
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPassword');
        return $pluginInfo ? $this->___callPlugins('getPassword', func_get_args(), $pluginInfo) : parent::getPassword();
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
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
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
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
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
