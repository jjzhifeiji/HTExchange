<?php

namespace App\Api\Api;

use App\Common\BaseController;
use function PhalApi\DI;

/**
 *
 */
class ApiController extends BaseController
{

    public function getRules()
    {
        return array(
            'getsRate' => array(
                'rate_from' => array('name' => 'rate_from', 'default' => '', 'desc' => '兑换start'),
                'rate_to' => array('name' => 'rate_to', 'default' => '', 'desc' => '兑换end'),
            ),
            'setRate' => array(
                'id' => array('name' => 'id', 'default' => '', 'desc' => 'id'),
                'rate' => array('name' => 'rate', 'default' => '', 'desc' => '汇率'),
            ),

        );
    }


    public function getsRate()
    {
        $rate_from = $this->rate_from;
        $rate_to = $this->rate_to;
        $res = $this->_getUserDomain()->getsRate($rate_from,$rate_to);
        return $this->api_success($res);
    }


    public function setRate()
    {
        $id = $this->id;
        $rate = $this->rate;
        $this->_getUserDomain()->setRate($id,$rate);
        return $this->api_success();
    }



}
