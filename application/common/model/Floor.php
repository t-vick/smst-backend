<?php

namespace app\common\model;

use think\Model;

class Floor extends Model
{
    //
    public function roads() {
        return $this->hasMany('Road');
    }

    public function cells() {
        return $this->hasMany('Cell');
    }
}
