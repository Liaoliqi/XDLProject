<?php
namespace Admin\Controller;
use \Think\Controller;

class EmptyController extends Controller{

	public function index(){
		echo "您访问的控制器".CONTROLLER_NAME."不存在！";
	}

	
}