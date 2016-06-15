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
            'Category' => $this->string(9)->notNull(),
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
