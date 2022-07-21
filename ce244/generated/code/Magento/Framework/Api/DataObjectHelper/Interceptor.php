<?php
namespace Magento\Framework\Api\DataObjectHelper;

/**
 * Interceptor class for @see \Magento\Framework\Api\DataObjectHelper
 */
class Interceptor extends \Magento\Framework\Api\DataObjectHelper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\ObjectFactory $objectFactory, \Magento\Framework\Reflection\DataObjectProcessor $objectProcessor, \Magento\Framework\Reflection\TypeProcessor $typeProcessor, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor, \Magento\Framework\Reflection\MethodsMap $methodsMapProcessor)
    {
        $this->___init();
        parent::__construct($objectFactory, $objectProcessor, $typeProcessor, $extensionFactory, $joinProcessor, $methodsMapProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function populateWithArray($dataObject, array $data, $interfaceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'populateWithArray');
        return $pluginInfo ? $this->___callPlugins('populateWithArray', func_get_args(), $pluginInfo) : parent::populateWithArray($dataObject, $data, $interfaceName);
    }

    /**
     * {@inheritdoc}
     */
    public function mergeDataObjects($interfaceName, $firstDataObject, $secondDataObject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeDataObjects');
        return $pluginInfo ? $this->___callPlugins('mergeDataObjects', func_get_args(), $pluginInfo) : parent::mergeDataObjects($interfaceName, $firstDataObject, $secondDataObject);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributeValueByType(array $attributeValues, $type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributeValueByType');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributeValueByType', func_get_args(), $pluginInfo) : parent::getCustomAttributeValueByType($attributeValues, $type);
    }
}
