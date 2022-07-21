<?php
namespace Magento\Framework\Search\Request\Config\FilesystemReader;

/**
 * Interceptor class for @see \Magento\Framework\Search\Request\Config\FilesystemReader
 */
class Interceptor extends \Magento\Framework\Search\Request\Config\FilesystemReader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\FileResolverInterface $fileResolver, \Magento\Framework\Search\Request\Config\Converter $converter, \Magento\Framework\Search\Request\Config\SchemaLocator $schemaLocator, \Magento\Framework\Config\ValidationStateInterface $validationState, $fileName = 'search_request.xml', $idAttributes = [], $domDocumentClass = 'Magento\\Framework\\Config\\Dom', $defaultScope = 'global')
    {
        $this->___init();
        parent::__construct($fileResolver, $converter, $schemaLocator, $validationState, $fileName, $idAttributes, $domDocumentClass, $defaultScope);
    }

    /**
     * {@inheritdoc}
     */
    public function read($scope = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'read');
        return $pluginInfo ? $this->___callPlugins('read', func_get_args(), $pluginInfo) : parent::read($scope);
    }
}
