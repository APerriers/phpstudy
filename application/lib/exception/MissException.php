<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/19
 * Time: 下午10:06
 */

namespace app\lib\exception;


class MissException extends BaseException
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;

}