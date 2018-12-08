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
use think\Model;

class Banner extends BaseModel
{
    public function items() {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerById($id)
    {
        $banner = self::with(['items','items.img'])
            ->find($id);

//         $banner = BannerModel::relation('items,items.img')
//             ->find($id);
        return $banner;
    }

}