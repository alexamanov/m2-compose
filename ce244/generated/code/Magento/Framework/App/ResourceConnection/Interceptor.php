<?php
namespace Magento\Framework\App\ResourceConnection;

/**
 * Interceptor class for @see \Magento\Framework\App\ResourceConnection
 */
class Interceptor extends \Magento\Framework\App\ResourceConnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection\ConfigInterface $resourceConfig, \Magento\Framework\Model\ResourceModel\Type\Db\ConnectionFactoryInterface $connectionFactory, \Magento\Framework\App\DeploymentConfig $deploymentConfig, $tablePrefix = '')
    {
        $this->___init();
        parent::__construct($resourceConfig, $connectionFactory, $deploymentConfig, $tablePrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection($resourceName = 'default')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection($resourceName);
    }

    /**
     * {@inheritdoc}
     */
    public function closeConnection($resourceName = 'default')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'closeConnection');
        return $pluginInfo ? $this->___callPlugins('closeConnection', func_get_args(), $pluginInfo) : parent::closeConnection($resourceName);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnectionByName($connectionName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnectionByName');
        return $pluginInfo ? $this->___callPlugins('getConnectionByName', func_get_args(), $pluginInfo) : parent::getConnectionByName($connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName($modelEntity, $connectionName = 'default')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTableName');
        return $pluginInfo ? $this->___callPlugins('getTableName', func_get_args(), $pluginInfo) : parent::getTableName($modelEntity, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function getTablePlaceholder($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablePlaceholder');
        return $pluginInfo ? $this->___callPlugins('getTablePlaceholder', func_get_args(), $pluginInfo) : parent::getTablePlaceholder($tableName);
    }

    /**
     * {@inheritdoc}
     */
    public function getTriggerName($tableName, $time, $event)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTriggerName');
        return $pluginInfo ? $this->___callPlugins('getTriggerName', func_get_args(), $pluginInfo) : parent::getTriggerName($tableName, $time, $event);
    }

    /**
     * {@inheritdoc}
     */
    public function setMappedTableName($tableName, $mappedName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMappedTableName');
        return $pluginInfo ? $this->___callPlugins('setMappedTableName', func_get_args(), $pluginInfo) : parent::setMappedTableName($tableName, $mappedName);
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedTableName($tableName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedTableName');
        return $pluginInfo ? $this->___callPlugins('getMappedTableName', func_get_args(), $pluginInfo) : parent::getMappedTableName($tableName);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdxName($tableName, $fields, $indexType = 'index')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdxName');
        return $pluginInfo ? $this->___callPlugins('getIdxName', func_get_args(), $pluginInfo) : parent::getIdxName($tableName, $fields, $indexType);
    }

    /**
     * {@inheritdoc}
     */
    public function getFkName($priTableName, $priColumnName, $refTableName, $refColumnName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFkName');
        return $pluginInfo ? $this->___callPlugins('getFkName', func_get_args(), $pluginInfo) : parent::getFkName($priTableName, $priColumnName, $refTableName, $refColumnName);
    }

    /**
     * {@inheritdoc}
     */
    public function getSchemaName($resourceName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSchemaName');
        return $pluginInfo ? $this->___callPlugins('getSchemaName', func_get_args(), $pluginInfo) : parent::getSchemaName($resourceName);
    }

    /**
     * {@inheritdoc}
     */
    public function getTablePrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablePrefix');
        return $pluginInfo ? $this->___callPlugins('getTablePrefix', func_get_args(), $pluginInfo) : parent::getTablePrefix();
    }
}
