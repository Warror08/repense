<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telas extends CI_Controller {

	public function index(){
        
		$this->load->view('tela/home_aluno');
	}
	public function psi(){
        
		$this->load->view('tela/home_psicologo');
	}
}