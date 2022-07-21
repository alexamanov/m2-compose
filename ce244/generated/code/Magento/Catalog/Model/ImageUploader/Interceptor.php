<?php
namespace Magento\Catalog\Model\ImageUploader;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ImageUploader
 */
class Interceptor extends \Magento\Catalog\Model\ImageUploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes = [], ?\Magento\Framework\File\Name $fileNameLookup = null)
    {
        $this->___init();
        parent::__construct($coreFileStorageDatabase, $filesystem, $uploaderFactory, $storeManager, $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes, $fileNameLookup);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTmpPath($baseTmpPath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTmpPath');
        return $pluginInfo ? $this->___callPlugins('setBaseTmpPath', func_get_args(), $pluginInfo) : parent::setBaseTmpPath($baseTmpPath);
    }

    /**
     * {@inheritdoc}
     */
    public function setBasePath($basePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBasePath');
        return $pluginInfo ? $this->___callPlugins('setBasePath', func_get_args(), $pluginInfo) : parent::setBasePath($basePath);
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedExtensions($allowedExtensions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowedExtensions');
        return $pluginInfo ? $this->___callPlugins('setAllowedExtensions', func_get_args(), $pluginInfo) : parent::setAllowedExtensions($allowedExtensions);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTmpPath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTmpPath');
        return $pluginInfo ? $this->___callPlugins('getBaseTmpPath', func_get_args(), $pluginInfo) : parent::getBaseTmpPath();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasePath');
        return $pluginInfo ? $this->___callPlugins('getBasePath', func_get_args(), $pluginInfo) : parent::getBasePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedExtensions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedExtensions');
        return $pluginInfo ? $this->___callPlugins('getAllowedExtensions', func_get_args(), $pluginInfo) : parent::getAllowedExtensions();
    }

    /**
     * {@inheritdoc}
     */
    public function getFilePath($path, $imageName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilePath');
        return $pluginInfo ? $this->___callPlugins('getFilePath', func_get_args(), $pluginInfo) : parent::getFilePath($path, $imageName);
    }

    /**
     * {@inheritdoc}
     */
    public function moveFileFromTmp($imageName, $returnRelativePath = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveFileFromTmp');
        return $pluginInfo ? $this->___callPlugins('moveFileFromTmp', func_get_args(), $pluginInfo) : parent::moveFileFromTmp($imageName, $returnRelativePath);
    }

    /**
     * {@inheritdoc}
     */
    public function saveFileToTmpDir($fileId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveFileToTmpDir');
        return $pluginInfo ? $this->___callPlugins('saveFileToTmpDir', func_get_args(), $pluginInfo) : parent::saveFileToTmpDir($fileId);
    }
}
