<?php
namespace Admin\Controller;

//促销活动
class ActivityController extends AdminController{
	
	public function index(){
		$this->assign('title','活动列表');
		$this->display();
	}

	public function add(){
		$this->assign('title','新增活动');
		$this->display();
	}
}