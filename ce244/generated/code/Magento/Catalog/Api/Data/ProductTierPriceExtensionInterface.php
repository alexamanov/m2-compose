<?php
namespace Magento\Catalog\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductTierPriceInterface
 */
interface ProductTierPriceExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return float|null
     */
    public function getPercentageValue();

    /**
     * @param float $percentageValue
     * @return $this
     */
    public function setPercentageValue($percentageValue);

    /**
     * @return int|null
     */
    public function getWebsiteId();

    /**
     * @param int $websiteId
     * @return $this
     */
    public function setWebsiteId($websiteId);
}
