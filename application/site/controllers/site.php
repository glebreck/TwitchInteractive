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
}