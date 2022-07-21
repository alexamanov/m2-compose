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
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class for module data upgrades
 */
class Recurring implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * @var \Magento\Framework\Indexer\IndexerRegistry
     */
    private $indexerRegistry;
    /**
     * @var \Magento\Framework\Mview\ViewInterfaceFactory
     */
    private $viewFactory;

    /**
     * @param \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry
     * @param \Magento\Framework\Mview\ViewInterfaceFactory $viewFactory
     */
    public function __construct(
        \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry,
        \Magento\Framework\Mview\ViewInterfaceFactory $viewFactory
    ) {
        $this->indexerRegistry = $indexerRegistry;
        $this->viewFactory = $viewFactory;
    }

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '4.0.1', '<')) {
            foreach (['scconnector_google_feed', 'scconnector_google_remove'] as $indexerId) {
                try {
                    $indexer = $this->indexerRegistry->get($indexerId);
                    $indexer->setScheduled(false);
                } catch (\Exception $e) {
                    //ignore if indexers were removed
                }
                try {
                    /** @var View $view */
                    $view = $this->viewFactory->create();
                    $view->load($indexerId);
                    $view->unsubscribe();
                } catch (\Exception $e) {
                    //ignore if mview were removed
                }
            }

            foreach (['scconnector_google_feed_cl', 'scconnector_google_remove_cl'] as $table) {
                $setup->getConnection()->dropTable($setup->getTable($table));
            }
        }
    }
}
