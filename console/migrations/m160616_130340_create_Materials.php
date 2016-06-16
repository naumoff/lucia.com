<?php

use yii\db\Migration;

/**
 * Handles the creation for table `materials`.
 */
class m160616_130340_create_Materials extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('Materials', [
            'idMaterial' => $this->primaryKey(),
            'Material' => $this->string(12)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('Materials');
    }
}
