<?php

require_once __DIR__ . '/vendor/autoload.php';

use LongNan\LongNanWmsClient\Application;
use LongNan\LongNanWmsService\OrderImportService;

$ioc_con_app = new Application([
    'BaseUri'  => 'http://120.55.54.0:8003/api/',
    'Account'  => 'ewms',
    'Password' => '888888',
]);

//订单导入服务-----
$bankSrv = new OrderImportService($ioc_con_app);

$array = [
    'Datas' => [
        [
            'Head' => [
                'OrderNo'             => '5784936',
                'Waybillno'           => '',
                'EnterpriseCode'      => 'ZTO',
                'Ordername'           => '郭富城',
                'BuyerRegno'          => '刘德华',
                'Orderdocid'          => '440971199701202252',
                'Orderphone'          => '13423496176',
                'Ordergoodtotal'      => 20,
                'Freight'             => 0,
                'Discount'            => 0,
                'Tax'                 => 0,
                'ActuralPaid'         => 20,
                'ReceivingUserName'   => '张学友',
                'ReceivingUserMobile' => '17304023506',
                'ReceivingUserAddr'   => '东莞南城',
                'ConsigneeProvince'   => '广东省',
                'ConsigneeCity'       => '东莞市',
                'ConsigneeArea'       => '南城区',
                'Note'                => '',
                'BillTemplate'        => 'YWD001',
                // "ErrMsg" => ''
            ],
            'Body' => [
                [
                    'OrderNo'      => '5784936',
                    'Copgno'       => 'YWD999',
                    'Decprice'     => 20,
                    'Gqty'         => 1,
                    'TradeCountry' => '142',
                    'Notes'        => '',
                    // "ErrMsg"=> ''
                ],
            ],
        ],
    ],
    'PlateCode'   => 'YWD',
    'EntreCordNo' => 'YWD',
];
print_r(json_encode($bankSrv->importOrder($array)));
die();
