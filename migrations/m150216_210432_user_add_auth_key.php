<?php

use yii\db\Schema;
use yii\db\Migration;

class m150216_210432_user_add_auth_key extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'auth_key', 'string UNIQUE');
    }

    public function down()
    {
        $this->dropColumn('user', 'auth_key');
    }
}
