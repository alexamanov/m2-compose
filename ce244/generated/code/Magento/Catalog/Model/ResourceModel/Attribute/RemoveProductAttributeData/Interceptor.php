<?php
namespace Magento\Catalog\Model\ResourceModel\Attribute\RemoveProductAttributeData;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Attribute\RemoveProductAttributeData
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Attribute\RemoveProductAttributeData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($resourceConnection, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function removeData(\Magento\Framework\Model\AbstractModel $object, int $attributeSetId) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeData');
        $pluginInfo ? $this->___callPlugins('removeData', func_get_args(), $pluginInfo) : parent::removeData($object, $attributeSetId);
    }
}
