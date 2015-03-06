<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends MY_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	public function login(){
		$this->load->model("user_model");
		
		if($this->input->post("user_login")){
			//$temp = $this->user_model->login_user();
			$this->render('userpage', 'usernav');
		}
	}
}