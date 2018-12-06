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
//    自定义验证规则
    protected function isPositiveInteger($value, $rule='', $data='', $field = ''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }

}