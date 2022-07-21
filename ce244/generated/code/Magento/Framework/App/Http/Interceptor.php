<?php
namespace Magento\Framework\App\Http;

/**
 * Interceptor class for @see \Magento\Framework\App\Http
 */
class Interceptor extends \Magento\Framework\App\Http implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Event\Manager $eventManager, \Magento\Framework\App\AreaList $areaList, \Magento\Framework\App\Request\Http $request, \Magento\Framework\App\Response\Http $response, \Magento\Framework\ObjectManager\ConfigLoaderInterface $configLoader, \Magento\Framework\App\State $state, \Magento\Framework\Registry $registry, ?\Magento\Framework\App\ExceptionHandlerInterface $exceptionHandler = null)
    {
        $this->___init();
        parent::__construct($objectManager, $eventManager, $areaList, $request, $response, $configLoader, $state, $registry, $exceptionHandler);
    }

    /**
     * {@inheritdoc}
     */
    public function launch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'launch');
        return $pluginInfo ? $this->___callPlugins('launch', func_get_args(), $pluginInfo) : parent::launch();
    }

    /**
     * {@inheritdoc}
     */
    public function catchException(\Magento\Framework\App\Bootstrap $bootstrap, \Exception $exception) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'catchException');
        return $pluginInfo ? $this->___callPlugins('catchException', func_get_args(), $pluginInfo) : parent::catchException($bootstrap, $exception);
    }
}
