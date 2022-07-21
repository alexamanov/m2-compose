<?php
namespace Magento\Eav\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Eav\Api\Data\AttributeInterface
 */
interface AttributeExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return boolean|null
     */
    public function getIsPagebuilderEnabled();

    /**
     * @param boolean $isPagebuilderEnabled
     * @return $this
     */
    public function setIsPagebuilderEnabled($isPagebuilderEnabled);
}
