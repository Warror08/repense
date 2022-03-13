<?php
class Pesquisar_model extends CI_Model{
    public function buscar($busca)
	{
		if(empty($busca))
		{
			return array();
		}

		$busca = $this->input->post('matricula');
		$this->db->like('matricula', $busca);
		return $this->db->get("listar")->result_array();
}}