<?php
namespace Magento\Securitytxt\Controller\Router;

/**
 * Interceptor class for @see \Magento\Securitytxt\Controller\Router
 */
class Interceptor extends \Magento\Securitytxt\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\Router\ActionList $actionList, \Magento\Framework\App\Route\ConfigInterface $routeConfig, \Magento\Securitytxt\Model\Config $config)
    {
        $this->___init();
        parent::__construct($actionFactory, $actionList, $routeConfig, $config);
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
