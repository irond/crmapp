<?php

use yii\db\Schema;
use yii\db\Migration;

class m150201_184249_init_service_table extends Migration
{
    public function up()
    {
		$this->createTable(
			'service',
			[
				'id' => 'pk',
				'name' => 'string unique',
				'hourly_rate' => 'integer',
			]
		);
    }

    public function down()
    {
        $this->dropTable('service');

    }
}
