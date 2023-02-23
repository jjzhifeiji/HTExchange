<?php

namespace App\Model\Rate;

use App\Common\BaseModel;

class RateModel extends BaseModel
{

    public function getsRate($where)
    {

        return $this->getORM()
            ->select('id,create_time,rate_from,rate_to,rate,remark')
            ->where($where)
            ->fetchAll();
    }

    public function upRate($id, array $data)
    {
        return $this->getORM()
            ->where('id', $id)
            ->update($data);
    }


}
