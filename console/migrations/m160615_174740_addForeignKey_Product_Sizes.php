<?php

use yii\db\Migration;

class m160615_174740_addForeignKey_Product_Sizes extends Migration
{
    public function safeUp()
    {
        $fK = 'Product_Sizes_FK';
        $subTable = 'Sizes';
        $subColumn = 'idProduct';
        $mainTable = 'Product';
        $mainColumn = 'idProduct';
        $onDelete = 'RESTRICT';
        $onUpdate = 'CASCADE';
        $this->addForeignKey($fK,$subTable,$subColumn,$mainTable,$mainColumn,$onDelete,$onUpdate);
    }

    public function safeDown()
    {
        $fK = 'Product_Sizes_FK';
        $subTable = 'Sizes';
        $this->dropForeignKey($fK,$subTable);

    }
}
