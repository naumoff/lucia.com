<?php

use yii\db\Migration;

/**
 * Handles the creation for table `table_production`.
 */
class m160615_144510_create_table_Production extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Production', [
            'idProduction' => $this->primaryKey(),
            'Status'=>$this->string(15)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('Production');
    }
}
