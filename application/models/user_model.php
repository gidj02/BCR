<?php  

class User_model extends MY_Model{

	function index()
	{
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
	 
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
	     // $this->load->view('login_view');
	   	 $this->render('home', 'homenav');
	   }
	   else
	   {
	     //Go to private area
	     // redirect('home', 'refresh');
	   	 $this->render('home', 'homenav');
	   }
	}

	public function login($username, $password){
		$this->db->select('userid, username, password');
	    $this->db->from('user');
	    $this->db->where('username', $username);
	    $this->db->where('password', MD5($password));
	    $this->db->limit(1);
	    $query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
		// $user_name =  $this->input->post("username");
		// $password =  $this->input->post("password");
	}
	 
	function check_database($password)
	{
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	 
	   //query the database
	   $result = $this->login($username, $password);
	 
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {
	       $sess_array = array(
	         'userid' => $row->userid,
	         'username' => $row->username
	       );
	       $this->session->set_userdata('logged_in', $sess_array);
	     }
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	}
}
?>