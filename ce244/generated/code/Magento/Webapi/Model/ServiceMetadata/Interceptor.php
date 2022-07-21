<?php
namespace Magento\Webapi\Model\ServiceMetadata;

/**
 * Interceptor class for @see \Magento\Webapi\Model\ServiceMetadata
 */
class Interceptor extends \Magento\Webapi\Model\ServiceMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Webapi\Model\Config $config, \Magento\Webapi\Model\Cache\Type\Webapi $cache, \Magento\Webapi\Model\Config\ClassReflector $classReflector, \Magento\Framework\Reflection\TypeProcessor $typeProcessor, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($config, $cache, $classReflector, $typeProcessor, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getServicesConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServicesConfig');
        return $pluginInfo ? $this->___callPlugins('getServicesConfig', func_get_args(), $pluginInfo) : parent::getServicesConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceMetadata($serviceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceMetadata');
        return $pluginInfo ? $this->___callPlugins('getServiceMetadata', func_get_args(), $pluginInfo) : parent::getServiceMetadata($serviceName);
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceName($interfaceName, $version, $preserveVersion = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceName');
        return $pluginInfo ? $this->___callPlugins('getServiceName', func_get_args(), $pluginInfo) : parent::getServiceName($interfaceName, $version, $preserveVersion);
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteMetadata($serviceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRouteMetadata');
        return $pluginInfo ? $this->___callPlugins('getRouteMetadata', func_get_args(), $pluginInfo) : parent::getRouteMetadata($serviceName);
    }

    /**
     * {@inheritdoc}
     */
    public function getRoutesConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRoutesConfig');
        return $pluginInfo ? $this->___callPlugins('getRoutesConfig', func_get_args(), $pluginInfo) : parent::getRoutesConfig();
    }
}
