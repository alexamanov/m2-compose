<?php
namespace Magento\Framework\App\Http\Context;

/**
 * Proxy class for @see \Magento\Framework\App\Http\Context
 */
class Proxy extends \Magento\Framework\App\Http\Context implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\App\Http\Context
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\App\\Http\\Context', $shared = true)
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
     * @return \Magento\Framework\App\Http\Context
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
    public function setValue($name, $value, $default)
    {
        return $this->_getSubject()->setValue($name, $value, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function unsValue($name)
    {
        return $this->_getSubject()->unsValue($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue($name)
    {
        return $this->_getSubject()->getValue($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->_getSubject()->getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getVaryString()
    {
        return $this->_getSubject()->getVaryString();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return $this->_getSubject()->toArray();
    }
}
