<?php
namespace Magento\Customer\Model\ResourceModel\CustomerRepository;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\CustomerRepository
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\CustomerRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Model\Data\CustomerSecureFactory $customerSecureFactory, \Magento\Customer\Model\CustomerRegistry $customerRegistry, \Magento\Customer\Model\ResourceModel\AddressRepository $addressRepository, \Magento\Customer\Model\ResourceModel\Customer $customerResourceModel, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadata, \Magento\Customer\Api\Data\CustomerSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Api\ImageProcessorInterface $imageProcessor, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor, \Magento\Customer\Model\Customer\NotificationStorage $notificationStorage, ?\Magento\Customer\Model\Delegation\Storage $delegatedStorage = null, ?\Magento\Customer\Api\GroupRepositoryInterface $groupRepository = null)
    {
        $this->___init();
        parent::__construct($customerFactory, $customerSecureFactory, $customerRegistry, $addressRepository, $customerResourceModel, $customerMetadata, $searchResultsFactory, $eventManager, $storeManager, $extensibleDataObjectConverter, $dataObjectHelper, $imageProcessor, $extensionAttributesJoinProcessor, $collectionProcessor, $notificationStorage, $delegatedStorage, $groupRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Customer\Api\Data\CustomerInterface $customer, $passwordHash = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($customer, $passwordHash);
    }

    /**
     * {@inheritdoc}
     */
    public function get($email, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($email, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($customerId);
    }
}
