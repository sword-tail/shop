<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
use catetree\Catetree;
class Goods extends Controller
{

    public function lst()
    {
        $typeRes = db('type')->order('id','desc')->paginate(3);
        $this->assign([
            'typeRes' => $typeRes
        ]);
        return view('list');
    }
    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            //验证
//            $validate = validate('type');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $add= model('goods')->save($data);
            if($add){
                $this->success('添加成功','lst');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        //会员级别数据
        $mlRes=db('memberLevel')->field('id,level_name')->select();
        //获取类型
        $typeRes=db('type')->select();
        //品牌分类
        $brandRes=db('brand')->field('id,brand_name')->select();
        //商品分类
        $category = new catetree();
        $categoryObj = db('category');
        $categoryRes = $categoryObj->order('sort DESC')->select();
        $categoryRes = $category->catetree($categoryRes);
        $this->assign([
           'mlRes'=>$mlRes,
            'typeRes'=>$typeRes,
            'brandRes'=>$brandRes,
            'categoryRes'=>$categoryRes,
        ]);
        return view();
    }
    public function edit()
    {
        if(request()->isPost()){
            $data = input('post.');
            //验证
//            $validate = validate('type');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }

            $save= db('type')->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id = input('id');
        $type = db('type')->find($id);
        $this->assign([
            'types' => $type
        ]);
        return view();
    }
    public function del($id)
    {
        $del = db('type')->delete($id);
        //删除商品类型下面的商品属性
        db('attr')->where(array('type.id'=>$id))->delete();
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
        return;
    }



}