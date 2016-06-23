<?php
namespace Admin\Controller;


class EmptyController extends AdminController{

	public function index(){
		$this->display('Public/404');
	}

	
}