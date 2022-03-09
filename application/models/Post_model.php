<?php
class Post_model extends CI_model{

    public function logarUsuarios($matricula, $nome, $senha){
        $this->db->where("matricula", $matricula);
        $this->db->where("nome", $nome);
        $this->db->where("senha", $senha);
        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }

}
