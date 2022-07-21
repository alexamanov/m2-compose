<?php
namespace Magento\CatalogRule\Api\Data;

/**
 * Extension class for @see \Magento\CatalogRule\Api\Data\RuleInterface
 */
class RuleExtension extends \Magento\Framework\Api\AbstractSimpleObject implements RuleExtensionInterface
{
    /**
     * @return int[]|null
     */
    public function getExcludeWebsiteIds()
    {
        return $this->_get('exclude_website_ids');
    }

    /**
     * @param int[] $excludeWebsiteIds
     * @return $this
     */
    public function setExcludeWebsiteIds($excludeWebsiteIds)
    {
        $this->setData('exclude_website_ids', $excludeWebsiteIds);
        return $this;
    }
}
