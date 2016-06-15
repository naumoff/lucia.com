<?php

use yii\db\Migration;

/**
 * Handles the creation for table `sizes`.
 */
class m160615_154446_create_Sizes extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Sizes', [
            'idSize' => $this->primaryKey(),
            'idProduct' => $this->integer(11)->notNull(),
            'Size' => $this->string(45)->notNull(),
            'Availability' => $this->boolean()->notNull()->defaultValue(true),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('Sizes');
    }
}
