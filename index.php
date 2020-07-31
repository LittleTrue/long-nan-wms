<?php

require_once __DIR__ . '/vendor/autoload.php';

use LongNan\LongNanWmsClient\Application;
use LongNan\LongNanWmsService\OrderImportService;

$ioc_con_app = new Application([
    'BaseUri' => 'http://120.55.54.0:8003/api/',
    'Account' => 'ewms',
    'Password'=> '888888',
]);

//订单导入服务-----
$bankSrv = new OrderImportService($ioc_con_app);


var_dump($bankSrv->importOrder($Data));
die();
