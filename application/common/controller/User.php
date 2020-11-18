<?php
namespace app\common\controller;

Class User
{
    public function showName($name='')
    {
        return "my name is {$name}";
    }
}
