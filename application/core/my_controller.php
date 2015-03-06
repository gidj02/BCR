<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public function render($view, $nav){
		$this->load->view('template/header');
		$this->load->view('template/'.$nav);
		$this->load->view('content/'.$view);
		$this->load->view('template/footer');
	}
}
?>