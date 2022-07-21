<?php
namespace Magento\Inventory\Model\SourceRepository;

/**
 * Interceptor class for @see \Magento\Inventory\Model\SourceRepository
 */
class Interceptor extends \Magento\Inventory\Model\SourceRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\Source\Command\SaveInterface $commandSave, \Magento\Inventory\Model\Source\Command\GetInterface $commandGet, \Magento\Inventory\Model\Source\Command\GetListInterface $commandGetList)
    {
        $this->___init();
        parent::__construct($commandSave, $commandGet, $commandGetList);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\InventoryApi\Api\Data\SourceInterface $source) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($source);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $sourceCode) : \Magento\InventoryApi\Api\Data\SourceInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($sourceCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(?\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null) : \Magento\InventoryApi\Api\Data\SourceSearchResultsInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria);
    }
}
