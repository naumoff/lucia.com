<?php

use yii\db\Migration;

class m160616_135049_change_Materials extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('Materials','Material');
        $this->addColumn('Materials','Material',
            $this->string(60)->notNull()->unique());
    }

    public function safeDown()
    {
        return FALSE;
    }

}
