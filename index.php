<?php

// change the following paths if necessary
$yii=trim(file_get_contents('.framework_path')).'/yii.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);

$config=dirname(__FILE__).'/protected/config/main.php';
if(file_exists(dirname(__FILE__).'/protected/config/dev.php')) {
    $devconfig = require_once(dirname(__FILE__).'/protected/config/dev.php');
    $config = require_once($config);
    $config = CMap::mergeArray($config, $devconfig);
}

Yii::createWebApplication($config)->run();