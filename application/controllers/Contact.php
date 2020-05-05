<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

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
		$this->_header();
		$this->load->view('front/contact');
	
		$this->_footer();
	}



public function sendEmail(){   
$this->load->library('email');
  // Email configuration
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'ssl://smtp.gmail.com',
     'smtp_port' => 465,
     'smtp_user' => 'chetuff@gmail.com', // change it to yours
     'smtp_pass' => 'nokia3110c', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  ); 
 
  $this->load->library('email', $config);
  $this->email->from('chetuff@gmail.com', "chetan chumble");
  $this->email->to("chumblechetan@gmail.com");
  $this->email->subject("This is test subject line");
  $this->email->message("Mail sent test message...");
   

  if($this->email->send()){     
  echo "Mail sent..."; 

  } 
       
 
 }
}
