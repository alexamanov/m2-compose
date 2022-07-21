<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Temando\ShippingRemover\Setup\Patch\Schema;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;

/**
 * Removes unused tables created by Temando_Shipping module.
 */
class EmptyTablesRemoval implements SchemaPatchInterface
{
    const CONNECTION_DEFAULT = 'default';
    const CONNECTION_CHECKOUT = 'checkout';
    const CONNECTION_SALES = 'sales';

    const TABLE_SHIPMENT = 'temando_shipment';
    const TABLE_ORDER = 'temando_order';
    const TABLE_CHECKOUT_ADDRESS = 'temando_checkout_address';

    const TABLE_COLLECTION_POINT_SEARCH = 'temando_collection_point_search';
    const TABLE_QUOTE_COLLECTION_POINT = 'temando_quote_collection_point';
    const TABLE_ORDER_COLLECTION_POINT = 'temando_order_collection_point';

    const TABLE_PICKUP_LOCATION_SEARCH = 'temando_pickup_location_search';
    const TABLE_QUOTE_PICKUP_LOCATION = 'temando_quote_pickup_location';
    const TABLE_ORDER_PICKUP_LOCATION = 'temando_order_pickup_location';

    const TABLE_PRODUCT_ATTRIBUTE_MAPPING = 'temando_product_attribute_mapping';

    const TABLE_RMA_SHIPMENT = 'temando_rma_shipment';

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
        $this->removeNotUsedTable(self::CONNECTION_SALES, self::TABLE_ORDER);
        $this->removeNotUsedTable(self::CONNECTION_SALES, self::TABLE_SHIPMENT);

        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_QUOTE_COLLECTION_POINT);
        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_COLLECTION_POINT_SEARCH);
        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_ORDER_COLLECTION_POINT);

        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_QUOTE_PICKUP_LOCATION);
        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_PICKUP_LOCATION_SEARCH);
        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_ORDER_PICKUP_LOCATION);

        $this->removeNotUsedTable(self::CONNECTION_CHECKOUT, self::TABLE_CHECKOUT_ADDRESS);

        $this->removeNotUsedTable(self::CONNECTION_DEFAULT, self::TABLE_RMA_SHIPMENT);
    }

    /**
     * Removes empty tables created by Temando extension.
     *
     * @param string $connection
     * @param string $table
     */
    private function removeNotUsedTable(string $connection, string $table): void
    {
        try {
            $connection = $this->setup->getConnection($connection);
            $table = $connection->getTableName($table);

            if (!$connection->isTableExists($table)) {
                return;
            }

            $rowsCount = $connection->fetchOne(
                $connection->select()->from($table, 'COUNT(*)')
            );
            if (!$rowsCount) {
                $connection->dropTable($table);
            }
        } catch (\Exception $e) {
            // ignore
        }
    }
}