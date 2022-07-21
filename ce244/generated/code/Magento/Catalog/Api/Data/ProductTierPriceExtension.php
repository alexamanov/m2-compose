<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
 */
class ProductTierPriceExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ProductTierPriceExtensionInterface
{
    /**
     * @return float|null
     */
    public function getPercentageValue()
    {
        return $this->_get('percentage_value');
    }

    /**
     * @param float $percentageValue
     * @return $this
     */
    public function setPercentageValue($percentageValue)
    {
        $this->setData('percentage_value', $percentageValue);
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWebsiteId()
    {
        return $this->_get('website_id');
    }

    /**
     * @param int $websiteId
     * @return $this
     */
    public function setWebsiteId($websiteId)
    {
        $this->setData('website_id', $websiteId);
        return $this;
    }
}
