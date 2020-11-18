<?php

namespace app\admin\model;

use think\Controller;
use think\Model;
class Goods extends Model
{
    protected $field=true;
    protected static function init()
    {
        Goods::beforeInsert(function($goods){
            //生成商品主图的三种缩略图
            if($_FILES['og_thumb']['tmp_name']){
                $thumbName=$goods->upload('og_thumb');
                $ogThumb=date("Ymd"). DS .$thumbName;
                $bigThumb=date("Ymd"). DS .'big_'.$thumbName;
                $midThumb=date("Ymd"). DS .'mid_'.$thumbName;
                $smThumb=date("Ymd"). DS .'sm_'.$thumbName;
                $image = \think\Image::open(IMG_UPLOADS.$ogThumb);
                //按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                $image->thumb(400,400)->save(IMG_UPLOADS.$bigThumb);
                $image->thumb(200,200)->save(IMG_UPLOADS.$midThumb);
                $image->thumb(100,100)->save(IMG_UPLOADS.$smThumb);
                $goods->og_thumb=$ogThumb;
                $goods->big_thumb=$bigThumb;
                $goods->mid_thumb=$midThumb;
                $goods->sm_thumb=$smThumb;
            }
            $goods->goods_code=time().rand(111111,999999);
            //dump($ogThumb);die;
        });

        Goods::afterInsert(function($goods){
            //批量写入会员价格
            $mpriceArr=$goods->mp;
            $goodsId=$goods->id;
            if($mpriceArr){
                foreach ($mpriceArr as $k=>$v){
                    if(trim($v)==''){
                        continue;
                    }else{
                        db('member_price')->insert(['mlevel_id'=>$k,'mpprice'=>$v,'goods_id'=>$goodsId]);
                    }
                }
            }

            //商品相册处理
            if($goods->_hasImg($_FILES['goods_photo']['tmp_name'])){
                // 获取表单上传文件
                $files = request()->file('goods_photo');
                foreach($files as $file){
                    // 移动到框架应用根目录/public/uploads/ 目录下
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                    if($info){
                        // 输出 42a79759f284b767dfcb2a0197904287.jpg
                        $photoName=$info->getFilename();
                        $ogPhoto=date("Ymd"). DS .$photoName;
                        $bigPhoto=date("Ymd"). DS .'big_'.$photoName;
                        $midPhoto=date("Ymd"). DS .'mid_'.$photoName;
                        $smPhoto=date("Ymd"). DS .'sm_'.$photoName;
                        $image = \think\Image::open(IMG_UPLOADS.$ogPhoto);
                        //按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
                        $image->thumb(400,400)->save(IMG_UPLOADS.$bigPhoto);
                        $image->thumb(200,200)->save(IMG_UPLOADS.$midPhoto);
                        $image->thumb(100,100)->save(IMG_UPLOADS.$smPhoto);
                        db('goods_photo')->insert(['goods_id'=>$goodsId,'big_photo'=>$bigPhoto,'mid_photo'=>$midPhoto,'sm_photo'=>$smPhoto]);
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
        });

    }

    //商品相册是否有图片上传
    private function _hasImg($tmpArr){
        foreach ($tmpArr as $k =>$v){
            if($v){
                return true;
            }
        }
        return false;
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
                return  $info->getFilename();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

}