<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product_colors`.
 * Has foreign keys to the tables:
 *
 * - `product`
 * - `colors`
 */
class m160616_114548_create_junction_Product_and_Colors extends Migration
{
    /**
     * @inheritdoc
     */
    public function SafeUp()
    {
        $this->createTable('Product_Colors', [
            'idProduct' => $this->integer(11),
            'idColor' => $this->integer(11),
            'Availability' => $this->boolean()->notNull()->defaultValue(true),
            'PriceCorrection' => $this->decimal(8,2)->notNull()->defaultValue(0),
            'PRIMARY KEY(idProduct, idColor)',
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-product_colors-product_id',
            'Product_Colors',
            'idProduct'
        );

        // add foreign key for table `product`
        $this->addForeignKey(
            'fk-product_colors-product_id',
            'Product_Colors',
            'idProduct',
            'Product',
            'idProduct',
            'RESTRICT',
            'CASCADE'
        );

        // creates index for column `colors_id`
        $this->createIndex(
            'idx-product_colors-colors_id',
            'Product_Colors',
            'idColor'
        );

        // add foreign key for table `colors`
        $this->addForeignKey(
            'fk-product_colors-colors_id',
            'Product_Colors',
            'idColor',
            'Colors',
            'idColor',
            'RESTRICT',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function SafeDown()
    {
        // drops foreign key for table `product`
        $this->dropForeignKey(
            'fk-product_colors-product_id',
            'Product_Colors'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-product_colors-product_id',
            'Product_Colors'
        );

        // drops foreign key for table `colors`
        $this->dropForeignKey(
            'fk-product_colors-colors_id',
            'Product_Colors'
        );

        // drops index for column `colors_id`
        $this->dropIndex(
            'idx-product_colors-colors_id',
            'Product_Colors'
        );

        $this->dropTable('Product_Colors');
    }
}
