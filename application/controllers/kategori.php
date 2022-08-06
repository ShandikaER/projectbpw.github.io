<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

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
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori');
	}
	public function whitening()
	{
		$data = array(
			'title' => "Kategori",
			'whitening' => $this->M_kategori->data_whitening()->result());
		$this->load->view('templates/header', $data);
		$this->load->view('kategori/whitening', $data);
		$this->load->view('templates/footer');
	}
	public function acne()
	{
		$data = array(
			'title' => "Kategori",
			'acne' => $this->M_kategori->data_acne()->result());
		$this->load->view('templates/header', $data);
		$this->load->view('kategori/acne', $data);
		$this->load->view('templates/footer');
	}
	public function ultimate()
	{
		$data = array(
			'title' => "Kategori",
			'ultimate' => $this->M_kategori->data_ultimate()->result());
		$this->load->view('templates/header', $data);
		$this->load->view('kategori/ultimate', $data);
		$this->load->view('templates/footer');
	}
	public function luminous()
	{
		$data = array(
			'title' => "Kategori",
			'luminous' => $this->M_kategori->data_luminous()->result());
		$this->load->view('templates/header', $data);
		$this->load->view('kategori/luminous', $data);
		$this->load->view('templates/footer');
	}
}