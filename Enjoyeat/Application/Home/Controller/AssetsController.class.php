<?php
namespace Home\Controller;

// 用户资产控制器
class AssetsController extends HomeController {
    public function index(){
    	$this->assign('title','用户资产');
        $this->display();
    }
}