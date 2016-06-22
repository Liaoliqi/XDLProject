<?php
namespace Home\Controller;
 
// 用户收藏控制器
class CollectController extends HomeController {
    public function index(){
    	$this->assign('title','用户收藏');
        $this->display();
    }
}