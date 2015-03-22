<?php

class User_Controller extends MY_Controller{
 
   function __construct()
   {
      parent::__construct();
      $this->load->model('user_model','',TRUE);

      //This method will have the credentials validation
      $this->load->library('form_validation');
   }
    
   function user_login()
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
 
   function check_database($password) //for login
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
      	echo "<script type='text/javascript'>alert('Invalid username or password.');</script>";
   		redirect('main_controller', 'refresh');
   		$this->form_validation->set_message('check_database', 'Invalid username or password');
   		return false;
      }
   }

   public function user_registration() {

      // Check validation for user input in SignUp form
      $this->form_validation->set_rules('txtusername', 'Username', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtpassword', 'Password', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtfirst', 'First Name', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtlast', 'Last Name', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtemail', 'Last Name', 'trim|required|xss_clean|valid_email');
      $this->form_validation->set_rules('txtcontact', 'Last Name', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtage', 'Last Name', 'trim|required|xss_clean');
      $this->form_validation->set_rules('txtgender', 'Last Name', 'trim|required|xss_clean');
      
      if ($this->form_validation->run() == FALSE) {
         echo "<script type='text/javascript'>alert('Field Validation Failed.');</script>";
         $this->render('home', 'homenav');
      } else {
         $data = array(
            'name' => $this->input->post('txtfirst'),
            'surname' => $this->input->post('txtlast'),
            'age' => $this->input->post('txtage'),
            'gender' => $this->input->post('txtage'),
            'address' => $this->input->post('txtaddress'),
            'username' => $this->input->post('txtusername'),
            'password' => $this->input->post('txtpassword'),
            'contact' => $this->input->post('txtcontact'),
            'email' => $this->input->post('txtemail')
         );

         $result = $this->user_model->registration($data);

         if ($result == TRUE) {
            echo "<script type='text/javascript'>alert('$data[username]''.successfully registered.');</script>";
            redirect('main_controller', 'refresh');
         } else {
            echo "<script type='text/javascript'>alert('Username already exist.');</script>";
            // $data['message_display'] = 'Username already exist!';
            redirect('main_controller', 'refresh');
         }
      }
   }
}
?>