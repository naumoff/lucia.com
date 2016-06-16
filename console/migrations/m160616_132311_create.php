<?php

use yii\db\Migration;

class m160616_132311_create extends Migration
{
    public function SafeUp()
    {
        $this->createTable('Techniques',[
        'idTechnique' => $this->primaryKey(11),
        'Technique' => $this->string(35)->unique()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('Techniques');
    }


}
