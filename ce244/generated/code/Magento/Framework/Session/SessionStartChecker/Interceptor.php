<?php
namespace Magento\Framework\Session\SessionStartChecker;

/**
 * Interceptor class for @see \Magento\Framework\Session\SessionStartChecker
 */
class Interceptor extends \Magento\Framework\Session\SessionStartChecker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(bool $checkSapi = true)
    {
        $this->___init();
        parent::__construct($checkSapi);
    }

    /**
     * {@inheritdoc}
     */
    public function check() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'check');
        return $pluginInfo ? $this->___callPlugins('check', func_get_args(), $pluginInfo) : parent::check();
    }
}
