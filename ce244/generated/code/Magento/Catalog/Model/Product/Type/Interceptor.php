<?php
namespace Magento\Catalog\Model\Product\Type;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Type
 */
class Interceptor extends \Magento\Catalog\Model\Product\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductTypes\ConfigInterface $config, \Magento\Catalog\Model\Product\Type\Pool $productTypePool, \Magento\Catalog\Model\Product\Type\Price\Factory $priceFactory, \Magento\Framework\Pricing\PriceInfo\Factory $priceInfoFactory)
    {
        $this->___init();
        parent::__construct($config, $productTypePool, $priceFactory, $priceInfoFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function factory($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'factory');
        return $pluginInfo ? $this->___callPlugins('factory', func_get_args(), $pluginInfo) : parent::factory($product);
    }

    /**
     * {@inheritdoc}
     */
    public function priceFactory($productType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'priceFactory');
        return $pluginInfo ? $this->___callPlugins('priceFactory', func_get_args(), $pluginInfo) : parent::priceFactory($productType);
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceInfo(\Magento\Catalog\Model\Product $saleableItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceInfo');
        return $pluginInfo ? $this->___callPlugins('getPriceInfo', func_get_args(), $pluginInfo) : parent::getPriceInfo($saleableItem);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionArray');
        return $pluginInfo ? $this->___callPlugins('getOptionArray', func_get_args(), $pluginInfo) : parent::getOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOption()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOption');
        return $pluginInfo ? $this->___callPlugins('getAllOption', func_get_args(), $pluginInfo) : parent::getAllOption();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOptions');
        return $pluginInfo ? $this->___callPlugins('getAllOptions', func_get_args(), $pluginInfo) : parent::getAllOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionText($optionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionText');
        return $pluginInfo ? $this->___callPlugins('getOptionText', func_get_args(), $pluginInfo) : parent::getOptionText($optionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypes');
        return $pluginInfo ? $this->___callPlugins('getTypes', func_get_args(), $pluginInfo) : parent::getTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCompositeTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCompositeTypes');
        return $pluginInfo ? $this->___callPlugins('getCompositeTypes', func_get_args(), $pluginInfo) : parent::getCompositeTypes();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypesByPriority()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypesByPriority');
        return $pluginInfo ? $this->___callPlugins('getTypesByPriority', func_get_args(), $pluginInfo) : parent::getTypesByPriority();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
