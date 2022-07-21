<?php
namespace Magento\CatalogRule\Pricing\Price\CatalogRulePrice;

/**
 * Interceptor class for @see \Magento\CatalogRule\Pricing\Price\CatalogRulePrice
 */
class Interceptor extends \Magento\CatalogRule\Pricing\Price\CatalogRulePrice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product $saleableItem, $quantity, \Magento\Framework\Pricing\Adjustment\Calculator $calculator, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $dateTime, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\CatalogRule\Model\ResourceModel\Rule $ruleResource)
    {
        $this->___init();
        parent::__construct($saleableItem, $quantity, $calculator, $priceCurrency, $dateTime, $storeManager, $customerSession, $ruleResource);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmount');
        return $pluginInfo ? $this->___callPlugins('getAmount', func_get_args(), $pluginInfo) : parent::getAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAmount($amount = null, $exclude = null, $context = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAmount');
        return $pluginInfo ? $this->___callPlugins('getCustomAmount', func_get_args(), $pluginInfo) : parent::getCustomAmount($amount, $exclude, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceCode');
        return $pluginInfo ? $this->___callPlugins('getPriceCode', func_get_args(), $pluginInfo) : parent::getPriceCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProduct');
        return $pluginInfo ? $this->___callPlugins('getProduct', func_get_args(), $pluginInfo) : parent::getProduct();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuantity');
        return $pluginInfo ? $this->___callPlugins('getQuantity', func_get_args(), $pluginInfo) : parent::getQuantity();
    }
}
