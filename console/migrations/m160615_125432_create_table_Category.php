<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation for table `table_category`.
 */
class m160615_125432_create_table_Category extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Category', [
            'idCategory' => Schema::TYPE_PK,
            'Category' => Schema::TYPE_CHAR
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('Category');
    }
}
