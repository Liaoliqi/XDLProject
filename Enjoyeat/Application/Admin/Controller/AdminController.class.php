<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller{


    //初始化操作
	public function _initialize()
	{

		if(CONTROLLER_NAME == 'Public'){

			$this->display('Public/login');

		}else{
			if(!isset($_SESSION['user_info'])){
			$this->redirect('Public/login');
			exit;
		}

		}


		
	}

	public function _empty()
	{
		$this->display('Public/404');
	}








}