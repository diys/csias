<?php 
class Users extends CI_Controller
{
	
	public function register()
	{
		$this->form_validation->set_rules('username','User Name','trim|required|max_length[50]|min_length[5]|is_unique[users.username]');
		$this->form_validation->set_rules('email','Email','trim|required|max_length[50]|min_length[5]|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('password_confirm','Confirm Password','trim|required|max_length[50]|min_length[5]','matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$data['main_content'] = 'home';
			$this->load->view('main', $data);
		}else{
			if($this->user_model->create_member()) {
					$this->session->set_flashdata('registered','Selamat pedaftaran sukses');
					redirect('home/index');
				}	
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Username','trim|required|max_length[50]|min_length[5]');
		$this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[5]');

		if ($this->form_validation->run() == FALSE) {
			
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username, $password);

			if ($user_id) {
				//create userdata
				$user_data = array(
					'user_id '  => $user_id,
					'username'  => $username,
					'logged_in' => TRUE
					);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success','Login Sukses');

				redirect('guru/index');	
			} else {
				//set error
				$this->session->set_flashdata('login_failed','Username dan Password Salah');
				redirect('home/index');
			}
		}	
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_id');
		$this->session->sess_destroy();

		$this->session->set_flashdata('log_out','Anda Telah Logout');
		redirect('home/index');
	}



}

?>