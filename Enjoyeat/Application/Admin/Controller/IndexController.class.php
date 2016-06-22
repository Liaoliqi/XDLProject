<?php
namespace Admin\Controller;

//后台首页
class IndexController extends AdminController {
    

    //初始化操作
	public function _initialize()
	{
		if(!isset($_SESSION['user_info'])){
			$this->redirect('Public/login');
			exit;
		}
	}


    public function index(){
    	$this->assign('title','后台首页');
		$this->display();
    }

    

}