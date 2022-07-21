<?php
namespace Magento\Sales\Model\OrderRepository;

/**
 * Interceptor class for @see \Magento\Sales\Model\OrderRepository
 */
class Interceptor extends \Magento\Sales\Model\OrderRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Metadata $metadata, \Magento\Sales\Api\Data\OrderSearchResultInterfaceFactory $searchResultFactory, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null, ?\Magento\Sales\Api\Data\OrderExtensionFactory $orderExtensionFactory = null, ?\Magento\Tax\Api\OrderTaxManagementInterface $orderTaxManagement = null, ?\Magento\Payment\Api\Data\PaymentAdditionalInfoInterfaceFactory $paymentAdditionalInfoFactory = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor = null)
    {
        $this->___init();
        parent::__construct($metadata, $searchResultFactory, $collectionProcessor, $orderExtensionFactory, $orderTaxManagement, $paymentAdditionalInfoFactory, $serializer, $extensionAttributesJoinProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function get($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($id);
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
    public function delete(\Magento\Sales\Api\Data\OrderInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($id);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Sales\Api\Data\OrderInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($entity);
    }
}
