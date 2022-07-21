<?php
namespace Magento\Backend\App\Router;

/**
 * Interceptor class for @see \Magento\Backend\App\Router
 */
class Interceptor extends \Magento\Backend\App\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Router\ActionList $actionList, \Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\DefaultPathInterface $defaultPath, \Magento\Framework\App\ResponseFactory $responseFactory, \Magento\Framework\App\Route\ConfigInterface $routeConfig, \Magento\Framework\UrlInterface $url, \Magento\Framework\Code\NameBuilder $nameBuilder, \Magento\Framework\App\Router\PathConfigInterface $pathConfig)
    {
        $this->___init();
        parent::__construct($actionList, $actionFactory, $defaultPath, $responseFactory, $routeConfig, $url, $nameBuilder, $pathConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        return $pluginInfo ? $this->___callPlugins('match', func_get_args(), $pluginInfo) : parent::match($request);
    }

    /**
     * {@inheritdoc}
     */
    public function getActionClassName($module, $actionPath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionClassName');
        return $pluginInfo ? $this->___callPlugins('getActionClassName', func_get_args(), $pluginInfo) : parent::getActionClassName($module, $actionPath);
    }
}
