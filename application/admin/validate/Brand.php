<?php

namespace app\admin\validate;

use think\Validate;
use think\View;
use think\Db;
class Brand extends Validate
{
    protected $rule =   [
        'brand_name'  => 'require|unique:brand',
        'brand_url'   => 'url',
        'brand_description' => 'min:5',
    ];

    protected $message  =   [
        'brand_name.require' => '品牌名称必须填写',
        'brand_name.unique'  => '品牌名称不能重复',
        'brand_url.url'   => 'url格式不正确',
        'brand_description.min'  => '描述最少5个字符',
    ];

}