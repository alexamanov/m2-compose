<?php
namespace Magento\Csp\Helper\InlineUtil;

/**
 * Proxy class for @see \Magento\Csp\Helper\InlineUtil
 */
class Proxy extends \Magento\Csp\Helper\InlineUtil implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Csp\Helper\InlineUtil
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Csp\\Helper\\InlineUtil', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Csp\Helper\InlineUtil
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function renderTag(string $tagName, array $attributes, ?string $content = null) : string
    {
        return $this->_getSubject()->renderTag($tagName, $attributes, $content);
    }

    /**
     * {@inheritdoc}
     */
    public function renderEventListener(string $eventName, string $javascript) : string
    {
        return $this->_getSubject()->renderEventListener($eventName, $javascript);
    }

    /**
     * {@inheritdoc}
     */
    public function processTag(\Magento\Framework\View\Helper\SecureHtmlRender\TagData $tagData) : \Magento\Framework\View\Helper\SecureHtmlRender\TagData
    {
        return $this->_getSubject()->processTag($tagData);
    }

    /**
     * {@inheritdoc}
     */
    public function processEventHandler(\Magento\Framework\View\Helper\SecureHtmlRender\EventHandlerData $eventHandlerData) : \Magento\Framework\View\Helper\SecureHtmlRender\EventHandlerData
    {
        return $this->_getSubject()->processEventHandler($eventHandlerData);
    }
}
