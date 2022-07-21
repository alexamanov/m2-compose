<?php
namespace Magento\Theme\Model\Indexer\Design\Config;

/**
 * Interceptor class for @see \Magento\Theme\Model\Indexer\Design\Config
 */
class Interceptor extends \Magento\Theme\Model\Indexer\Design\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\StructureFactory $structureFactory, \Magento\Framework\Indexer\SaveHandlerFactory $saveHandlerFactory, \Magento\Framework\Indexer\FieldsetPool $fieldsetPool, \Magento\Framework\Indexer\HandlerPool $handlerPool, \Magento\Theme\Model\ResourceModel\Design\Config\Scope\CollectionFactory $collectionFactory, $data = [])
    {
        $this->___init();
        parent::__construct($structureFactory, $saveHandlerFactory, $fieldsetPool, $handlerPool, $collectionFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
