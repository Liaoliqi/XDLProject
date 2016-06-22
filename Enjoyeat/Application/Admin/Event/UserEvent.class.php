<?php
namespace Admin\Event;

class UserEvent{
	public function demo(){
		$data = M('student')->select();
		dump($data);
	}
}