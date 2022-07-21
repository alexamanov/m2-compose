<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\GoogleShoppingAds\Setup;

use Magento\Framework\Mview\View;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Class for module data upgrades
 */
class UpgradeData implements
    \Magento\Framework\Setup\UpgradeDataInterface,
    \Magento\Framework\Setup\Patch\PatchVersionInterface
{
    /**
     * @var \Magento\Eav\Setup\EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * @var \Magento\Framework\Indexer\IndexerRegistry
     */
    private $indexerRegistry;
    /**
     * @var \Magento\Framework\Mview\ViewInterfaceFactory
     */
    private $viewFactory;

    /**
     * @param \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     * @param \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry
     * @param \Magento\Framework\Mview\ViewInterfaceFactory $viewFactory
     */
    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry,
        \Magento\Framework\Mview\ViewInterfaceFactory $viewFactory
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->indexerRegistry = $indexerRegistry;
        $this->viewFactory = $viewFactory;
    }

    /**
     * @inheritdoc
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '4.0.1', '<')) {
            /** @var \Magento\Eav\Setup\EavSetup $eavSetup */
            $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
            $eavSetup->removeAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'merchant_center_category'
            );
            $configsToDelete = [
                'sales_channels/sales_channel_integration/additional_headers',
                'sales_channels/sales_channel_integration/api_key',
                'sales_channels/sales_channel_integration/bypass_key_check',
                'sales_channels/sales_channel_integration/enable_service_logs',
                'sales_channels/sales_channel_integration/frontend_url',
                'sales_channels/sales_channel_integration/gateway_path',
                'sales_channels/sales_channel_integration/gateway_url',
                'sales_channels/sales_channel_integration/gtag',
                'sales_channels/sales_channel_integration/service_path',
                'sales_channels/sales_channel_integration/unique_id',
                'sales_channels/sales_channel_integration/verification_configs',
                'scconnector/google/gtag',
                'scconnector/google/verification_configs',
            ];
            foreach ($configsToDelete as $configPath) {
                $setup->deleteTableRow(
                    'core_config_data',
                    'path',
                    $configPath
                );
            }
        }
    }

    public static function getVersion()
    {
        return '4.0.1';
    }
}
