<?php

use yii\db\Migration;

/**
 * Class m200215_163253_create_drop_columns_prices
 */
class m200215_163253_create_drop_columns_prices extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('prices', 'created_at');
        $this->dropColumn('prices', 'updated_at');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200215_163253_create_drop_columns_prices cannot be reverted.\n";

        return false;
    }
    */
}
