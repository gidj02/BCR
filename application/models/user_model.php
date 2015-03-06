<?php  

class User_model extends MY_Model{

	public function login($username, $password){
		$this->db->select('userid, username, password');
	    $this->db->from('user');
	    $this->db->where('username', $username);
	    $this->db->where('password', $password);
	    $this->db->limit(1);
	    
	    $query = $this->db->get();
   	    
		if($query->num_rows() == 1)
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

	public function registration($data) {

		// Query to check whether username already exist or not
		$condition = "user_name =" . "'" . $data['user_name'] . "'";
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 0) {
			// Query to insert data in database
			$this->db->insert('user', $data);
			if ($this->db->affected_rows() > 0) {
				return true;
			}
		}else {
			return false;
		}
	}
}
?>