<?php

use yii\db\Migration;

/**
 * Class m201112_205815_db_init
 */
class m201112_205815_db_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201112_205815_db_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201112_205815_db_init cannot be reverted.\n";

        return false;
    }
    */
}
