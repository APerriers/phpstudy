<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/9
 * Time: 下午5:55
 */

namespace app\api\model;


class Category extends BaseModel
{

    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}