<?php

use yii\db\Migration;

class m160615_173746_addForeignKey_Production_Product extends Migration
{
    public function safeUp()
    {
        $fK = 'Production_Product_FK';
        $subTable = 'Product';
        $subColumn = 'idProduction';
        $mainTable = 'Production';
        $mainColumn = 'idProduction';
        $onDelete = 'RESTRICT';
        $onUpdate = 'CASCADE';
        $this->addForeignKey($fK,$subTable,$subColumn,$mainTable,$mainColumn,$onDelete,$onUpdate);
    }

    public function safeDown()
    {
        $fK = 'Production_Product_FK';
        $subTable = 'Product';
        $this->dropForeignKey($fK,$subTable);
    }
}
