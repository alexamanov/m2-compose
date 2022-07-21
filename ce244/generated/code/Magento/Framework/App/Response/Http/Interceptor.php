<?php
namespace Magento\Framework\App\Response\Http;

/**
 * Interceptor class for @see \Magento\Framework\App\Response\Http
 */
class Interceptor extends \Magento\Framework\App\Response\Http implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\Http\Context $context, \Magento\Framework\Stdlib\DateTime $dateTime, ?\Magento\Framework\Session\Config\ConfigInterface $sessionConfig = null)
    {
        $this->___init();
        parent::__construct($request, $cookieManager, $cookieMetadataFactory, $context, $dateTime, $sessionConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function setXFrameOptions($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setXFrameOptions');
        return $pluginInfo ? $this->___callPlugins('setXFrameOptions', func_get_args(), $pluginInfo) : parent::setXFrameOptions($value);
    }

    /**
     * {@inheritdoc}
     */
    public function sendVary()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendVary');
        return $pluginInfo ? $this->___callPlugins('sendVary', func_get_args(), $pluginInfo) : parent::sendVary();
    }

    /**
     * {@inheritdoc}
     */
    public function setPublicHeaders($ttl)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPublicHeaders');
        return $pluginInfo ? $this->___callPlugins('setPublicHeaders', func_get_args(), $pluginInfo) : parent::setPublicHeaders($ttl);
    }

    /**
     * {@inheritdoc}
     */
    public function setPrivateHeaders($ttl)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrivateHeaders');
        return $pluginInfo ? $this->___callPlugins('setPrivateHeaders', func_get_args(), $pluginInfo) : parent::setPrivateHeaders($ttl);
    }

    /**
     * {@inheritdoc}
     */
    public function setNoCacheHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNoCacheHeaders');
        return $pluginInfo ? $this->___callPlugins('setNoCacheHeaders', func_get_args(), $pluginInfo) : parent::setNoCacheHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function representJson($content)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'representJson');
        return $pluginInfo ? $this->___callPlugins('representJson', func_get_args(), $pluginInfo) : parent::representJson($content);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeader($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeader');
        return $pluginInfo ? $this->___callPlugins('getHeader', func_get_args(), $pluginInfo) : parent::getHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendResponse');
        return $pluginInfo ? $this->___callPlugins('sendResponse', func_get_args(), $pluginInfo) : parent::sendResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function appendBody($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'appendBody');
        return $pluginInfo ? $this->___callPlugins('appendBody', func_get_args(), $pluginInfo) : parent::appendBody($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBody');
        return $pluginInfo ? $this->___callPlugins('setBody', func_get_args(), $pluginInfo) : parent::setBody($value);
    }

    /**
     * {@inheritdoc}
     */
    public function clearBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearBody');
        return $pluginInfo ? $this->___callPlugins('clearBody', func_get_args(), $pluginInfo) : parent::clearBody();
    }

    /**
     * {@inheritdoc}
     */
    public function setHeader($name, $value, $replace = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeader');
        return $pluginInfo ? $this->___callPlugins('setHeader', func_get_args(), $pluginInfo) : parent::setHeader($name, $value, $replace);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeader($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHeader');
        return $pluginInfo ? $this->___callPlugins('clearHeader', func_get_args(), $pluginInfo) : parent::clearHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function clearHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHeaders');
        return $pluginInfo ? $this->___callPlugins('clearHeaders', func_get_args(), $pluginInfo) : parent::clearHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function setRedirect($url, $code = 302)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRedirect');
        return $pluginInfo ? $this->___callPlugins('setRedirect', func_get_args(), $pluginInfo) : parent::setRedirect($url, $code);
    }

    /**
     * {@inheritdoc}
     */
    public function setHttpResponseCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHttpResponseCode');
        return $pluginInfo ? $this->___callPlugins('setHttpResponseCode', func_get_args(), $pluginInfo) : parent::setHttpResponseCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusHeader($httpCode, $version = null, $phrase = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusHeader');
        return $pluginInfo ? $this->___callPlugins('setStatusHeader', func_get_args(), $pluginInfo) : parent::setStatusHeader($httpCode, $version, $phrase);
    }

    /**
     * {@inheritdoc}
     */
    public function getHttpResponseCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHttpResponseCode');
        return $pluginInfo ? $this->___callPlugins('getHttpResponseCode', func_get_args(), $pluginInfo) : parent::getHttpResponseCode();
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirect()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRedirect');
        return $pluginInfo ? $this->___callPlugins('isRedirect', func_get_args(), $pluginInfo) : parent::isRedirect();
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVersion');
        return $pluginInfo ? $this->___callPlugins('getVersion', func_get_args(), $pluginInfo) : parent::getVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function headersSent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'headersSent');
        return $pluginInfo ? $this->___callPlugins('headersSent', func_get_args(), $pluginInfo) : parent::headersSent();
    }

    /**
     * {@inheritdoc}
     */
    public function contentSent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'contentSent');
        return $pluginInfo ? $this->___callPlugins('contentSent', func_get_args(), $pluginInfo) : parent::contentSent();
    }

    /**
     * {@inheritdoc}
     */
    public function setHeadersSentHandler(callable $handler)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeadersSentHandler');
        return $pluginInfo ? $this->___callPlugins('setHeadersSentHandler', func_get_args(), $pluginInfo) : parent::setHeadersSentHandler($handler);
    }

    /**
     * {@inheritdoc}
     */
    public function sendHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendHeaders');
        return $pluginInfo ? $this->___callPlugins('sendHeaders', func_get_args(), $pluginInfo) : parent::sendHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function sendContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendContent');
        return $pluginInfo ? $this->___callPlugins('sendContent', func_get_args(), $pluginInfo) : parent::sendContent();
    }

    /**
     * {@inheritdoc}
     */
    public function send()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'send');
        return $pluginInfo ? $this->___callPlugins('send', func_get_args(), $pluginInfo) : parent::send();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookie');
        return $pluginInfo ? $this->___callPlugins('getCookie', func_get_args(), $pluginInfo) : parent::getCookie();
    }

    /**
     * {@inheritdoc}
     */
    public function setStatusCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatusCode');
        return $pluginInfo ? $this->___callPlugins('setStatusCode', func_get_args(), $pluginInfo) : parent::setStatusCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatusCode');
        return $pluginInfo ? $this->___callPlugins('getStatusCode', func_get_args(), $pluginInfo) : parent::getStatusCode();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomStatusCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomStatusCode');
        return $pluginInfo ? $this->___callPlugins('setCustomStatusCode', func_get_args(), $pluginInfo) : parent::setCustomStatusCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setReasonPhrase($reasonPhrase)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setReasonPhrase');
        return $pluginInfo ? $this->___callPlugins('setReasonPhrase', func_get_args(), $pluginInfo) : parent::setReasonPhrase($reasonPhrase);
    }

    /**
     * {@inheritdoc}
     */
    public function getReasonPhrase()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReasonPhrase');
        return $pluginInfo ? $this->___callPlugins('getReasonPhrase', func_get_args(), $pluginInfo) : parent::getReasonPhrase();
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBody');
        return $pluginInfo ? $this->___callPlugins('getBody', func_get_args(), $pluginInfo) : parent::getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function isClientError()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isClientError');
        return $pluginInfo ? $this->___callPlugins('isClientError', func_get_args(), $pluginInfo) : parent::isClientError();
    }

    /**
     * {@inheritdoc}
     */
    public function isForbidden()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isForbidden');
        return $pluginInfo ? $this->___callPlugins('isForbidden', func_get_args(), $pluginInfo) : parent::isForbidden();
    }

    /**
     * {@inheritdoc}
     */
    public function isInformational()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInformational');
        return $pluginInfo ? $this->___callPlugins('isInformational', func_get_args(), $pluginInfo) : parent::isInformational();
    }

    /**
     * {@inheritdoc}
     */
    public function isNotFound()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isNotFound');
        return $pluginInfo ? $this->___callPlugins('isNotFound', func_get_args(), $pluginInfo) : parent::isNotFound();
    }

    /**
     * {@inheritdoc}
     */
    public function isGone()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isGone');
        return $pluginInfo ? $this->___callPlugins('isGone', func_get_args(), $pluginInfo) : parent::isGone();
    }

    /**
     * {@inheritdoc}
     */
    public function isOk()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOk');
        return $pluginInfo ? $this->___callPlugins('isOk', func_get_args(), $pluginInfo) : parent::isOk();
    }

    /**
     * {@inheritdoc}
     */
    public function isServerError()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isServerError');
        return $pluginInfo ? $this->___callPlugins('isServerError', func_get_args(), $pluginInfo) : parent::isServerError();
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccess()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuccess');
        return $pluginInfo ? $this->___callPlugins('isSuccess', func_get_args(), $pluginInfo) : parent::isSuccess();
    }

    /**
     * {@inheritdoc}
     */
    public function renderStatusLine()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renderStatusLine');
        return $pluginInfo ? $this->___callPlugins('renderStatusLine', func_get_args(), $pluginInfo) : parent::renderStatusLine();
    }

    /**
     * {@inheritdoc}
     */
    public function toString()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString();
    }

    /**
     * {@inheritdoc}
     */
    public function setVersion($version)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVersion');
        return $pluginInfo ? $this->___callPlugins('setVersion', func_get_args(), $pluginInfo) : parent::setVersion($version);
    }

    /**
     * {@inheritdoc}
     */
    public function setHeaders(\Laminas\Http\Headers $headers)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHeaders');
        return $pluginInfo ? $this->___callPlugins('setHeaders', func_get_args(), $pluginInfo) : parent::setHeaders($headers);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHeaders');
        return $pluginInfo ? $this->___callPlugins('getHeaders', func_get_args(), $pluginInfo) : parent::getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__toString');
        return $pluginInfo ? $this->___callPlugins('__toString', func_get_args(), $pluginInfo) : parent::__toString();
    }

    /**
     * {@inheritdoc}
     */
    public function setMetadata($spec, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMetadata');
        return $pluginInfo ? $this->___callPlugins('setMetadata', func_get_args(), $pluginInfo) : parent::setMetadata($spec, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata($key = null, $default = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadata');
        return $pluginInfo ? $this->___callPlugins('getMetadata', func_get_args(), $pluginInfo) : parent::getMetadata($key, $default);
    }

    /**
     * {@inheritdoc}
     */
    public function setContent($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setContent');
        return $pluginInfo ? $this->___callPlugins('setContent', func_get_args(), $pluginInfo) : parent::setContent($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getContent');
        return $pluginInfo ? $this->___callPlugins('getContent', func_get_args(), $pluginInfo) : parent::getContent();
    }
}
