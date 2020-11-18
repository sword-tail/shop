<?php

namespace app\admin\validate;

use think\Validate;
use think\View;
use think\Db;
class Conf extends Validate
{
    protected $rule =   [
        'cname'  => 'require|unique:conf',
        'ename'   => 'require|unique:conf',
    ];

    protected $message  =   [
        'cname.require' => '必须填写配置中文名称',
        'cname.unique'  => '配置中文名称不能重复',
        'ename.require' => '必须填写配置英文名称',
        'ename.unique'  => '配置英文名称不能重复',
    ];

}