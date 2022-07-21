<?php
namespace Magento\Integration\Model\IntegrationService;

/**
 * Interceptor class for @see \Magento\Integration\Model\IntegrationService
 */
class Interceptor extends \Magento\Integration\Model\IntegrationService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\IntegrationFactory $integrationFactory, \Magento\Integration\Api\OauthServiceInterface $oauthService)
    {
        $this->___init();
        parent::__construct($integrationFactory, $oauthService);
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($integrationData);
    }

    /**
     * {@inheritdoc}
     */
    public function update(array $integrationData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($integrationData);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($integrationId);
    }

    /**
     * {@inheritdoc}
     */
    public function get($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($integrationId);
    }

    /**
     * {@inheritdoc}
     */
    public function findByName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findByName');
        return $pluginInfo ? $this->___callPlugins('findByName', func_get_args(), $pluginInfo) : parent::findByName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function findByConsumerId($consumerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findByConsumerId');
        return $pluginInfo ? $this->___callPlugins('findByConsumerId', func_get_args(), $pluginInfo) : parent::findByConsumerId($consumerId);
    }

    /**
     * {@inheritdoc}
     */
    public function findActiveIntegrationByConsumerId($consumerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'findActiveIntegrationByConsumerId');
        return $pluginInfo ? $this->___callPlugins('findActiveIntegrationByConsumerId', func_get_args(), $pluginInfo) : parent::findActiveIntegrationByConsumerId($consumerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedResources($integrationId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectedResources');
        return $pluginInfo ? $this->___callPlugins('getSelectedResources', func_get_args(), $pluginInfo) : parent::getSelectedResources($integrationId);
    }
}
