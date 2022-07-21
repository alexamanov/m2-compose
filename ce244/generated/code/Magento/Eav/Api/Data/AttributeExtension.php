<?php
namespace Magento\Eav\Api\Data;

/**
 * Extension class for @see \Magento\Eav\Api\Data\AttributeInterface
 */
class AttributeExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AttributeExtensionInterface
{
    /**
     * @return boolean|null
     */
    public function getIsPagebuilderEnabled()
    {
        return $this->_get('is_pagebuilder_enabled');
    }

    /**
     * @param boolean $isPagebuilderEnabled
     * @return $this
     */
    public function setIsPagebuilderEnabled($isPagebuilderEnabled)
    {
        $this->setData('is_pagebuilder_enabled', $isPagebuilderEnabled);
        return $this;
    }
}
