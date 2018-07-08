<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/28
 * Time: 15:33
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class VerifyController extends Controller{
    public function login(){
        if(!empty($_POST)) {
            $vrf = new Verify();//verify类下有验证码验证方法
            if($vrf->check()){

            }
        }
        $this->display();
    }
    public function verify_img(){
        $conf = array(
            'imageH' => 40,
            'imageW' => 100,
            'fontSize' => 15,
            'length' => 4,
            'fontttf' => '4.ttf',
        );
        $img = new Verify($conf);
        $img->entry();

    }
}