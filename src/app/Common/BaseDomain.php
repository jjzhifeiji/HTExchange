<?php

namespace App\Common;

use App\Model\Admin\AdminModel;
use App\Model\Business\BusinessAmountRecordModel;
use App\Model\Business\BusinessModel;
use App\Model\CollectOrder\CollectOrderModel;
use App\Model\CollectOrder\OutOrderModel;
use App\Model\Rate\UserCollectInfoModel;
use App\Model\Rate\RateModel;

class BaseDomain
{

    protected $RateModel;

    protected function _getRateModel(): RateModel
    {
        return empty($this->RateModel) ? new RateModel() : $this->RateModel;
    }

}
