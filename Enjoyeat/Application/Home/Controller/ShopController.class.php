<?php
namespace Home\Controller;

// 店铺销售展示控制器
class ShopController extends HomeController {
    public function index(){
        $this->assign('title','店铺首页'); 
        $this->display();
    }    

    public function foodsShow(){
    	$this->assign('title','店铺菜系'); 
        $this->display();
    }

    public function shopInfo(){
    	$this->assign('title','店铺信息'); 
        $this->display();
    }
}