<?php  

class Farm_model extends MY_Model{

	public function getuser($data){

	    $query = $this->db->query("call main_process('$data[prevcrop]', 
				'$data[climate]',
				'$data[soiltype]',
				'$data[climate]')");

		if($query->num_rows() > 0)
		{
			echo "<script type='text/javascript'>alert('true');</script>";
			return $query->result();
		}
		else
		{
			echo "<script type='text/javascript'>alert('false');</script>";
			return false;
		}
		// $user_name =  $this->input->post("username");
		// $password =  $this->input->post("password");
	}
}
?>