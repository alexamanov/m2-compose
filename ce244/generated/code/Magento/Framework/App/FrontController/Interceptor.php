<?php
namespace Magento\Framework\App\FrontController;

/**
 * Interceptor class for @see \Magento\Framework\App\FrontController
 */
class Interceptor extends \Magento\Framework\App\FrontController implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RouterListInterface $routerList, \Magento\Framework\App\ResponseInterface $response, ?\Magento\Framework\App\Request\ValidatorInterface $requestValidator = null, ?\Magento\Framework\Message\ManagerInterface $messageManager = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\App\State $appState = null, ?\Magento\Framework\App\AreaList $areaList = null, ?\Magento\Framework\App\ActionFlag $actionFlag = null, ?\Magento\Framework\Event\ManagerInterface $eventManager = null, ?\Magento\Framework\App\RequestInterface $request = null)
    {
        $this->___init();
        parent::__construct($routerList, $response, $requestValidator, $messageManager, $logger, $appState, $areaList, $actionFlag, $eventManager, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
