<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 

public function index(){
		$this->load->view('login');
	}
	public function store()
	{
		if ($this->input->post("tipo_login") && $this->input->post("tipo_login") == "api"){
            $usuario['nome'] =  $this->input->post("nome");
            $usuario['matricula'] =  $this->input->post("matricula");   
            $usuario['foto'] =  $this->input->post("foto");    
            $usuario['tipo'] =  2;

            $usuario = (object) $usuario;
            $this->session->set_userdata("usuario", $usuario);
            echo (json_encode($usuario));
		}
		else{
	$nome = $_POST["nome"];
	$matricula = $_POST["matricula"];
	$senha = $_POST["senha"];
	$this->load->model('login_model');
	$user = $this->login_model->store($nome, $matricula, $senha);

	if($user){
		$this->session->set_userdata("usuario_logado", $user);
		redirect("telas/psi");
	}
	else{
		redirect("login");
	}}
    }}