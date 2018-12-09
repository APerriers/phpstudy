<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/9
 * Time: 下午4:24
 */

namespace app\api\controller\v1;

use app\api\model\Product as ProductModel;


class Product
{
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