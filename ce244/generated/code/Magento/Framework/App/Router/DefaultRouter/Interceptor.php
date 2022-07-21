<?php
namespace Magento\Framework\App\Router\DefaultRouter;

/**
 * Interceptor class for @see \Magento\Framework\App\Router\DefaultRouter
 */
class Interceptor extends \Magento\Framework\App\Router\DefaultRouter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\Router\NoRouteHandlerList $noRouteHandlerList)
    {
        $this->___init();
        parent::__construct($actionFactory, $noRouteHandlerList);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }
}
