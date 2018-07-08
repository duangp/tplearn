<?php
namespace Admin\Controller;
use Think;
use Think\Controller;
use UploadFile;

class GoodsController extends Controller
{
    public function goodslist(){
        $goods = new \Model\GoodsModel();
        //$goods->field('st_id,count(*) as er');//限定查询字段
        //$goods->order('g_no desc');//降
       // $goods->group('st_id');
        $info = $goods->select();
        //$goods->where('g_id < 70000');
//       $arr = array(
//        'name' => 'test2333',
//        );
//        $info = $goods->where('g_id=60246')->save($arr);
//        echo $info;//返回true/false
//        $goods->name='test234';
//        $info = $goods->where('g_id=60245')->save();
//        dump($info);//返回true/false



        //数据传输给模板
        $this->assign('info',$info);//这里的assign是父类controller的方法，是封装了smarty模板的assign方法
        $this->display();
    }
    public function add(){
        $goods = D('goods');
        if(empty($_POST)){
            dump($_POST['brand']);
            $type = $goods->field('update_id')->group('update_id')->select();
            $brand = $goods->field('st_id')->group('st_id')->select();
            $this->assign('type',$type);
            $this->assign('brand',$brand);
            $this->display();
        }
        else{
//             dump($_FILES);
            echo '2';
            if($_FILES['thumb']['error']===0){
                //1) 大图片上传
                $cfg = array(
                    'rootPath'      =>  './Public/Upload/', //保存根路径
                );
                //设置附件的存储位置
                $up = new \Think\Upload($cfg);
                //上传附件
                //如果附件上传成功，就可以通过uploadOne的返回值查看到附 件
                //在服务器的存储情况
                dump($_FILES);
                $z = $up->uploadOne($_FILES['thumb']);//上传图片
                if ($z){
                    $bigpicname = $up->rootPath.$z['savepath'].$z['savename'];//获取地址存到post。再到数据库中
                    $_POST['goods_big_img'] = substr($bigpicname,1);//去除'./'
                    $_POST['images'] = $bigpicname;//保存到post中

                    $im = new \Think\Image();
                    //② 打开源图片(被制作缩略图的图片)
                    echo $bigpicname;
                    $im -> open($bigpicname);
                    //③ 为源图片制作缩略图
                    $im -> thumb(125,125);  //等比例缩放
                    //④ 把制作好的缩略图保存到服务器上
                    // 缩略图和原图在同一个目录位置
                    // 原图：24322398skjdks.jpg  缩略图：small_24322398skjdks.jpg
                    $smallpicname = $up->rootPath.$z['savepath']."small_".$z['savename'];
                    $im -> save($smallpicname);
                    $_POST['tiny_images'] = $smallpicname;//保存到post中
                }
                else{
                    $this->redirect('goodslist', array(), 30,'文件上传失败!');
                }


             }
             else{
                 $this->redirect('goodslist', array(), 30 ,'缩略图失败!');
             }
            dump($_POST);
//            $goods->thumb = $_FILES['TMP']
            $add = $goods->add($_POST);
            if($add){
                dump($_POST);
                $this->redirect('goodslist', array(), 30 ,'add goods success!');
            }
            else{
                $this->redirect('goodslist', array(), 30 ,'add goods failed!');
            }
        }


    }
    public function update($g_id){
        $goods = D('goods');
        if(empty($_POST)){
            $info = $goods->find($g_id);
            dump($info['name']);
            $this->assign('info',$info);
            $this->display();
        }
         else {
             $add = $goods->save($_POST);
             if ($add) {
                 dump($_POST);
                 $this->redirect('goodslist', array(), 20, 'add goods success!');
             } else {
                 dump($_POST);
                 $this->redirect('goodslist', array(), 20, 'add goods failed!');
             }
         }
        }

    
}