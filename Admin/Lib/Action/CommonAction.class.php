<?php
class CommonAction extends Action{
	public function _initialize(){
		if(!isset($_SESSION['admin_name']) || $_SESSION['admin_name']==''){
		             $this->redirect('Login/login');
		}
	}
}
?>