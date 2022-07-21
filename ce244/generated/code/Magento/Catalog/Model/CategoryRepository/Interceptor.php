<?php
namespace Magento\Catalog\Model\CategoryRepository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\CategoryRepository
 */
class Interceptor extends \Magento\Catalog\Model\CategoryRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Category $categoryResource, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Catalog\Model\CategoryRepository\PopulateWithValues $populateWithValues)
    {
        $this->___init();
        parent::__construct($categoryFactory, $categoryResource, $storeManager, $populateWithValues);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\CategoryInterface $category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($category);
    }

    /**
     * {@inheritdoc}
     */
    public function get($categoryId, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($categoryId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Catalog\Api\Data\CategoryInterface $category)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($category);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteByIdentifier($categoryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteByIdentifier');
        return $pluginInfo ? $this->___callPlugins('deleteByIdentifier', func_get_args(), $pluginInfo) : parent::deleteByIdentifier($categoryId);
    }
}
