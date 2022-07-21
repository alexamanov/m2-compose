<?php
namespace Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection;

/**
 * Factory class for @see \Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\SearchResultApplier
 */
class SearchResultApplierFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection\\SearchResultApplier')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\SearchResultApplier
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
