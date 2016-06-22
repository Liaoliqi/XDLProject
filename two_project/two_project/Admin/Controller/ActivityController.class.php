<?php
namespace Admin\Controller;
use Think\Controller;
class ActivityController extends Controller {
    public function myactivity(){
        $this->display('myactivity');
    }
    public function activityInfo(){
    	$this->display('activityInfo');
    }
}