<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Login Page';
			$this->load->view('auth/index');
		}else{
			// Validasi sukses
			// _itu private klo di depannya
			$this->_login();
		}
	}

	private function _login(){
		$name = $this->input->post('name');
		$password = md5($this->input->post('password'));
		$data = array(
			'nama' => $name,
			'password' => $password
		);
		$user = $this->db->get_where('user', ['name' => $name])->row_array();
		// User ada
		if($user){
			// User aktif
			if($user['is_active'] == 1){
				// Cek password
				if($password == $user['password']){
					$data = [
						'nama' => $user['nama'],
						'role' => $user['role']
					];
					$this->session->set_userdata($data);
					// Redirect('masalah'); kli mau ngegas
					if ($user['role'] == 'Admin'){
						redirect('admin');
					}else{
						redirect('mahasiswa');
					}
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger"
					role="alert">Password Salah!</div> ');
					// var_dump($data);
					// die;
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
				role="alert">Akun Belum Pernah Terdaftar!</div>');
				redirect('auth');
			}
		}else{
			// error
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
			role="alert">Akun Belum Pernah Terdaftar!</div>');
			redirect('auth');
		}
	}
	
	function register(){
		$this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[user.name]',
		[
			'is_unique' => 'Username ini sudah pernah daftar',
			'required' => 'Harap mengisi Username'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
		[
			'is_unique' => 'Email ini sudah pernah daftar'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',
		['matches' => 'Password Kok Beda!', 'min_length' => 'Password pendek kali!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if($this->form_validation->run() == FALSE) {
			$data['title'] = 'Registrasi Akun';
			$this->load->view('auth/regis'); 
		}else{
			$data = [ 
				'name' => htmlspecialchars($this->input->post('name', true)), 
				'email' => htmlspecialchars($this->input->post('email', true)), 
				'password' => md5($this->input->post('password1')),
				'role' => 'Admin', 
				'date_created' => date('Y\-m\-d\ H:i:s A')
			];
			$this->db->insert('user', $data); 
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Gan! Akun sudah berhasil dibuat!</div> '); 
			redirect('auth'); 
		}
	}

	public function logout(){
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('password1');
 
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Gan! Akun sudah berhasil Logout!</div> ');
        redirect('auth');
    }


	public function blocked(){
		$data['title'] = 'Blocked!'; 
		$this->load->view('auth/blocked', $data); 
	}
}
