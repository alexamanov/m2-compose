<?php
namespace Magento\Customer\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Customer\Api\Data\CustomerInterface
 */
interface CustomerExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return integer|null
     */
    public function getAssistanceAllowed();

    /**
     * @param integer $assistanceAllowed
     * @return $this
     */
    public function setAssistanceAllowed($assistanceAllowed);

    /**
     * @return boolean|null
     */
    public function getIsSubscribed();

    /**
     * @param boolean $isSubscribed
     * @return $this
     */
    public function setIsSubscribed($isSubscribed);
}
