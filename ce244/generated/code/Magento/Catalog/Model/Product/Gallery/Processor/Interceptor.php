<?php
namespace Magento\Catalog\Model\Product\Gallery\Processor;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\Processor
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel, ?\Magento\Framework\File\Mime $mime = null)
    {
        $this->___init();
        parent::__construct($attributeRepository, $fileStorageDb, $mediaConfig, $filesystem, $resourceModel, $mime);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(\Magento\Catalog\Model\Product $product, $file, $mediaAttribute = null, $move = false, $exclude = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addImage');
        return $pluginInfo ? $this->___callPlugins('addImage', func_get_args(), $pluginInfo) : parent::addImage($product, $file, $mediaAttribute, $move, $exclude);
    }

    /**
     * {@inheritdoc}
     */
    public function updateImage(\Magento\Catalog\Model\Product $product, $file, $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateImage');
        return $pluginInfo ? $this->___callPlugins('updateImage', func_get_args(), $pluginInfo) : parent::updateImage($product, $file, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeImage');
        return $pluginInfo ? $this->___callPlugins('removeImage', func_get_args(), $pluginInfo) : parent::removeImage($product, $file);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $file);
    }

    /**
     * {@inheritdoc}
     */
    public function clearMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearMediaAttribute');
        return $pluginInfo ? $this->___callPlugins('clearMediaAttribute', func_get_args(), $pluginInfo) : parent::clearMediaAttribute($product, $mediaAttribute);
    }

    /**
     * {@inheritdoc}
     */
    public function setMediaAttribute(\Magento\Catalog\Model\Product $product, $mediaAttribute, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMediaAttribute');
        return $pluginInfo ? $this->___callPlugins('setMediaAttribute', func_get_args(), $pluginInfo) : parent::setMediaAttribute($product, $mediaAttribute, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaAttributeCodes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaAttributeCodes');
        return $pluginInfo ? $this->___callPlugins('getMediaAttributeCodes', func_get_args(), $pluginInfo) : parent::getMediaAttributeCodes();
    }

    /**
     * {@inheritdoc}
     */
    public function duplicateImageFromTmp($file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'duplicateImageFromTmp');
        return $pluginInfo ? $this->___callPlugins('duplicateImageFromTmp', func_get_args(), $pluginInfo) : parent::duplicateImageFromTmp($file);
    }

    /**
     * {@inheritdoc}
     */
    public function getAffectedFields($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAffectedFields');
        return $pluginInfo ? $this->___callPlugins('getAffectedFields', func_get_args(), $pluginInfo) : parent::getAffectedFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function isScalar()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScalar');
        return $pluginInfo ? $this->___callPlugins('isScalar', func_get_args(), $pluginInfo) : parent::isScalar();
    }
}
