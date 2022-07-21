<?php
namespace Magento\Framework\View\TemplateEngineFactory;

/**
 * Interceptor class for @see \Magento\Framework\View\TemplateEngineFactory
 */
class Interceptor extends \Magento\Framework\View\TemplateEngineFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, array $engines)
    {
        $this->___init();
        parent::__construct($objectManager, $engines);
    }

    /**
     * {@inheritdoc}
     */
    public function create($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($name);
    }
}
