<?php
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller
{
    public function goodslist(){
//        $this->display();
//        $goods = new \Model\GoodsModel();  // 实例化普通model对象
//        $goods = D(); //只链接数据库，不进行任何其他操作
        $goods=D('goods');
        $info = $goods->select('60189');
       //数据传输给模板
        $this->assign('info',$info);//这里的assign是父类controller的方法，是封装了smarty模板的assign方法
        $this->display();
    }
    public function detail(){
        $this->display();
    }

}