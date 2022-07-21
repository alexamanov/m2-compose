<?php
namespace Magento\Ui\Model\Manager;

/**
 * Proxy class for @see \Magento\Ui\Model\Manager
 */
class Proxy extends \Magento\Ui\Model\Manager implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Ui\Model\Manager
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Ui\\Model\\Manager', $shared = true)
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
     * @return \Magento\Ui\Model\Manager
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
    public function getData($name)
    {
        return $this->_getSubject()->getData($name);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareData($name)
    {
        return $this->_getSubject()->prepareData($name);
    }

    /**
     * {@inheritdoc}
     */
    public function createRawComponentData($component, $evaluated = true)
    {
        return $this->_getSubject()->createRawComponentData($component, $evaluated);
    }

    /**
     * {@inheritdoc}
     */
    public function getReader($name)
    {
        return $this->_getSubject()->getReader($name);
    }
}
