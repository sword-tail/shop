<?php

namespace app\admin\validate;

use think\Validate;
use think\View;
use think\Db;
class Article extends Validate
{
    protected $rule =   [
        'title'  => 'require|unique:article',
        'cate_id' => 'require',
        'email' => 'email',
        'link_url' => 'url'
    ];

    protected $message  =   [
        'title.require' => '标题名称必须填写',
        'title.unique'  => '标题名称不能重复',
        'cate_id.require'  => '所属栏目不能为空',
    ];

}