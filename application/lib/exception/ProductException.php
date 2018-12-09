<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/12/9
 * Time: 下午4:35
 */

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定商品不存在，请检查商品ID';
    public $errorCode = 20000;
}