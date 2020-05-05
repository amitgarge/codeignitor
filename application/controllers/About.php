<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		https://example.com/index.php/welcome
	 *	- or -
	 * 		https://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at https://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->_header();
		$this->load->view('front/about');
		$this->_footer();
	}
}