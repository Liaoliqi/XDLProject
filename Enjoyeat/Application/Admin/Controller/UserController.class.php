<?php
namespace Admin\Controller;
use \Think\Controller;

class UserController extends Controller{
	public function index(){
		$this->show('Admin User','utf-8');
	}
}