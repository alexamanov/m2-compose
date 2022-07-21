<?php
namespace Magento\User\Model\User;

/**
 * Interceptor class for @see \Magento\User\Model\User
 */
class Interceptor extends \Magento\User\Model\User implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\User\Helper\Data $userData, \Magento\Backend\App\ConfigInterface $config, \Magento\Framework\Validator\DataObjectFactory $validatorObjectFactory, \Magento\Authorization\Model\RoleFactory $roleFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\User\Model\UserValidationRules $validationRules, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null, ?\Magento\User\Model\Spi\NotificatorInterface $notificator = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $userData, $config, $validatorObjectFactory, $roleFactory, $transportBuilder, $encryptor, $storeManager, $validationRules, $resource, $resourceCollection, $data, $serializer, $deploymentConfig, $notificator);
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
    public function saveExtra($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveExtra');
        return $pluginInfo ? $this->___callPlugins('saveExtra', func_get_args(), $pluginInfo) : parent::saveExtra($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRoles');
        return $pluginInfo ? $this->___callPlugins('getRoles', func_get_args(), $pluginInfo) : parent::getRoles();
    }

    /**
     * {@inheritdoc}
     */
    public function getRole()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRole');
        return $pluginInfo ? $this->___callPlugins('getRole', func_get_args(), $pluginInfo) : parent::getRole();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFromRole()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFromRole');
        return $pluginInfo ? $this->___callPlugins('deleteFromRole', func_get_args(), $pluginInfo) : parent::deleteFromRole();
    }

    /**
     * {@inheritdoc}
     */
    public function roleUserExists()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'roleUserExists');
        return $pluginInfo ? $this->___callPlugins('roleUserExists', func_get_args(), $pluginInfo) : parent::roleUserExists();
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
    public function sendPasswordResetNotificationEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordResetNotificationEmail');
        return $pluginInfo ? $this->___callPlugins('sendPasswordResetNotificationEmail', func_get_args(), $pluginInfo) : parent::sendPasswordResetNotificationEmail();
    }

    /**
     * {@inheritdoc}
     */
    public function sendNotificationEmailsIfRequired()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendNotificationEmailsIfRequired');
        return $pluginInfo ? $this->___callPlugins('sendNotificationEmailsIfRequired', func_get_args(), $pluginInfo) : parent::sendNotificationEmailsIfRequired();
    }

    /**
     * {@inheritdoc}
     */
    public function getName($separator = ' ')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName($separator);
    }

    /**
     * {@inheritdoc}
     */
    public function getAclRole()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAclRole');
        return $pluginInfo ? $this->___callPlugins('getAclRole', func_get_args(), $pluginInfo) : parent::getAclRole();
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        return $pluginInfo ? $this->___callPlugins('authenticate', func_get_args(), $pluginInfo) : parent::authenticate($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyIdentity($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyIdentity');
        return $pluginInfo ? $this->___callPlugins('verifyIdentity', func_get_args(), $pluginInfo) : parent::verifyIdentity($password);
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'login');
        return $pluginInfo ? $this->___callPlugins('login', func_get_args(), $pluginInfo) : parent::login($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function reload()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reload');
        return $pluginInfo ? $this->___callPlugins('reload', func_get_args(), $pluginInfo) : parent::reload();
    }

    /**
     * {@inheritdoc}
     */
    public function loadByUsername($username)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByUsername');
        return $pluginInfo ? $this->___callPlugins('loadByUsername', func_get_args(), $pluginInfo) : parent::loadByUsername($username);
    }

    /**
     * {@inheritdoc}
     */
    public function hasAssigned2Role($user)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAssigned2Role');
        return $pluginInfo ? $this->___callPlugins('hasAssigned2Role', func_get_args(), $pluginInfo) : parent::hasAssigned2Role($user);
    }

    /**
     * {@inheritdoc}
     */
    public function changeResetPasswordLinkToken($newToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeResetPasswordLinkToken');
        return $pluginInfo ? $this->___callPlugins('changeResetPasswordLinkToken', func_get_args(), $pluginInfo) : parent::changeResetPasswordLinkToken($newToken);
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
    public function hasAvailableResources()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAvailableResources');
        return $pluginInfo ? $this->___callPlugins('hasAvailableResources', func_get_args(), $pluginInfo) : parent::hasAvailableResources();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasAvailableResources($hasResources)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasAvailableResources');
        return $pluginInfo ? $this->___callPlugins('setHasAvailableResources', func_get_args(), $pluginInfo) : parent::setHasAvailableResources($hasResources);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstName');
        return $pluginInfo ? $this->___callPlugins('getFirstName', func_get_args(), $pluginInfo) : parent::getFirstName();
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstName($firstName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFirstName');
        return $pluginInfo ? $this->___callPlugins('setFirstName', func_get_args(), $pluginInfo) : parent::setFirstName($firstName);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastName');
        return $pluginInfo ? $this->___callPlugins('getLastName', func_get_args(), $pluginInfo) : parent::getLastName();
    }

    /**
     * {@inheritdoc}
     */
    public function setLastName($lastName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLastName');
        return $pluginInfo ? $this->___callPlugins('setLastName', func_get_args(), $pluginInfo) : parent::setLastName($lastName);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmail');
        return $pluginInfo ? $this->___callPlugins('getEmail', func_get_args(), $pluginInfo) : parent::getEmail();
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmail');
        return $pluginInfo ? $this->___callPlugins('setEmail', func_get_args(), $pluginInfo) : parent::setEmail($email);
    }

    /**
     * {@inheritdoc}
     */
    public function getUserName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUserName');
        return $pluginInfo ? $this->___callPlugins('getUserName', func_get_args(), $pluginInfo) : parent::getUserName();
    }

    /**
     * {@inheritdoc}
     */
    public function setUserName($userName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUserName');
        return $pluginInfo ? $this->___callPlugins('setUserName', func_get_args(), $pluginInfo) : parent::setUserName($userName);
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
    public function setPassword($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPassword');
        return $pluginInfo ? $this->___callPlugins('setPassword', func_get_args(), $pluginInfo) : parent::setPassword($password);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreated');
        return $pluginInfo ? $this->___callPlugins('getCreated', func_get_args(), $pluginInfo) : parent::getCreated();
    }

    /**
     * {@inheritdoc}
     */
    public function setCreated($created)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreated');
        return $pluginInfo ? $this->___callPlugins('setCreated', func_get_args(), $pluginInfo) : parent::setCreated($created);
    }

    /**
     * {@inheritdoc}
     */
    public function getModified()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModified');
        return $pluginInfo ? $this->___callPlugins('getModified', func_get_args(), $pluginInfo) : parent::getModified();
    }

    /**
     * {@inheritdoc}
     */
    public function setModified($modified)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setModified');
        return $pluginInfo ? $this->___callPlugins('setModified', func_get_args(), $pluginInfo) : parent::setModified($modified);
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
    public function getInterfaceLocale()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInterfaceLocale');
        return $pluginInfo ? $this->___callPlugins('getInterfaceLocale', func_get_args(), $pluginInfo) : parent::getInterfaceLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function setInterfaceLocale($interfaceLocale)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInterfaceLocale');
        return $pluginInfo ? $this->___callPlugins('setInterfaceLocale', func_get_args(), $pluginInfo) : parent::setInterfaceLocale($interfaceLocale);
    }

    /**
     * {@inheritdoc}
     */
    public function performIdentityCheck($passwordString)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'performIdentityCheck');
        return $pluginInfo ? $this->___callPlugins('performIdentityCheck', func_get_args(), $pluginInfo) : parent::performIdentityCheck($passwordString);
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
