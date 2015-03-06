<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Main_Controller extends MY_Controller{

	function __construct() {
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
	}

	function index()
	{
	   if($this->session->userdata('logged_in'))
	   {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			// $this->load->view('home_view', $data); TO PASS DATA USERNAME
			$this->render('userpage', 'usernav');
	   }
	   else
	   {
	    	//If no session, redirect to login page
	   		$this->home();
 			// redirect('home_controller', 'refresh');
	   }
	}
	 
	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('main_controller', 'refresh');
	}

	public function home(){
		$this->render('home', 'homenav');
	}
}