<?php

namespace app\common\model;

use think\Model;

class Map extends Model
{
    //
    public function floors() {
        return $this->hasMany('Floor');
    }
}
