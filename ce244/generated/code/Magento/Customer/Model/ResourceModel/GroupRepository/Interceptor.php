<?php
namespace Magento\Customer\Model\ResourceModel\GroupRepository;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\GroupRepository
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\GroupRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\GroupRegistry $groupRegistry, \Magento\Customer\Model\GroupFactory $groupFactory, \Magento\Customer\Api\Data\GroupInterfaceFactory $groupDataFactory, \Magento\Customer\Model\ResourceModel\Group $groupResourceModel, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Customer\Api\Data\GroupSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Tax\Api\TaxClassRepositoryInterface $taxClassRepositoryInterface, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($groupRegistry, $groupFactory, $groupDataFactory, $groupResourceModel, $dataObjectProcessor, $searchResultsFactory, $taxClassRepositoryInterface, $extensionAttributesJoinProcessor, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Customer\Api\Data\GroupInterface $group)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($group);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($id);
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
    public function delete(\Magento\Customer\Api\Data\GroupInterface $group)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($group);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($id);
    }
}
