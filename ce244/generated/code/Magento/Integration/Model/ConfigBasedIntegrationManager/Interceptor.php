<?php
namespace Magento\Integration\Model\ConfigBasedIntegrationManager;

/**
 * Interceptor class for @see \Magento\Integration\Model\ConfigBasedIntegrationManager
 */
class Interceptor extends \Magento\Integration\Model\ConfigBasedIntegrationManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Api\IntegrationServiceInterface $integrationService, \Magento\Authorization\Model\Acl\AclRetriever $aclRetriever, \Magento\Integration\Model\Config $integrationConfig)
    {
        $this->___init();
        parent::__construct($integrationService, $aclRetriever, $integrationConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function processIntegrationConfig(array $integrationNames)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processIntegrationConfig');
        return $pluginInfo ? $this->___callPlugins('processIntegrationConfig', func_get_args(), $pluginInfo) : parent::processIntegrationConfig($integrationNames);
    }

    /**
     * {@inheritdoc}
     */
    public function processConfigBasedIntegrations(array $integrations)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processConfigBasedIntegrations');
        return $pluginInfo ? $this->___callPlugins('processConfigBasedIntegrations', func_get_args(), $pluginInfo) : parent::processConfigBasedIntegrations($integrations);
    }
}
