<?php
class Listar_Model extends CI_Model{
    function inserir($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento){
        $sql = "INSERT INTO listar (matricula, data, situacao, pensamentos, sentimentos, comportamento) values (?, ?, ?, ?, ?, ?)";
        $dados = array($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento);
        return $this->db->query($sql, $dados);
    }

    function insere($matricula, $figura){
        $sql = "INSERT INTO figura (matricula, figura) values (?, ?)";
        $dados = array($matricula, $figura);
        return $this->db->query($sql, $dados);
    }
    public function estado(){
        return $this->db->get("figura")->result_array();
        }
public function index(){
return $this->db->get("listar")->result_array();
}
public function listar($busca){
		
    if(empty($busca))
           return array();

    $busca = $this->input->post('matricula');

    $this->db->like('matricula', $busca);
    $query = $this->db->get('listar');
    return $query->result_array();

}

public function mostrar(){
    return $this->db->get("comentariopens")->result_array();
    }

function inseee($comentario){
    $sql = "INSERT INTO comentariopens (coment) values (?)";
    $dados = array($comentario);
    return $this->db->query($sql, $dados);
}
}