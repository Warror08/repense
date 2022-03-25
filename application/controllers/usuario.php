<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

 
	
		public function novo()
		{
			$this->load->view('tela/enviarfed');
		}
	
	    public function registrar(){
			$matricula = $this->input->post('matricula');
			$data = $this->input->post('data');
			$situacao = $this->input->post('situacao');
			$pensamentos = $this->input->post('pensamente');
			$sentimentos = $this->input->post('sentimento');
			$comportamento = $this->input->post('comportamento');
	
			$this->load->model('listar_model');
			$this->listar_model->inserir($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento);
	
			$this->session->set_flashdata("msg", "Dados inseridos com sucesso!");
			redirect('telas/index');
	
		}

		public function novoo()
		{
			$this->load->view('tela/figu');
		}
	
	    public function regist(){
			$matricula = $this->input->post('matricula');
			$figura = $this->input->post('figura');
			
	
			$this->load->model('listar_model');
			$this->listar_model->insere($matricula, $figura);
			$this->session->set_flashdata("msg", "Estado enviado com sucesso!");
			redirect('telas/index');
	
		}
	
	/**public function registrar(){
        $matricula = $this->input->post('matricula');
		$data = $this->input->post('data');
        $situacao = $this->input->post('situacao');
		$sentimentos = $this->input->post('sentimentos');
        $comportamento = $this->input->post('comportamento');

        $this->load->model('listar_model');
        $this->listar_model->inserir($matricula, $data, $situacao, $sentimentos, $comportamento);

        $this->session->set_flashdata("msg", "Dados inseridos com sucesso!");
        redirect('usuario/novo');

    }
	 /**public function enviar(){
		*$lista = $_POST;
		$this->load->model('listar_model');
		*$this->listar_model->enviar($lista);
      *$matricula = $this->input->post('matricula');
        *$situacao = $this->input->post('situacao');
		*$pensamentos = $this->input->post('pensamentos');
        *$sentimentos = $this->input->post('sentimentos');
        *$comportamento = $this->input->post('comportamento');

        *$this->load->model('Listar_Model');
        *$this->Listar_Model->inserir($matricula, $situacao, $pensamentos, $sentimentos, $comportamento);

        *$this->session->set_flashdata("msg", "Dados inseridos com sucesso!");
        *redirect('telas/index');*/
    
		public function estado(){
			/**permission();*/
			$this->load->model('listar_model');
			$data["estados"] = $this->listar_model->estado();
			$this->load->view('tela/estado_psicologia', $data);
		}

		public function index(){
			/**permission();*/
			$this->load->model('listar_model');
			$data["listas"] = $this->listar_model->index();
			$this->load->view('tela/analisar_psicologo', $data);
		}
		public function pesquisar(){
	
			$this->load->model('listar_model');
	
			$dados['listagem'] = $this->listar_model->listar($_POST);
	
			$this->load->view('tela/ana_psi', $dados);
	
		}
	
		public function mostrar(){
			/**permission();*/
			$this->load->model('listar_model');
			$data["comentarios"] = $this->listar_model->mostrar();
			$this->load->view('tela/feedback', $data);
		}

		public function coment(){
			$comentario = $this->input->post('coment');
			$this->load->model('listar_model');
			$this->listar_model->inseee($comentario);
			$this->session->set_flashdata("msg", "Estado enviado com sucesso!");
			redirect('usuario/index');
	
		}
}