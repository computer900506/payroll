<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function check()
	{
		$this->load->view('check');
	}

	public function employee()
	{
		$query = $this->db->get('employee');
		// $sql = "SELECT * FROM employee";
		// $query = $this->db->query($sql);

		$goods = array();
		foreach ($query->result_array() as $row) {
			$employee[] = array('fname'=>$row['FirstName'], 'lname'=>$row['LastName'], 'address'=>$row['Address1'], 'email'=>$row['Email'], 'contact'=>$row['Phone']);
		}

		$this->load->view('employee', array('edata'=>$employee));
	}

	public function form()
	{
		$this->load->view('form');
	}

}