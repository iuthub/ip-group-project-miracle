<?php

use yii\db\Migration;

/**
 * Class m200212_050622_create_add_columns_sliders
 */
class m200212_050622_create_add_columns_sliders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('sliders', 'item1', $this->string());
        $this->addColumn('sliders', 'item2', $this->string());
        $this->addColumn('sliders', 'item3', $this->string());
        $this->addColumn('sliders', 'item4', $this->string());
        $this->addColumn('sliders', 'item5', $this->string());
        $this->addColumn('sliders', 'item6', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('sliders', 'item1');
        $this->dropColumn('sliders', 'item2');
        $this->dropColumn('sliders', 'item3');
        $this->dropColumn('sliders', 'item4');
        $this->dropColumn('sliders', 'item5');
        $this->dropColumn('sliders', 'item6');



//        echo "m200212_050622_create_add_columns_sliders cannot be reverted.\n";
//
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200212_050622_create_add_columns_sliders cannot be reverted.\n";

        return false;
    }
    */
}
