<?php
namespace Magento\Customer\Model\AccountManagement;

/**
 * Interceptor class for @see \Magento\Customer\Model\AccountManagement
 */
class Interceptor extends \Magento\Customer\Model\AccountManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Math\Random $mathRandom, \Magento\Customer\Model\Metadata\Validator $validator, \Magento\Customer\Api\Data\ValidationResultsInterfaceFactory $validationResultsDataFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadataService, \Magento\Customer\Model\CustomerRegistry $customerRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Stdlib\StringUtils $stringHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Reflection\DataObjectProcessor $dataProcessor, \Magento\Framework\Registry $registry, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Model\Customer $customerModel, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, ?\Magento\Customer\Model\Customer\CredentialsValidator $credentialsValidator = null, ?\Magento\Framework\Intl\DateTimeFactory $dateTimeFactory = null, ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null, ?\Magento\Framework\Session\SessionManagerInterface $sessionManager = null, ?\Magento\Framework\Session\SaveHandlerInterface $saveHandler = null, ?\Magento\Customer\Model\ResourceModel\Visitor\CollectionFactory $visitorCollectionFactory = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\Customer\Model\AddressRegistry $addressRegistry = null, ?\Magento\Customer\Model\ForgotPasswordToken\GetCustomerByToken $getByToken = null, ?\Magento\Directory\Model\AllowedCountries $allowedCountriesReader = null, ?\Magento\Customer\Api\SessionCleanerInterface $sessionCleaner = null, ?\Magento\Framework\AuthorizationInterface $authorization = null, ?\Magento\Customer\Model\AuthenticationInterface $authentication = null, ?\Magento\Eav\Model\Validator\Attribute\Backend $eavValidator = null)
    {
        $this->___init();
        parent::__construct($customerFactory, $eventManager, $storeManager, $mathRandom, $validator, $validationResultsDataFactory, $addressRepository, $customerMetadataService, $customerRegistry, $logger, $encryptor, $configShare, $stringHelper, $customerRepository, $scopeConfig, $transportBuilder, $dataProcessor, $registry, $customerViewHelper, $dateTime, $customerModel, $objectFactory, $extensibleDataObjectConverter, $credentialsValidator, $dateTimeFactory, $accountConfirmation, $sessionManager, $saveHandler, $visitorCollectionFactory, $searchCriteriaBuilder, $addressRegistry, $getByToken, $allowedCountriesReader, $sessionCleaner, $authorization, $authentication, $eavValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function resendConfirmation($email, $websiteId = null, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resendConfirmation');
        return $pluginInfo ? $this->___callPlugins('resendConfirmation', func_get_args(), $pluginInfo) : parent::resendConfirmation($email, $websiteId, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function activate($email, $confirmationKey)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'activate');
        return $pluginInfo ? $this->___callPlugins('activate', func_get_args(), $pluginInfo) : parent::activate($email, $confirmationKey);
    }

    /**
     * {@inheritdoc}
     */
    public function activateById($customerId, $confirmationKey)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'activateById');
        return $pluginInfo ? $this->___callPlugins('activateById', func_get_args(), $pluginInfo) : parent::activateById($customerId, $confirmationKey);
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
    public function validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateResetPasswordLinkToken');
        return $pluginInfo ? $this->___callPlugins('validateResetPasswordLinkToken', func_get_args(), $pluginInfo) : parent::validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken);
    }

    /**
     * {@inheritdoc}
     */
    public function initiatePasswordReset($email, $template, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initiatePasswordReset');
        return $pluginInfo ? $this->___callPlugins('initiatePasswordReset', func_get_args(), $pluginInfo) : parent::initiatePasswordReset($email, $template, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function resetPassword($email, $resetToken, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetPassword');
        return $pluginInfo ? $this->___callPlugins('resetPassword', func_get_args(), $pluginInfo) : parent::resetPassword($email, $resetToken, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmationStatus($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfirmationStatus');
        return $pluginInfo ? $this->___callPlugins('getConfirmationStatus', func_get_args(), $pluginInfo) : parent::getConfirmationStatus($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function createAccount(\Magento\Customer\Api\Data\CustomerInterface $customer, $password = null, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createAccount');
        return $pluginInfo ? $this->___callPlugins('createAccount', func_get_args(), $pluginInfo) : parent::createAccount($customer, $password, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function createAccountWithPasswordHash(\Magento\Customer\Api\Data\CustomerInterface $customer, $hash, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createAccountWithPasswordHash');
        return $pluginInfo ? $this->___callPlugins('createAccountWithPasswordHash', func_get_args(), $pluginInfo) : parent::createAccountWithPasswordHash($customer, $hash, $redirectUrl);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultBillingAddress($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultBillingAddress');
        return $pluginInfo ? $this->___callPlugins('getDefaultBillingAddress', func_get_args(), $pluginInfo) : parent::getDefaultBillingAddress($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultShippingAddress($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultShippingAddress');
        return $pluginInfo ? $this->___callPlugins('getDefaultShippingAddress', func_get_args(), $pluginInfo) : parent::getDefaultShippingAddress($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function changePassword($email, $currentPassword, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changePassword');
        return $pluginInfo ? $this->___callPlugins('changePassword', func_get_args(), $pluginInfo) : parent::changePassword($email, $currentPassword, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function changePasswordById($customerId, $currentPassword, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changePasswordById');
        return $pluginInfo ? $this->___callPlugins('changePasswordById', func_get_args(), $pluginInfo) : parent::changePasswordById($customerId, $currentPassword, $newPassword);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmailAvailable($customerEmail, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmailAvailable');
        return $pluginInfo ? $this->___callPlugins('isEmailAvailable', func_get_args(), $pluginInfo) : parent::isEmailAvailable($customerEmail, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerInStore($customerWebsiteId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerInStore');
        return $pluginInfo ? $this->___callPlugins('isCustomerInStore', func_get_args(), $pluginInfo) : parent::isCustomerInStore($customerWebsiteId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function validateCustomerStoreIdByWebsiteId(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCustomerStoreIdByWebsiteId');
        return $pluginInfo ? $this->___callPlugins('validateCustomerStoreIdByWebsiteId', func_get_args(), $pluginInfo) : parent::validateCustomerStoreIdByWebsiteId($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadonly($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReadonly');
        return $pluginInfo ? $this->___callPlugins('isReadonly', func_get_args(), $pluginInfo) : parent::isReadonly($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function isResetPasswordLinkTokenExpired($rpToken, $rpTokenCreatedAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isResetPasswordLinkTokenExpired');
        return $pluginInfo ? $this->___callPlugins('isResetPasswordLinkTokenExpired', func_get_args(), $pluginInfo) : parent::isResetPasswordLinkTokenExpired($rpToken, $rpTokenCreatedAt);
    }

    /**
     * {@inheritdoc}
     */
    public function changeResetPasswordLinkToken(\Magento\Customer\Api\Data\CustomerInterface $customer, string $passwordLinkToken) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeResetPasswordLinkToken');
        return $pluginInfo ? $this->___callPlugins('changeResetPasswordLinkToken', func_get_args(), $pluginInfo) : parent::changeResetPasswordLinkToken($customer, $passwordLinkToken);
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordReminderEmail($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordReminderEmail');
        return $pluginInfo ? $this->___callPlugins('sendPasswordReminderEmail', func_get_args(), $pluginInfo) : parent::sendPasswordReminderEmail($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordResetConfirmationEmail($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordResetConfirmationEmail');
        return $pluginInfo ? $this->___callPlugins('sendPasswordResetConfirmationEmail', func_get_args(), $pluginInfo) : parent::sendPasswordResetConfirmationEmail($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordHash($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPasswordHash');
        return $pluginInfo ? $this->___callPlugins('getPasswordHash', func_get_args(), $pluginInfo) : parent::getPasswordHash($password);
    }
}
