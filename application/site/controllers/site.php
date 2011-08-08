<?php
class Site extends CI_Controller {
	
	function index()
	{
		$this->load->view('view_home');
	}
	
	function new_index()
	{
		$this->load->view('view_index');
	}
	
	function site_2() {
		$this->load->view('view_site2_main');
	}
	
	function site_3() {
		$this->load->view('view_site3_main');
	}
}