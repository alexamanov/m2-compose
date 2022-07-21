<?php
namespace Magento\Framework\App\Http\Context;

/**
 * Interceptor class for @see \Magento\Framework\App\Http\Context
 */
class Interceptor extends \Magento\Framework\App\Http\Context implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [], array $default = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($data, $default, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function setValue($name, $value, $default)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setValue');
        return $pluginInfo ? $this->___callPlugins('setValue', func_get_args(), $pluginInfo) : parent::setValue($name, $value, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function unsValue($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsValue');
        return $pluginInfo ? $this->___callPlugins('unsValue', func_get_args(), $pluginInfo) : parent::unsValue($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getVaryString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVaryString');
        return $pluginInfo ? $this->___callPlugins('getVaryString', func_get_args(), $pluginInfo) : parent::getVaryString();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray();
    }
}
