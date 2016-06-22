<?php
namespace Home\Controller;

// 用户控制器
class UserController extends HomeController {
    public function index(){
        $this->assign('title','用户中心');
        $this->display();
    }

    public function register(){
        $this->assign('title','用户注册');
        $this->display();
    }

    public function login(){
        $this->assign('title','用户登录');
        $this->display();
    }

    public function selectAddress(){
        $this->assign('title','选择用户所在地址:功能实现');
        $this->display();
    }
    
    public function myOrder(){
        $this->assign('title','我的订单');
        $this->display();
    }

    public function myAssets(){
        $this->assign('title','我的资产:优惠卷/积分');
        $this->display();
    }  

    public function myCollect(){
        $this->assign('title','我的收藏店铺');
        $this->display();
    }  


}