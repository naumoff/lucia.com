<?php

use yii\db\Migration;

/**
 * Handles the creation for table `product`.
 */
class m160615_152139_create_Product extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Product', [
            'idProduct' => $this->primaryKey(),
            'idCategory' => $this->integer(11)->notNull(),
            'idProduction' => $this->integer(11)->notNull(),
            'ProductName' => $this->string(45)->notNull(),
            'Description' => $this->text(),
            'BasePrice' => $this->decimal(8,2)->notNull()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Product');
    }
}
