<?php

use yii\db\Migration;

class m160615_165856_addForeignKey_Category_Product extends Migration
{
    public function safeUp()
    {
        $fK = 'Category_Product_FK';
        $subTable = 'Product';
        $subColumn = 'idCategory';
        $mainTable = 'Category';
        $mainColumn = 'idCategory';
        $onDelete = 'RESTRICT';
        $onUpdate = 'CASCADE';
        $this->addForeignKey($fK,$subTable,$subColumn,$mainTable,$mainColumn,$onDelete,$onUpdate);
    }

    public function safeDown()
    {
        $fK = 'Category_Product_FK';
        $subTable = 'Product';
        $this->dropForeignKey($fK,$subTable);
    }

}
