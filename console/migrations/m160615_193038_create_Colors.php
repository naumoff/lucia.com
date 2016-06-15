<?php

use yii\db\Migration;

/**
 * Handles the creation for table `colors`.
 */
class m160615_193038_create_Colors extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Colors', [
            'idColor' => $this->primaryKey(),
            'Color' => $this->string(35)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('Colors');
    }
}
