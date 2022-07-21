<?php
namespace Magento\Customer\Api\Data;

/**
 * Extension class for @see \Magento\Customer\Api\Data\CustomerInterface
 */
class CustomerExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CustomerExtensionInterface
{
    /**
     * @return integer|null
     */
    public function getAssistanceAllowed()
    {
        return $this->_get('assistance_allowed');
    }

    /**
     * @param integer $assistanceAllowed
     * @return $this
     */
    public function setAssistanceAllowed($assistanceAllowed)
    {
        $this->setData('assistance_allowed', $assistanceAllowed);
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getIsSubscribed()
    {
        return $this->_get('is_subscribed');
    }

    /**
     * @param boolean $isSubscribed
     * @return $this
     */
    public function setIsSubscribed($isSubscribed)
    {
        $this->setData('is_subscribed', $isSubscribed);
        return $this;
    }
}
