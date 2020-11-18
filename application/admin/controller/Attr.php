<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
class Attr extends Controller
{

    public function lst()
    {
        $typeId = input('type_id');
        if($typeId){
            $map['type_id']=['=',$typeId];
        }else{
            $map=1;
        }
        $attrRes = db('attr')->alias('a')->field('a.*,t.type_name')->join('type t',"a.type_id = t.id")->where($map)->order('a.id','desc')->paginate(3);
        $this->assign([
            'attrRes' => $attrRes
        ]);
        return view('list');
    }
    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            $data['attr_values']=str_replace('，',',',$data['attr_values']);
            //验证
//            $validate = validate('attr');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $add= db('attr')->insert($data);
            if($add){
                $this->success('添加成功','lst');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        //获取属性所属类型
        $typeRes = db('type')->select();
        $this->assign([
           'typeRes'=>$typeRes,
        ]);
        return view();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data = input('post.');
            $data['attr_values']=str_replace('，',',',$data['attr_values']);
            //验证
//            $validate = validate('attr');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $save= db('attr')->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id = input('id');
        $attr = db('attr')->find($id);
        $typeRes = db('type')->select();
        $this->assign([
            'attrs' => $attr,
            'typeRes'=>$typeRes,
        ]);
        return view();
    }
    public function del($id)
    {
        $del = db('attr')->delete($id);
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
        return;
    }

    //异步获取指定类型下的属性
    public function ajaxGetAttr()
    {
        $typeId=input('type_id');
        $attrRes=db('attr')->where(array('type_id'=>$typeId))->select();
        echo json_encode($attrRes);
    }

}