<?php

namespace App\Common;

use App\Domain\Business\BusinessDomain;
use App\Domain\Order\CollectOrderDomain;
use App\Domain\Order\OutOrderDomain;
use App\Domain\User\UserDomain;
use PhalApi\Api;

class BaseController extends Api
{

    protected function api_success($data = array()): array
    {
        return $data;
    }

    /**
     * API错误返回
     * @param   $code $msg
     * @param string $msg
     * @return mixed
     * @throws RequestException
     */
    protected function api_error($code, string $msg = '')
    {
        throw new RequestException($msg, $code);
    }


    //------------------------------------------------------------------------------------------------------------
    protected $UserDomain;

    protected function _getUserDomain(): UserDomain
    {
        return empty($this->UserDomain) ? new UserDomain() : $this->UserDomain;
    }


}
