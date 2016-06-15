<?php

use yii\db\Migration;

/**
 * Handles adding PriceCorrection to table `sizes`.
 */
class m160615_155827_add_PriceCorrection_to_Sizes extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('Sizes', 'PriceCorrection',$this->decimal(8,2)->notNull()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('Sizes', 'PriceCorrection');
    }
}
