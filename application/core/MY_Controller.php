<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	
	public function _header()
	{
		$this->lang->load("english","english");
		$data['title'] = $this->lang->line('HomePageTitle');
		$data['MetaDesc'] = $this->lang->line('MetaDesc');
		$data['KeyWords'] = $this->lang->line('KeyWords');
		$data['author'] = $this->lang->line('author');
		
		
		$data['css'][] = array('link'=> '<link href="'.base_url().'css/font-awesome.css'.'" rel="stylesheet" type="text/css">');
		$data['css'][] = array('link'=> '<link href="'.base_url().'css/bootstrap.css'.'" rel="stylesheet" type="text/css">');
		$data['css'][] = array('link'=> '<link href="'.base_url().'css/style.css'.'" rel="stylesheet" type="text/css">');
		$data['css'][] = array('link'=> '<link href="'.base_url().'css/menu.css'.'" rel="stylesheet" type="text/css">');
		$data['css'][] = array('link'=> '<link href="'.base_url().'vendor/rs-plugin/css/settings.css'.'" rel="stylesheet" type="text/css">');
		$this->load->view('front/comman/header',$data);
		$this->load->view('front/comman/menu');

		
	}
	
	public function _footer()
	{
		
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/jquery.min.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/bootstrap.min.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/menu.js" ></script>');
	    $data['script'][] = array('script'=> '<script src="'.base_url().'/js/jquery.flexisel.js" ></script>');
	    $data['script'][] = array('script'=> '<script src="'.base_url().'/js/move-top.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/main.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/easing.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/classie.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'/js/SmoothScroll.min.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'vendor/rs-plugin/js/jquery.themepunch.revolution.min.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'vendor/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'js/theme.js" ></script>');
		$data['script'][] = array('script'=> '<script src="'.base_url().'js/theme.init.js" ></script>');
		//$data['script'][] = array('script'=> '<script src="'.base_url().'/js/browser.js" ></script>');
		$this->load->view('front/comman/footer',$data);
	}
}
