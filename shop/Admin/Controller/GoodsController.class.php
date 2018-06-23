<?php
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller
{
    public function goodslist(){
        $goods = new \Model\GoodsModel();
        $goods->field('st_id,count(*) as er');//限定查询字段
        $goods->order('g_no desc');//降
        $goods->group('st_id');
        $info = $goods->field('g_id, name')->select();
        $goods->where('g_id < 70000');
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

        if($_POST['name'] == NULL){
            $goods = D('goods');
            dump($_POST['brand']);
            $type = $goods->field('update_id')->group('update_id')->select();
            $brand = $goods->field('st_id')->group('st_id')->select();
            $this->assign('type',$type);
            $this->assign('brand',$brand);
        }
        else{
            echo "1";
            dump($_POST);
            $goods = D('goods');
//            $goods->thumb = $_FILES['TMP']
            $add = $goods->add($_POST);
            if($add){
                dump($_POST);
                $this->redirect('goodslist', array(), 20 ,'add goods success!');
            }
        }
        $this->display();

    }
    public function update(){
        $this->display();
    }
    
}