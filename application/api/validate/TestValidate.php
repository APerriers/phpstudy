<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/18
 * Time: 上午3:32
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}