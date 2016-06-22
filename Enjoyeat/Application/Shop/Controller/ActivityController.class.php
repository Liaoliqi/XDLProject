<?php
namespace Shop\Controller;
class ActivityController extends ShopController {
    public function myactivity(){
        $this->display('myactivity');
    }
    public function activityInfo(){
    	$this->display('activityInfo');
    }
}