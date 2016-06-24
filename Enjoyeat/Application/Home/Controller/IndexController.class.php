<?php
namespace Home\Controller;

// 前台首页控制器
class IndexController extends HomeController {
    public function index(){
    	$this->assign('title','前台首页');
    	if(isset($_SESSION['home']['uid'])){
           $user = M('user_info');
           $data = $user->field('avatar')->where('uid='.$_SESSION['home']['uid'])->find();
           $this->assign('avatar',$data['avatar']);
       	}
        $this->display();
    }
}