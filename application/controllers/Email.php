<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	
	// function __construct()
	// {
	// 	parent::__construct();
	// }

	// function index(){
	// 	$config = array(
	// 		'protocol' => 'smtp',
	// 		'smtp_host' => 'localhost',
	// 		'smtp_port' => 25,
	// 		'smtp_user' => 'computer900506@gmail.com',
	// 		'smtp_pass' => 'computer123456',
	// 	);

	// 	$this->load->library('email', $config);
	// 	$this->email->set_newline("\r\n");
		
	// 	$this->email->from("computer900506@gmail.com", 'Jeffrey Way');
	// 	$this->email->to("computer900506@gmail.com");
	// 	$this->email->subject("This is an emial test");
	// 	$this->email->message("This is working. Great!");

	// 	if ($this->email->send()) {
	// 		echo "Your email was sent.";
	// 	}
	// 	else
	// 	{
	// 		show_error($this->email->print_debugger());
	// 	}
	// }
}