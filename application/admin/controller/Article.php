<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
use catetree\Catetree;
class Article extends Controller
{

    public function lst()
    {
        $artRes = db('article')->field('a.*,b.cate_name')->alias('a')->join('cate b',"a.cate_id=b.id")->order('a.id','desc')->paginate(2);
        $this->assign([
            'artRes' => $artRes
        ]);
        return view('list');
    }
    public function add()
    {
        $cate = new Catetree();
        $cateRes = db('cate')->order('sort DESC')->select();
        $cateRes = $cate->catetree($cateRes);
        $this->assign([
            'cateRes' => $cateRes
        ]);
        if(request()->isPost()){
            $data = input('post.');
            $data['addtime'] = time();
            //$data['link_url']; http://
            if($data['link_url'] && stripos($data['link_url'],'http://')===false){
                $data['link_url'] = 'http://'.$data['link_url'];
            }
            if($_FILES['thumb']['tmp_name']){
                $data['thumb'] = $this->upload();
            }
            //验证
            $validate = validate('article');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $add= db('article')->insert($data);
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
        $cate = new Catetree();
        $cateRes = db('cate')->order('sort DESC')->select();
        $cateRes = $cate->catetree($cateRes);
        $this->assign([
            'cateRes' => $cateRes
        ]);
        if(request()->isPost()){
            $data = input('post.');
            //$data['article_url']; http://
            if($data['link_url'] && stripos($data['link_url'],'http://')===false){
                $data['link_url'] = 'http://'.$data['link_url'];
            }
            if($_FILES['thumb']['tmp_name']){
                $oldArticles = db('article')->find($data['id']);
                $oldImg = IMG_UPLOADS . $oldArticles['thumb'];
                if (file_exists($oldImg)){
                    @unlink($oldImg);
                }
                $data['thumb'] = $this->upload();
            }
            //验证
            $validate = validate('article');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $save= db('article')->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id = input('id');
        $arts = db('article')->find($id);
        $this->assign([
            'arts' => $arts
        ]);
        return view();
    }
    public function del($id)
    {
        $article = db('article');
        $arts=$article->field('thumb')->find($id);
        $thumbSrc = IMG_UPLOADS.$arts['thumb'];
        if (file_exists($thumbSrc)){
            @unlink($thumbSrc);
        }
        $del = db('article')->delete($id);
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
        return;
    }

    //上传图片
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('thumb');

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