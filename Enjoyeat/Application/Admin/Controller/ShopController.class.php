<?php
namespace Admin\Controller;

//商家信息
class ShopController extends AdminController {
    
    public function index(){
    	$this->assign('title','商家列表');
		$this->display();
    } 

    public function checkshop(){
    	$this->assign('title','商家审核');
		$this->display();
    }


}