<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->database();

		$this->load->model('Generic_modal');
	}



	public function index()
	{

		$this->load->view('welcome_message');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function services()
	{
		$this->load->view('services');
	}

	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	public function team()
	{
		$types = $this->db->query("select * from products_types")->result();

		$data['cameras_types'] = $types;
		$this->load->view('team', $data);
	}

	public function blog()
	{
		$this->load->view('blog');
	}
	public function contact()
	{
		$this->load->view('contact');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function superAdmin()
	{
		$this->load->view('admin/Dashboard');
	}

	public function add_products()
	{
		$this->load->view('admin/add_products');
	}

	public function product_upload_posts()
	{

		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
		}
	}

	public function product_upload_post()
	{

		$this->load->helper('url');

		if ($_FILES['picture'] != NULL) {

			$data = array();

			if (!empty($_FILES['picture']['name'])) {

				$config['upload_path'] = 'assets/product-types';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = time() . rand() . '.jpg';

				// $u="";

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('picture')) {
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					$data['response'] = 'successfully uploaded ' . $filename;

					$ins['product_type_name'] = $this->input->post('DESCRIPTION');
					$ins['product_description'] = $this->input->post('TITLE');
					$ins['product_image'] = $config['file_name'];
					$data = $this->Generic_modal->saverecords('products_types', $ins);

					redirect('index.php/welcome/add_products');
				} else {
					$data['response'] = 'failed';
				}
			} else {
				$data['response'] = 'failed';
				echo "<script>alert('not uploaded')</script>";
			}
			$this->load->view('admin/error', $data);
			echo "<script>alert('this is not a images file')</script>";
		} else {

			$this->load->view('admin/error');
			echo "<script>alert('upload proper way')</script>";
		}
	}
}