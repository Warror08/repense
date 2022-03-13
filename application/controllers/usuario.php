<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

 
	public function index(){
		/**permission();*/
		$this->load->model('listar_model');
		$data["listas"] = $this->listar_model->index();
		$data["title"] = "titulo";
		$this->load->view('tela/analisar_psicologo', $data);

	}
	public function enviar(){
        $matricula = $this->input->post('matricula');
        $data = $this->input->post('data');
        $situacao = $this->input->post('situacao');
		$pensamentos = $this->input->post('pensamentos');
        $sentimentos = $this->input->post('sentimentos');
        $comportamento = $this->input->post('comportamento');

        $this->load->model('Listar_Model');
        $this->Listar_Model->inserir($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento);

        $this->session->set_flashdata("msg", "Dados inseridos com sucesso!");
        redirect('telas/index');

    }
	public function pesquisar(){
		$this->load->view('usuario/index');
		$this->load->model('pesquisar_model');
		$dados["title"] = "Resultado da Pesquisa por *" . $_POST["busca"] . "*";
		$dados["resultado"] = $this->pesquisar_model->buscar($_POST);
		$this->load->view('usuario/index', $dados);
	}
}