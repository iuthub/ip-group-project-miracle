<?php

use yii\db\Migration;

/**
 * Class m200214_174537_create_add_column_prices
 */
class m200214_174537_create_add_column_prices extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('prices', 'course_name', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('prices',  $this->string() );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200214_174537_create_add_column_prices cannot be reverted.\n";

        return false;
    }
    */
}
