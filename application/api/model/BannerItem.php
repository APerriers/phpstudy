<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/7
 * Time: 下午3:14
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['id', 'img_id', 'banner_id', 'delete_time'];

    public function img() {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}