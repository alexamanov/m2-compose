<?php
namespace Magento\ConfigurableProduct\Model\ResourceModel\Attribute\OptionSelectBuilder;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\ResourceModel\Attribute\OptionSelectBuilder
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\ResourceModel\Attribute\OptionSelectBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute $attributeResource, \Magento\ConfigurableProduct\Model\ResourceModel\Attribute\OptionProvider $attributeOptionProvider)
    {
        $this->___init();
        parent::__construct($attributeResource, $attributeOptionProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelect(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $superAttribute, int $productId, \Magento\Framework\App\ScopeInterface $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelect');
        return $pluginInfo ? $this->___callPlugins('getSelect', func_get_args(), $pluginInfo) : parent::getSelect($superAttribute, $productId, $scope);
    }
}
