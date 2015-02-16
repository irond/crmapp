<?php
define('YII_DEBUG', true);

require(__DIR__ . '/../vendor/autoload.php');
// Including the Yii framework itself (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
ini_set('display_errors', true);
// Getting the configuration (2)
$config = require(__DIR__ . '/../config/web.php');
// Making and launching the application immediately (3)
(new yii\web\Application($config))->run();