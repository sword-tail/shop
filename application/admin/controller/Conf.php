<?php

namespace app\admin\controller;

use think\Controller;
use think\View;
use think\Db;
class Conf extends Controller
{
    public function conflist()
    {
        $conf = db('conf');
        if(request()->isPost()){
            $data = input('post.');
            //复选框空选

            //处理文字数据
            foreach($data as $k =>$v){
                if(is_array($v)){
                    $value=implode(',',$v);
                    $conf->where(array('ename'=>$k))->update(['value' => $value]);
                }else{
                    $conf->where(array('ename'=>$k))->update(['value' => $v]);
                }
            }
            //处理图片数据
            if($_FILES){
                foreach($_FILES as $k=> $v){
                    if($v['tmp_name']){
                        $imgSrc = $this->upload($k);
                        $conf->where(array('ename'=>$k))->update(['value'=>$imgSrc]);
                    }
                }
            }
            //dump($data);die;
            $this->success('配置成功');
        }
        $ShopConfRes = $conf->where(array('conf_type' =>1))->order('sort desc')->select();
        $GoodConfRes = $conf->where(array('conf_type' =>2))->order('sort desc')->select();
        $this->assign([
            'ShopConfRes' => $ShopConfRes,
            'GoodConfRes' => $GoodConfRes
        ]);
        return view();
    }

    public function lst()
    {
        $conf = db('conf');
        if(request()->isPost()){
            $data=input('post.');
            foreach ($data['sort'] as $k=> $v){
                $conf->where('id','=',$k)->update(['sort'=>$v]);
            }
        }
        $confRes = db('conf')->order('sort desc')->paginate(3);
        $this->assign([
            'confRes' => $confRes
        ]);
        return view('list');
    }
    public function add()
    {
        if(request()->isPost()){
            $data = input('post.');
            //如果多选，替换中文“，”
            if($data['form_type']=='radio' || $data['form_type']=='select' || $data['form_type']=='checkbox'){
                $data['valuesss']=str_replace('，',',',$data['valuesss']);
                $data['value']=str_replace('，',',',$data['value']);
            }
            //验证
            $validate = validate('Conf');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $add= db('conf')->insert($data);
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
            //如果多选，替换中文“，”
            if($data['form_type']=='radio' || $data['form_type']=='select' || $data['form_type']=='checkbox'){
                $data['valuesss']=str_replace('，',',',$data['valuesss']);
                $data['value']=str_replace('，',',',$data['value']);
            }
            //验证
            $validate = validate('Conf');
            if(!$validate->check($data)){
                $this->error($validate->getError());
            }
            $save= db('conf')->update($data);
            if($save!==false){
                $this->success('修改成功','lst');
            }else{
                $this->error('修改失败');
            }
            return;
        }
        $id = input('id');
        $confs = db('conf')->find($id);
        $this->assign([
            'confs' => $confs
        ]);
        return view();
    }
    public function del($id)
    {
        $del = db('conf')->delete($id);
        if($del){
            $this->success('删除成功','lst');
        }else{
            $this->error('删除失败');
        }
        return;
    }

    //上传图片
    public function upload($imgName){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($imgName);

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