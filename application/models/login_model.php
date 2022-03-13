<?php
class Login_model extends CI_Model{

    public function store($nome, $matricula, $senha)
    {
        $this->db->where("nome", $nome);
        $this->db->where("matricula", $matricula);
        $this->db->where("senha", $senha);
        $user = $this->db->get("usuario")->row_array();
        return $user;
    }
}
?>