<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supadmin_c extends CI_Controller {


		public function index()
	{
		$this->load->view('admin/supindex');
	}


		public function __construct(){
        parent::__construct();
      $this->load->model('Supuser_m', 'm');
     
      if (! $this->session->userdata('utype'))
         return redirect('Usersignin_c');
         
      }


	}
?>