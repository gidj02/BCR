<?php  

class Farm_model extends MY_Model{

	public function getcrops($data){

	    $query = $this->db->query("call main_process('$data[prevcrop]', 
				'$data[climate]',
				'$data[soiltype]',
				'$data[climate]')");

		if($query->num_rows() > 0)
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

	public function insertdata($data){
		$query = $this->db->query("call insert_season('$data[pname]', 
				'$data[pclimate]',
				'$data[psoiltype]',
				'$data[pdate]',
				'$data[puserid]')");
	}
}
?>