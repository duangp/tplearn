<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/28
 * Time: 15:33
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;

class ManagerController extends Controller{
    public function login(){
        if(!empty($_POST)) {
            dump($_POST);
            $vrf = new Verify();//verify类下有验证码验证方法
            if($vrf->check($_POST['captcha'])){
                echo 'ok';
            }
            else{
                echo 'not ok';
            }
        }
        $this->display();
    }
    public function verify_img(){
        $conf = array(
            'imageH' => 20,
            'imageW' => 80,
            'fontSize' => 11,
            'length' => 4,
            'fontttf' => '4.ttf',
        );
        $img = new Verify($conf);
        $img->entry();

    }
}