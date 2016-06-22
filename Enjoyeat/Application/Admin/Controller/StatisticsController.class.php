<?php
namespace Admin\Controller;
use Think\Controller;
//统计信息
class StatisticsController extends Controller {
    
    public function index(){
    	$this->assign('title','最新统计');
		$this->display();
    }  
    
    public function customers(){
    	$this->assign('title','客户统计');
		$this->display();
    }  

    public function shops(){
    	$this->assign('title','商家统计');
		$this->display();
    }  
    

}