<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/21
 * Time: 下午10:58
 */

namespace app\lib\exception;


use think\Exception;

/**
 * Class ParameterException
 * 通用参数类异常错误
 */
class ParameterException extends BaseException
{
    public $code = 400;
    public $errorCode = 10000;
    public $msg = "invalid parameters";
}