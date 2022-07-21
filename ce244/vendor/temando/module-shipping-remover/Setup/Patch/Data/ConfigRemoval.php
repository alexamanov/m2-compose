<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Temando\ShippingRemover\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Removes configuration for Temando_Shipping module.
 */
class ConfigRemoval implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $setup;

    public function __construct(
        ModuleDataSetupInterface $setup
    ) {
        $this->setup = $setup;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function apply()
    {
        try {
            $connection = $this->setup->getConnection();
            $configTable = $connection->getTableName('core_config_data');
            $connection->delete($configTable, "`path` LIKE 'carriers/temando/%'");
        } catch (\Exception $e) {
            // ignore
        }
    }
}
