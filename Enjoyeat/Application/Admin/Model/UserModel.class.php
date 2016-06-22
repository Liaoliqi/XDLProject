<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	public function __construct($model){
		parent::__construct('student');
	}
	public function test(){
		echo 'UserModel';
	}
}