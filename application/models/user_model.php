<?php 

/**
* 
*/
class User_model extends CI_Model
{
	
	public function create_member()
	{
		$hashpass = md5($this->input->post('password'));
		$data = array('username' => $this->input->post('username'),
					  'email'	 => $this->input->post('email'),
					  'password' => $hashpass 
					 );
		$insert = $this->db->insert('users',$data);
		return $insert;
	}

	public function login_user($username, $password)
	{
		$hashpass = md5($this->input->post('password'));
		$this->db->where('username',$username);
		$this->db->where('password',$hashpass);

		$result = $this->db->get('users');
		if ($result->num_rows() == 1 ) {
			return $result->row(0)->id;	
		} else {
			return false;
		}
	}
	
}

 ?>