<?php

use yii\db\Schema;
use yii\db\Migration;

class m150202_203552_init_user_table extends Migration
{
    public function up()
    {
        $this->createTable(
        'user',
        [
            'id' => 'pk',
            'username' => 'string UNIQUE',
            'password' => 'string'
        ]
        );
    }

    public function down()
    {
        $this->dropTable('user');

    }
}
