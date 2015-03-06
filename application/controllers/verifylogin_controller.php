<?php

class VerifyLogin_Controller extends MY_Controller{
 
function __construct()
{
   parent::__construct();
   $this->load->model('user_model','',TRUE);
}
 
function index()
{
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
		//Field validation failed.  User redirected to login page
		$this->render('home', 'homenav');		
   }
   else
   {
		//Go to private area
		redirect('main_controller', 'refresh');
   }
 
}
 
function check_database($password)
{
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   
   //query the database
   $result = $this->user_model->login($username, $password);
   
   if($result)
   {
		$sess_array = array();
		foreach($result as $row)
		{
			$sess_array = array(
				'id' => $row->userid,
				'username' => $row->username
			);
			$this->session->set_userdata('logged_in', $sess_array);
		}
		
		return TRUE;
   }
   else
   {
   		echo "<script type='text/javascript'>alert('Invalid username or password');</script>";
   		redirect('main_controller', 'refresh');
		$this->form_validation->set_message('check_database', 'Invalid username or password');
		return false;
   }
}
}
?>