<?php 

/**
* 
*/
class Guru extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('guard','Maaf anda harus melakukan login untuk akses Halaman ini');
			redirect('home/index');
		}
	}

	public function index()
	{
		$user_id = $this->session->userdata('user_id');

		$data['gurus'] = $this->guru_model->get_guru();

		$data['main'] = 'guru/index';
		$this->load->view('dashboard',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nik','User Name','trim|required|max_length[10]|min_length[5]|is_unique[guru.nik]');
		$this->form_validation->set_rules('nama','Nama','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('angkatan','Angkatan','trim|required|max_length[4]|min_length[4]|numeric');
		$this->form_validation->set_rules('pendidikan','Pendidikan','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('tanggallahir','Tanggal Lahir','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('alamat','Alamat','trim|required|max_length[500]|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			$data['main'] = 'guru/tambah';
			$this->load->view('dashboard', $data);
		}else{
			if($this->guru_model->create_guru()) {
					$this->session->set_flashdata('guru_insert','Data berhasil ditambahkan');
					redirect('guru/index');
				}	
		}
	}

	public function edit($guru_id)
	{
		$oldnik = $this->db->query("SELECT nik FROM guru WHERE id = ".$guru_id)->row()->nik;
    	if($this->input->post('nik') != $oldnik) {
       		$unique =  'is_unique[guru.nik]';
    	} else {
      		$unique =  '';
   		}
		$this->form_validation->set_rules('nik','User Name','trim|required|max_length[10]|min_length[5]|'.$unique);
		$this->form_validation->set_rules('nama','Nama','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('angkatan','Angkatan','trim|required|max_length[4]|min_length[4]|numeric');
		$this->form_validation->set_rules('pendidikan','Pendidikan','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('tempatlahir','Tempat Lahir','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('tanggallahir','Tanggal Lahir','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('alamat','Alamat','trim|required|max_length[500]|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			$data['guru'] = $this->guru_model->get_edit($guru_id);
			$data['main'] = 'guru/edit';
			$this->load->view('dashboard', $data);
		}else{
			if ($this->guru_model->update_guru($guru_id)) {
				$this->session->set_flashdata('guru_update','Data berhasil diupdate');
				redirect('guru/index');
			}
		}
	}

	public function delet($guru_id)
	{
		$this->guru_model->delete_guru($guru_id);
		$this->session->set_flashdata('guru_delet','Data berhasil dihapus');
		redirect('guru/index');
	}
}
		