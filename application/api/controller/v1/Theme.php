<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/8
 * Time: 下午10:09
 */

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;
use think\Controller;
use app\api\model\Theme as ThemeModel;

class Theme extends Controller
{
    public function getSimpleList($ids = '') {
        $validate = new IDCollection();
        $validate->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);

        if ($result->isEmpty()) {
            throw new ThemeException();
        }

        return $result;
    }

    public function getComplexOne($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $theme = ThemeModel::getThemeWithProducts($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme->hidden(['products.summary'])->toArray();
    }

}