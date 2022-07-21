<?php
namespace Magento\Cms\Model\PageRepository;

/**
 * Interceptor class for @see \Magento\Cms\Model\PageRepository
 */
class Interceptor extends \Magento\Cms\Model\PageRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\ResourceModel\Page $resource, \Magento\Cms\Model\PageFactory $pageFactory, \Magento\Cms\Api\Data\PageInterfaceFactory $dataPageFactory, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory, \Magento\Cms\Api\Data\PageSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null, ?\Magento\Cms\Model\Page\IdentityMap $identityMap = null, ?\Magento\Framework\EntityManager\HydratorInterface $hydrator = null, ?\Magento\Framework\App\Route\Config $routeConfig = null)
    {
        $this->___init();
        parent::__construct($resource, $pageFactory, $dataPageFactory, $pageCollectionFactory, $searchResultsFactory, $dataObjectHelper, $dataObjectProcessor, $storeManager, $collectionProcessor, $identityMap, $hydrator, $routeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($page);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($pageId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getById');
        return $pluginInfo ? $this->___callPlugins('getById', func_get_args(), $pluginInfo) : parent::getById($pageId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $criteria)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($criteria);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Cms\Api\Data\PageInterface $page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($page);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($pageId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($pageId);
    }
}
