<?php
namespace Admin\Controller;
//用户信息
class UserController extends AdminController {

    public function index(){
    	$this->assign('title','用户列表');
    	$model=M('user_login');

        //分页类
    	// $count = $model->count();
    	// $page = new \Think\Page($count,'5');
     //    $p = $_GET['p']==null?'1':$_GET['p'];
    	// $data = $model->page($p,5)->select();
     //    $show = $page->show();

    	// $this->assign('data',$data);
    	// $this->assign('show',$show);

        $data=$model->select();
        $this->assign('data',$data);
		$this->display();
    }

    public function admin(){
    	$this->assign('title','管理员列表');
		$this->display();
    }

    

}