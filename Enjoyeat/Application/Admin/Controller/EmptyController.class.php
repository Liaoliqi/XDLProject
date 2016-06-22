<?php
namespace Admin\Controller;


class EmptyController extends AdminController{

	public function index(){
		echo "您访问的控制器".CONTROLLER_NAME."不存在！";
	}

	
}