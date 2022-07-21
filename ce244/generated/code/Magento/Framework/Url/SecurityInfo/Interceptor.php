<?php
namespace Magento\Framework\Url\SecurityInfo;

/**
 * Interceptor class for @see \Magento\Framework\Url\SecurityInfo
 */
class Interceptor extends \Magento\Framework\Url\SecurityInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($secureUrlList = [], $excludedUrlList = [])
    {
        $this->___init();
        parent::__construct($secureUrlList, $excludedUrlList);
    }

    /**
     * {@inheritdoc}
     */
    public function isSecure($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSecure');
        return $pluginInfo ? $this->___callPlugins('isSecure', func_get_args(), $pluginInfo) : parent::isSecure($url);
    }
}
