<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/9
 * Time: 下午4:24
 */

namespace app\api\controller\v1;

use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;


class Product
{
    /**
     * 获取某分类下全部商品(不分页）
     * @url /product/all?id=:category_id
     * @param int $id 分类id号
     * @return \think\Paginator
     * @throws ThemeException
     */
    public function getAllInCategory($id = -1)
    {
        (new IDMustBePositiveInt())->goCheck();
        $products = ProductModel::getProductsByCategoryID(
            $id, false);
        if ($products->isEmpty())
        {
            throw new ThemeException();
        }
        $data = $products
            ->hidden(['summary'])
            ->toArray();
        return $data;
    }

    /**
     * 获取指定数量的最近商品
     * @url /product/recent?count=:count
     * @param int $count
     * @return mixed
     * @throws ParameterException
     */
    public function getRecent($count = 15)
    {
        (new Count())->goCheck();
        $products = ProductModel::getMostRecent($count);
        if ($products->isEmpty())
        {

        }
        $products = $products->hidden(
            [
                'summary'
            ])
            ->toArray();
        return $products;
    }

}