<?php

namespace LongNan\LongNanWmsClient\OrderImport;

use LongNan\LongNanWmsClient\Application;
use LongNan\LongNanWmsClient\Base\BaseClient;
use LongNan\LongNanWmsClient\Base\Exceptions\ClientError;

/**
 * 订单导入API客户端.
 */
class Client extends BaseClient
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
    }

    /**
     * 购付汇申请.
     *
     * @throws ClientError
     */
    public function importOrder(array $infos)
    {
        //TODO -- 使用Credential验证参数

        $this->setParams($infos);

        return $this->httpPostJson('/OrderManage/ImportData');
    }
}
