<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/19
 * Time: 下午8:13
 */

namespace app\api\model;


use think\Db;
use think\Exception;

class Banner
{
    public static function getBannerById($id)
    {

//        $banner = Db::query('select * from banner');
        $banner = Db::table('banner_item')->where('banner_id', '=',$id)->find();

        return json($banner);
    }

}