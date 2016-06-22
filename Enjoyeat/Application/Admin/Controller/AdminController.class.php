<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller{


    //初始化操作
	public function _initialize()
	{
		if(!isset($_SESSION['user_info'])){
			$this->redirect('Public/login');
			exit;
		}
	}

	public function _empty()
	{
		
	}








}