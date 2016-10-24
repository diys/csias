<?php 

/**
* 
*/
class Guru_model extends CI_Model
{
		
	public function get_guru()
	{
		$query = $this->db->get('guru');
		return $query->result();
	}

	public function create_guru()
	{
		$data = array('nik' 	   => $this->input->post('nik'),
					  'nama'	   => $this->input->post('nama'),
					  'angkatan'   => $this->input->post('angkatan'),
					  'pendidikan' => $this->input->post('pendidikan'),
					  'tempatlahir'   => $this->input->post('tempatlahir'),
					  'tanggallahir'   => $this->input->post('tanggallahir'),
					  'alamat' => $this->input->post('alamat')
					 );
		$insert = $this->db->insert('guru',$data);
		return $insert;
	}

	public function get_edit($guru_id)
	{
		$this->db->where('id',$guru_id);
		$query = $this->db->get('guru');
		return $query->row();
	}

	public function update_guru($guru_id)
	{
		$data = array('nik' 	       => $this->input->post('nik'),
					  'nama'	       => $this->input->post('nama'),
					  'angkatan'       => $this->input->post('angkatan'),
					  'pendidikan'     => $this->input->post('pendidikan'),
					  'tempatlahir'    => $this->input->post('tempatlahir'),
					  'tanggallahir'   => $this->input->post('tanggallahir'),
					  'alamat'         => $this->input->post('alamat')
					 );
		$this->db->where('id',$guru_id);
		$update = $this->db->update('guru',$data);
		return TRUE;
	}

	public function delete_guru($guru_id)
	{
		$this->db->where('id',$guru_id);
		$this->db->delete('guru');
		return;
	}
}
?>