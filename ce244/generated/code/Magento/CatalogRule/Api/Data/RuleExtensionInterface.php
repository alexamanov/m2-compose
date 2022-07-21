<?php
namespace Magento\CatalogRule\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\CatalogRule\Api\Data\RuleInterface
 */
interface RuleExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return int[]|null
     */
    public function getExcludeWebsiteIds();

    /**
     * @param int[] $excludeWebsiteIds
     * @return $this
     */
    public function setExcludeWebsiteIds($excludeWebsiteIds);
}
