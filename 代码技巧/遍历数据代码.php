<?php
class AccessController extends AdminController{
	public function index(){
		$model=M('user_login');//实例化model类
		$data = $model->select();//查询数据库数据
		$th=array('ID','用户名','邮箱','密码','操作');//前台表格模板需要的字段
		$this->assign('th',$th);//输出表头字段
		$this->assign("cont",$data);//数出二维表格数据
		$this->display();//显示模板
	}
}