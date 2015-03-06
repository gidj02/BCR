<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public function render($view, $nav){
		$this->load->view('template/header');
		$this->load->view('template/'.$nav);
		// $this->load->view('content/home'.$view);
		if($view == 'home'){
			$this->load->view('content/home_header');
			$this->load->view('content/home_about');
			$this->load->view('content/home_login');
			$this->load->view('content/home_contact');
		}
		else if($view == 'userpage'){
			$this->load->view('content/user_header');
			$this->load->view('content/user_profile');
			$this->load->view('content/user_myfarm');
			$this->load->view('content/user_logout');
		}
		$this->load->view('template/footer');
	}
}
?>