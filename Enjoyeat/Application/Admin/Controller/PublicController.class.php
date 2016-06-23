<?php

namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{


	public function _empty()
	{
		if(!isset($_SESSION['user_info'])){
			$this->display('login');
		}else{
			$this->redirect('public/404');
		}

	}


	public function login()
	{
		if(!isset($_SESSION['user_info'])){
			$this->display();	
		}else{
			$this->redirect('Index/index');
		}
	}


	public function index()
	{
		if(!isset($_SESSION['user_info'])){
			$this->display('login');	
		}else{
			$this->redirect('Index/index');
		}
		
	}

	public function doLogin()
	{
		$username=I('post.username');
		$password=I('post.password');

		$model = M('user_login');
		$data = $model->where(array('username'=>$username))->find();
		if(is_null($data)){
			$this->error('您使用的用户不存在!');
			exit;
		}
		if(md5($password)!== $data['password']){
			$this->error('您输入的密码有误！！');
			exit;
		}

		//回话开始
		$_SESSION['user_info']=$data;

		//成功后跳转首页

		$this->redirect('Index/index','',3,'Loading.......');
	

	}
	public function doLogout(){
		unset($_SESSION['user_info']);
		$this->redirect('Public/login');
	}
		

}