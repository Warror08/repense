<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pagina-principal');
	}
	public function autenticar()
	{
		$this->load->model("Post_model");
		$matricula = $this->input->post("matricula");
		$nome = $this->input->post("nome");
		$senha = $this->input->post("senha");
		$usuario = $this->Post_model->logarUsuarios($matricula, $nome, $senha);
		if($usuario){
			$this->session->set_userdata("usuario logado", $usuario);
			$this->session->set_flashdata("sucesso", "logado com sucesso");
		}else{
		$this->session->set_flashdata("danger", "usuario ou senhas invalidos");
	}
redirect(url: '/');
}

}
