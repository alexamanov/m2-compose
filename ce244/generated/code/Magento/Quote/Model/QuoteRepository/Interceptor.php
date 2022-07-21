<?php
namespace Magento\Quote\Model\QuoteRepository;

/**
 * Interceptor class for @see \Magento\Quote\Model\QuoteRepository
 */
class Interceptor extends \Magento\Quote\Model\QuoteRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Quote\Model\ResourceModel\Quote\Collection $quoteCollection, \Magento\Quote\Api\Data\CartSearchResultsInterfaceFactory $searchResultsDataFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null, ?\Magento\Quote\Model\ResourceModel\Quote\CollectionFactory $quoteCollectionFactory = null, ?\Magento\Quote\Api\Data\CartInterfaceFactory $cartFactory = null)
    {
        $this->___init();
        parent::__construct($quoteFactory, $storeManager, $quoteCollection, $searchResultsDataFactory, $extensionAttributesJoinProcessor, $collectionProcessor, $quoteCollectionFactory, $cartFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($cartId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getForCustomer($customerId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForCustomer');
        return $pluginInfo ? $this->___callPlugins('getForCustomer', func_get_args(), $pluginInfo) : parent::getForCustomer($customerId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActive($cartId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActive');
        return $pluginInfo ? $this->___callPlugins('getActive', func_get_args(), $pluginInfo) : parent::getActive($cartId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveForCustomer($customerId, array $sharedStoreIds = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActiveForCustomer');
        return $pluginInfo ? $this->___callPlugins('getActiveForCustomer', func_get_args(), $pluginInfo) : parent::getActiveForCustomer($customerId, $sharedStoreIds);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }
}
