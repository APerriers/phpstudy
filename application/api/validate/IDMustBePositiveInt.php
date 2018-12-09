<?php
/**
 * Created by PhpStorm.
 * User: tangzhipeng
 * Date: 2018/11/18
 * Time: 上午3:40
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];


}