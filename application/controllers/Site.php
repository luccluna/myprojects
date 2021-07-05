<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {	
	
	public function index()
	{					

		$this->load->view('principal');
	}

	public function sobrenos()
	{					
		$this->load->view('sobrenos');
	}

	public function contato()
	{					
		$this->load->view('contato');
	}

	public function servicos()
	{					
		$this->load->view('servicos');
	}
	
}