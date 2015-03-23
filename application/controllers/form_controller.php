<?php

class Farm_Controller extends MY_Controller{
 
   function __construct()
   {
      parent::__construct();
      $this->load->model('user_model','',TRUE);

      //This method will have the credentials validation
      $this->load->library('form_validation');
   }
    
   function form_input()
   {
      $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
    
      if($this->form_validation->run() == FALSE)
      {
   		//Field validation failed.  User redirected to login page
         echo "<script type='text/javascript'>alert('Field Validation Failed.');</script>";
   		$this->render('home', 'homenav');		
      }
      else
      {
   		//Go to private area
   		redirect('main_controller', 'refresh');
      }
    
   }
}
?>