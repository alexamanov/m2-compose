<?php
namespace Magento\UrlRewrite\Controller\Router;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Controller\Router
 */
class Interceptor extends \Magento\UrlRewrite\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\UrlInterface $url, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\ResponseInterface $response, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder)
    {
        $this->___init();
        parent::__construct($actionFactory, $url, $storeManager, $response, $urlFinder);
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
