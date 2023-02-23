<?php

namespace App\Domain\User;

use App\Common\BaseDomain;
use PhalApi\Tool;

/**
 * 用户
 *
 * - 可用于自动生成一个新用户
 *
 * @author dogstar 20200331
 */
class UserDomain extends BaseDomain
{


    public function getsRate($rate_from, $rate_to)
    {
        $where = array(
            'status' => 1
        );
        if (!empty($rate_from)) {
            $where['rate_from'] = $rate_from;
        }

        if (!empty($rate_to)) {
            $where['rate_to'] = $rate_to;
        }

        return $this->_getRateModel()->getsRate($where);
    }

    public function setRate($id, $rate)
    {
        $data = array(
            'rate' => $rate
        );
        return $this->_getRateModel()->upRate($id, $data);
    }


}
