<?php
namespace Magento\Checkout\Model\Session;

/**
 * Proxy class for @see \Magento\Checkout\Model\Session
 */
class Proxy extends \Magento\Checkout\Model\Session implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Checkout\Model\Session
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Checkout\\Model\\Session', $shared = true)
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
     * @return \Magento\Checkout\Model\Session
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
    public function setCustomerData($customer)
    {
        return $this->_getSubject()->setCustomerData($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function hasQuote()
    {
        return $this->_getSubject()->hasQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setLoadInactive($load = true)
    {
        return $this->_getSubject()->setLoadInactive($load);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        return $this->_getSubject()->getQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuoteId($quoteId)
    {
        return $this->_getSubject()->setQuoteId($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteId()
    {
        return $this->_getSubject()->getQuoteId();
    }

    /**
     * {@inheritdoc}
     */
    public function loadCustomerQuote()
    {
        return $this->_getSubject()->loadCustomerQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setStepData($step, $data, $value = null)
    {
        return $this->_getSubject()->setStepData($step, $data, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getStepData($step = null, $data = null)
    {
        return $this->_getSubject()->getStepData($step, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function clearQuote()
    {
        return $this->_getSubject()->clearQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        return $this->_getSubject()->clearStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function clearHelperData()
    {
        return $this->_getSubject()->clearHelperData();
    }

    /**
     * {@inheritdoc}
     */
    public function resetCheckout()
    {
        return $this->_getSubject()->resetCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function replaceQuote($quote)
    {
        return $this->_getSubject()->replaceQuote($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRealOrder()
    {
        return $this->_getSubject()->getLastRealOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function restoreQuote()
    {
        return $this->_getSubject()->restoreQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function writeClose()
    {
        return $this->_getSubject()->writeClose();
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        return $this->_getSubject()->__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        return $this->_getSubject()->start();
    }

    /**
     * {@inheritdoc}
     */
    public function isSessionExists()
    {
        return $this->_getSubject()->isSessionExists();
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $clear = false)
    {
        return $this->_getSubject()->getData($key, $clear);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        return $this->_getSubject()->getSessionId();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->_getSubject()->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        return $this->_getSubject()->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(?array $options = null)
    {
        return $this->_getSubject()->destroy($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        return $this->_getSubject()->getCookieDomain();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        return $this->_getSubject()->getCookiePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        return $this->_getSubject()->getCookieLifetime();
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId)
    {
        return $this->_getSubject()->setSessionId($sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdForHost($urlHost)
    {
        return $this->_getSubject()->getSessionIdForHost($urlHost);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForHost($host)
    {
        return $this->_getSubject()->isValidForHost($host);
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForPath($path)
    {
        return $this->_getSubject()->isValidForPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId()
    {
        return $this->_getSubject()->regenerateId();
    }

    /**
     * {@inheritdoc}
     */
    public function expireSessionCookie()
    {
        return $this->_getSubject()->expireSessionCookie();
    }
}
