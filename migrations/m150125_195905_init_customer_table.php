<?php

use yii\db\Schema;
use yii\db\Migration;

class m150125_195905_init_customer_table extends Migration
{
    public function up()
    {
		$this->createTable(
			'customer',
			[
				'id' => 'pk',
				'name' => 'string',
				'birth_date' => 'date',
				'notes' => 'text',
			],
			'ENGINE=InnoDB'
		);
    }

    public function down()
    {
        $this->dropTable('customer');

        return false;
    }
}
