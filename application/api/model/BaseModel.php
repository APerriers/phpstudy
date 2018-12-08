<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/7
 * Time: 下午3:15
 */

namespace app\api\model;


use think\Model;

class BaseModel extends Model
{
    protected $hidden = ['delete_time'];
    protected function  prefixImgUrl($value, $data){
        $finalUrl = $value;
        if($data['from'] == 1){
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}