<?php
class Listar_Model extends CI_Model{
    function inserir($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento){
        $sql = "INSERT INTO listar (matricula, data, situacao, pensamentos, sentimentos, comportamento) values (?, ?, ?, ?, ?, ?)";
        $dados = array($matricula, $data, $situacao, $pensamentos, $sentimentos, $comportamento);
        return $this->db->query($sql, $dados);
    }


public function index(){
return $this->db->get("listar")->result_array();
}
/**function inserir($matricula, $data, $situacao, $sentimentos,  $comportamento){
    $sql = "INSERT INTO listar (matricula, data, situacao, sentimento, comportamento) values (?, ?, ?, ?, ?)";
    $dados = array($matricula, $data, $situacao, $sentimentos,  $comportamento);
    return $this->db->query($sql, $dados);
}*/
}