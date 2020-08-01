<?php

namespace LongNan\LongNanWmsService;

use LongNan\LongNanWmsClient\Application;
use LongNan\LongNanWmsClient\Base\Exceptions\ClientError;

/**
 * 订单导入API服务.
 */
class SearchDataService
{
    /**
     * @var SearchDataClient
     */
    private $_searchDataClient;

    public function __construct(Application $app)
    {
        $this->_searchDataClient = $app['search_data'];
    }

    /**
     * 订单查询.
     *
     * @throws ClientError
     * @throws \Exception
     */
    public function SearchOrder(array $infos)
    {
        if (empty($infos)) {
            throw new ClientError('参数缺失', 1000001);
        }

        return $this->_searchDataClient->SearchOrder($infos);
    }

    /**
     * 商品货号库查询.
     *
     * @throws ClientError
     * @throws \Exception
     */
    public function SearchGoods(array $infos)
    {
        if (empty($infos)) {
            throw new ClientError('参数缺失', 1000001);
        }

        return $this->_searchDataClient->SearchGoods($infos);
    }
}
