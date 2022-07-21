<?php
namespace Magento\Store\Model\Validation\StoreCodeValidator;

/**
 * Interceptor class for @see \Magento\Store\Model\Validation\StoreCodeValidator
 */
class Interceptor extends \Magento\Store\Model\Validation\StoreCodeValidator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validator\RegexFactory $regexValidatorFactory)
    {
        $this->___init();
        parent::__construct($regexValidatorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValid');
        return $pluginInfo ? $this->___callPlugins('isValid', func_get_args(), $pluginInfo) : parent::isValid($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setTranslator($translator = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTranslator');
        return $pluginInfo ? $this->___callPlugins('setTranslator', func_get_args(), $pluginInfo) : parent::setTranslator($translator);
    }

    /**
     * {@inheritdoc}
     */
    public function getTranslator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTranslator');
        return $pluginInfo ? $this->___callPlugins('getTranslator', func_get_args(), $pluginInfo) : parent::getTranslator();
    }

    /**
     * {@inheritdoc}
     */
    public function hasTranslator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasTranslator');
        return $pluginInfo ? $this->___callPlugins('hasTranslator', func_get_args(), $pluginInfo) : parent::hasTranslator();
    }

    /**
     * {@inheritdoc}
     */
    public function getMessages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessages');
        return $pluginInfo ? $this->___callPlugins('getMessages', func_get_args(), $pluginInfo) : parent::getMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function hasMessages()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasMessages');
        return $pluginInfo ? $this->___callPlugins('hasMessages', func_get_args(), $pluginInfo) : parent::hasMessages();
    }
}
