<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Temando\ShippingRemover\Setup\Patch\Data;

use Magento\Catalog\Model\Product;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Removes EAV attributes create by Temando_Shipping module.
 */
class AttributesRemoval implements DataPatchInterface
{
    const ATTRIBUTE_CODE_LENGTH = 'ts_dimensions_length';
    const ATTRIBUTE_CODE_WIDTH = 'ts_dimensions_width';
    const ATTRIBUTE_CODE_HEIGHT = 'ts_dimensions_height';
    const ATTRIBUTE_CODE_PACKAGING_TYPE = 'ts_packaging_type';
    const ATTRIBUTE_CODE_PACKAGING_ID = 'ts_packaging_id';
    const ATTRIBUTE_CODE_HS_CODE = 'ts_hs_code';
    const ATTRIBUTE_CODE_COUNTRY_OF_ORIGIN = 'ts_country_of_origin';

    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    public function __construct(
        EavSetupFactory $eavSetupFactory
    ) {
        $this->eavSetupFactory = $eavSetupFactory;
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
        /**
         * @var EavSetup $eavSetup
         */
        $eavSetup = $this->eavSetupFactory->create();
        foreach ([
            self::ATTRIBUTE_CODE_HEIGHT,
            self::ATTRIBUTE_CODE_WIDTH,
            self::ATTRIBUTE_CODE_LENGTH,
            self::ATTRIBUTE_CODE_PACKAGING_TYPE,
            self::ATTRIBUTE_CODE_PACKAGING_ID,
            self::ATTRIBUTE_CODE_HS_CODE,
            self::ATTRIBUTE_CODE_COUNTRY_OF_ORIGIN
        ] as $attribute) {
            try {
                $eavSetup->removeAttribute(Product::ENTITY, $attribute);
            } catch (\Exception $e) {
                // ignore
            }
        }
    }
}
