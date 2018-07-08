<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
    public function login(){
//        echo "Welcome to login HellShop :>";
        $this->display();
    }
    public function register(){
//        echo "Welcome to register HellShop :>";
        if(empty($_POST)){

        }
        else{
            $goods=D('goods');
            $add = $goods->add($_POST);
            if($add){
                dump($_POST);
                $this->redirect('login', array(), 20 ,'register success!');
            }
            else{
                $this->redirect('login', array(), 20 ,'register failed!');
            }
        }
        $this->display();

    }

}