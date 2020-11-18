<?php


namespace app\api\controller;

use think\Config;
class Index
{
    public function index()
    {
        return 'this is api Index index';
    }

    public function demo()
    {
        return 'this is api Index demo';
    }

    public function getUserInfo($type='json')
    {
        if(!in_array($type,['json','jsonp','xml']))
        {
            $type = 'json';
        }
        Config::set('default_return_type',$type);

        $data = [
            'code' =>200,
            'result' =>[
                'username' => 'wuyunlong',
                'useremail' => '123456789@qq.com'
            ]
        ];

        return $data;
    }
}