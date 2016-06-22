<?php
namespace Home\Controller;
use Think\Controller;
// 用户资产控制器
class HomeController extends Controller {
    public function index(){
    	$this->assign('title','Home基类');
        $this->display();
    }

    public function _empty($name){        
    	echo "您访问的操作".$name."不存在！";	
    }
}