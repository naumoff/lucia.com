<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product_techniques`.
 * Has foreign keys to the tables:
 *
 * - `product`
 * - `techniques`
 */
class m160616_133547_create_junction_Product_and_Techniques extends Migration
{
    /**
     * @inheritdoc
     */
    public function SafeUp()
    {
        $this->createTable('Product_Techniques', [
            'idProduct' => $this->integer(11),
            'idTechnique' => $this->integer(11),
            'Availability' => $this->boolean()->notNull()->unique(),
            'PriceCorrection'=>$this->decimal(8,2)->defaultValue(0),
            'PRIMARY KEY(idProduct, idTechnique)',
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-product_techniques-product_id',
            'Product_Techniques',
            'idProduct'
        );

        // add foreign key for table `product`
        $this->addForeignKey(
            'fk-product_techniques-product_id',
            'Product_Techniques',
            'idProduct',
            'Product',
            'idProduct',
            'RESTRICT',
            'CASCADE'
        );

        // creates index for column `techniques_id`
        $this->createIndex(
            'idx-product_techniques-techniques_id',
            'Product_Techniques',
            'idTechnique'
        );

        // add foreign key for table `techniques`
        $this->addForeignKey(
            'fk-product_techniques-techniques_id',
            'Product_Techniques',
            'idTechnique',
            'Techniques',
            'idTechnique',
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
            'fk-product_techniques-product_id',
            'Product_Techniques'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-product_techniques-product_id',
            'Product_Techniques'
        );

        // drops foreign key for table `techniques`
        $this->dropForeignKey(
            'fk-product_techniques-techniques_id',
            'Product_Techniques'
        );

        // drops index for column `techniques_id`
        $this->dropIndex(
            'idx-product_techniques-techniques_id',
            'Product_Techniques'
        );

        $this->dropTable('Product_Techniques');
    }
}
