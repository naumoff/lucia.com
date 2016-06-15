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
    public function up()
    {
        $this->createTable('table_production', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('table_production');
    }
}
