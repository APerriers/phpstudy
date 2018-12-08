<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/7
 * Time: 下午6:25
 */

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['delete_time', 'id', 'from'];

    public function getUrlAttr($value, $data) {
        return $this->prefixImgUrl($value, $data);
    }

}