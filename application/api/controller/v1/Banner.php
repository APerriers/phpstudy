<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/18
 * Time: 上午2:15
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use app\lib\exception\MissException;
use think\Exception;
use think\Validate;


class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = \app\api\model\Banner::getBannerById($id);

        if (!$banner) {
            throw new MissException([
                'msg' => '请求banner不存在',
                'errorCode' => 40000
            ]);
        }

        return $banner;
    }

}