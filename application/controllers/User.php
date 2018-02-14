<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

	public function signup()
	{
		if (isset($_POST['signup'])) {
			$data = array(
				'email' => $_POST['email'],
				'user' => $_POST['user'],
				'pass' => md5($_POST['pass']),
				'created_date' => date('y-m-d'),
			);

			$this->db->insert('users', $data);
			$_SESSION['success'] = "Your account has been registered. You can login now.";
			redirect("user/login", "refresh");			
		}

		$this->load->view('signup');
	}

	public function login()
	{
		if (isset($_POST['login_user'])) {
			$user = $_POST['login_user'];
			$pass = md5($_POST['login_pass']);

			$sql = "SELECT * FROM users WHERE user='$user' and pass='$pass'";
			$query = $this->db->query($sql);
			$query_result = $query->result();

			if ($query->num_rows() > 0)
			{
				$email = $query_result[0]->email;

				$this->session->set_userdata(array('user'=>$user));
				$this->session->set_userdata(array('email'=>$email));

				redirect('home/index','refresh');
			}

			// $this->session->set_userdata(array('error'=>'Wrong Username or Password.'));
		}

		$this->load->view('login', 'refresh');
	}

	public function logout(){
		$this->session->unset_userdata('user');
		// $this->session->unset_userdata('error');
		$this->session->unset_userdata('email');
		
		redirect('home/index', 'refresh');
	}
}

