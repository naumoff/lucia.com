<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product_materials`.
 * Has foreign keys to the tables:
 *
 * - `product`
 * - `materials`
 */
class m160616_131116_create_junction_Product_and_Materials extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Product_Materials', [
            'idProduct' => $this->integer(11),
            'idMaterial' => $this->integer(11),
            'Availability' => $this->boolean()->notNull()->defaultValue(true),
            'PriceCorrection' => $this->decimal(8,2)->notNull()->defaultValue(0),
            'PRIMARY KEY(idProduct, idMaterial)',
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-product_materials-product_id',
            'Product_Materials',
            'idProduct'
        );

        // add foreign key for table `product`
        $this->addForeignKey(
            'fk-product_materials-product_id',
            'Product_Materials',
            'idProduct',
            'Product',
            'idProduct',
            'RESTRICT',
            'CASCADE'
        );

        // creates index for column `materials_id`
        $this->createIndex(
            'idx-product_materials-materials_id',
            'Product_Materials',
            'idMaterial'
        );

        // add foreign key for table `materials`
        $this->addForeignKey(
            'fk-product_materials-materials_id',
            'Product_Materials',
            'idMaterial',
            'Materials',
            'idMaterial',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        // drops foreign key for table `product`
        $this->dropForeignKey(
            'fk-product_materials-product_id',
            'Product_Materials'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-product_materials-product_id',
            'Product_Materials'
        );

        // drops foreign key for table `materials`
        $this->dropForeignKey(
            'fk-product_materials-materials_id',
            'Product_Materials'
        );

        // drops index for column `materials_id`
        $this->dropIndex(
            'idx-product_materials-materials_id',
            'Product_Materials'
        );

        $this->dropTable('Product_Materials');
    }
}
