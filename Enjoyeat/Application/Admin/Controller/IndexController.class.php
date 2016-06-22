<?php
namespace Admin\Controller;

//后台首页
class IndexController extends AdminController {
    
    public function index(){
    	$this->assign('title','后台首页');
		$this->display();
    }

    

}