<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/9
 * Time: 下午5:54
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Category as CategoryModel;
use app\lib\exception\MissException;

class Category
{
    /**
     * 获取全部类目列表，但不包含类目下的商品
     * Request 演示依赖注入Request对象
     * @url /category/all
     * @return array of Categories
     * @throws MissException
     */
    public function getAllCategories()
    {
        $categories = CategoryModel::all([], 'img');
        if(empty($categories)){
            throw new MissException([
                'msg' => '还没有任何类目',
                'errorCode' => 50000
            ]);
        }
        return $categories;
    }

    public function getCategory($id)
    {
        $validate = new IDMustBePositiveInt();
        $validate->goCheck();
    }

}