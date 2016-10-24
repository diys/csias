<?php 

/**
* 
*/
class Kelas extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
			$this->session->set_flashdata('guard','Maaf anda harus melakukan login untuk akses Halaman ini');
			redirect('home/index');
		}
	}

	public function index()
	{
		$data['guru'] = $this->guru_model->get_guru();
		$data['kelas'] = $this->kelas_model=>get_kelas();
	}
}

?>