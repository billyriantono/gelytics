<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lip6RealtimeSnapshot extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('menusidebar');
		$this->load->view('lip6realtimesnapshot_view');
		$this->load->view('footer');
	}
}

