<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
use catetree\Catetree;
class Category extends Controller
{
    public function lst()
    {
        $category = new catetree();
        $categoryObj = db('category');
        if(request()->isPost()){
            $data = input('post.');
            $category->careSort($data['sort'],$categoryObj);
            $this->success('排序成功！',url('lst'));
        }
        $categoryRes = $categoryObj->order('sort DESC')->select();
        $categoryRes = $category->catetree($categoryRes);
        $this->assign([
            'categoryRes' => $categoryRes
        ]);
        return view('list');
    }
    public function add()
    {
        $category = new catetree();
        $categoryObj = db('category');
        if(request()->isPost()){
            $data = input('post.');
            if($_FILES['cate_img']['tmp_name']){
                $data['cate_img'] = $this->upload();
            }
            //验证
//            $validate = validate('category');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $add= $categoryObj->insert($data);
            if($add){
                $this->success('添加成功','lst');
            }else{
                $this->error('添加失败');
            }
            return;
        }
        $categoryRes = $categoryObj->order('sort DESC')->select();
        $categoryRes = $category->catetree($categoryRes);
        $this->assign([
            'categoryRes' => $categoryRes
        ]);
        return view();
    }
    public function edit()
    {
        $category = new catetree();
        $categoryObj = db('category');
        if(request()->isPost()){
            $data = input('post.');
            if($_FILES['cate_img']['tmp_name']){
                $data['cate_img'] = $this->upload();
            }
            //验证
//            $validate = validate('category');
//            if(!$validate->check($data)){
//                $this->error($validate->getError());
//            }
            $save= $categoryObj->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $categorys = $categoryObj->find(input('id'));
        $categoryRes = $categoryObj->order('sort DESC')->select();
        $categoryRes = $category->catetree($categoryRes);
        $this->assign([
            'categoryRes' => $categoryRes,
            'categorys' => $categorys
        ]);
        return view();
    }
    public function del($id)
    {
        $category = db('category');
        $catetree = new catetree();
        $sonids = $catetree->childrenids($id,$category);
        $sonids[] = intval($id);
        $article = db('article');
        foreach ($sonids as $k => $v){
            $artRes = $article->field('id,thumb')->where(array('category_id'=>$v))->select();
            foreach ($artRes as $k1=>$v1){
                $thumbSrc = IMG_UPLOADS.$v1['thumb'];
                if (file_exists($thumbSrc)){
                    @unlink($thumbSrc);
                }
                $article->delete($v1['id']);
            }
        }

        $del = db('category')->delete($sonids);
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
    }

    //上传图片
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('cate_img');

        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                return  $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}