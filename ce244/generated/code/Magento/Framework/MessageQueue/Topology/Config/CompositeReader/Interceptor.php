<?php
namespace Magento\Framework\MessageQueue\Topology\Config\CompositeReader;

/**
 * Interceptor class for @see \Magento\Framework\MessageQueue\Topology\Config\CompositeReader
 */
class Interceptor extends \Magento\Framework\MessageQueue\Topology\Config\CompositeReader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\MessageQueue\Topology\Config\ValidatorInterface $validator, array $readers)
    {
        $this->___init();
        parent::__construct($validator, $readers);
    }

    /**
     * {@inheritdoc}
     */
    public function read($scope = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'read');
        return $pluginInfo ? $this->___callPlugins('read', func_get_args(), $pluginInfo) : parent::read($scope);
    }
}
