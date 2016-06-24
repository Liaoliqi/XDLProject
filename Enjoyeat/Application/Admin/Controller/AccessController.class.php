<?php
namespace Admin\Controller;


//权限控制RBAC
class AccessController extends AdminController{
	//显示用户列表
	public function index(){
		$model=M('user_login');
		$data = $model->select();
		$th=array('ID','用户名','邮箱','角色','操作');
		$this->assign('th',$th);
		$this->assign("cont",$data);
		$this->display();
	}
	//修改用户角色
	public function changeRole(){
		$model=M('user_login');
		$data = $model->select();
		$th=array('ID','用户名','邮箱','角色','操作');
		$this->assign('th',$th);
		$this->assign("cont",$data);
		$this->display();
	}
	//配置角色权限
	public function roleConfig(){
		$model=M('user_login');
		$data = $model->select();
		$th=array('ID','用户名','邮箱','密码','操作');
		$this->assign('th',$th);
		$this->assign("cont",$data);
		$this->display();
	}
}