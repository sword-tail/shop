<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
class MemberLevel extends Controller
{

    public function lst()
    {
        $member_levelRes = db('member_level')->order('id','desc')->paginate(10);
        $this->assign([
            'member_levelRes' => $member_levelRes
        ]);
        return view('list');
    }
    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            //验证
//            $validate = validate('member_level');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $add= db('member_level')->insert($data);
            if($add){
                $this->success('添加成功','lst');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        return view();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data = input('post.');
            //验证
//            $validate = validate('member_level');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }

            $save= db('member_level')->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id = input('id');
        $member_level = db('member_level')->find($id);
        $this->assign([
            'member_levels' => $member_level
        ]);
        return view();
    }
    public function del($id)
    {
        $del = db('member_level')->delete($id);
        //删除商品类型下面的商品属性
        db('attr')->where(array('member_level.id'=>$id))->delete();
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
        return;
    }



}