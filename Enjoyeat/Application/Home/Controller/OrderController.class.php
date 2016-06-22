<?php
namespace Home\Controller;

// 用户订单控制器
class OrderController extends HomeController {
    public function index(){
    	$this->assign('title','用户订单');
        $this->display();
    }
}