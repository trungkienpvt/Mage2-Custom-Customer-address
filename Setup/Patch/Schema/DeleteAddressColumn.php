<?php
/**
 * Copyright © 2019 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Dev69\CustomerAddress\Setup\Patch\Schema;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class DeleteAddressColumn implements SchemaPatchInterface
{
    private $moduleDataSetup;


    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }


    public static function getDependencies()
    {
        return [];
    }


    public function getAliases()
    {
        return [];
    }


    public function apply()
    {
//        $this->moduleDataSetup->startSetup();
//
//        $this->moduleDataSetup->getConnection()->dropColumn(
//            $this->moduleDataSetup->getTable('quote_address'),
//            'address_2',
//            $schemaName = null
//        );
//
//        $this->moduleDataSetup->getConnection()->dropColumn(
//            $this->moduleDataSetup->getTable('sales_order_address'),
//            'address_2',
//            $schemaName = null
//        );
//
//        $this->moduleDataSetup->endSetup();
    }
}
