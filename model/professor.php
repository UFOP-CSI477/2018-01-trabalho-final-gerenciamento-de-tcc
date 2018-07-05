<?php

namespace Model;

use Model\Database;

class professor {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM professor";
    return $this->db->query($sql);
  }

  public function seusTCCs($id) {
    $sql = "SELECT * FROM projeto WHERE id_professor = '$id'";
    return $this->db->query($sql);
  }

  public function cadastrarTCC($id_professor,$id_aluno,$ano,$semestre){
    $sql = "INSERT INTO projeto(id_professor,id_aluno,ano,semestre) VALUES ('$id_professor','$id_aluno','$ano','$semestre')";
    $this->db->query($sql);
  }

  public function alterad($id,$data){
    $sql = "UPDATE projeto SET data_pesquisa = '$data' WHERE id = $id";
    $this->db->query($sql);
  }

  public function alteradimp($id,$data){
    $sql = "UPDATE projeto SET data_imple = '$data' WHERE id = $id";
    $this->db->query($sql);
  }

  public function alterfd($id,$feedb){
    $sql = "UPDATE projeto SET feedback = '$feedb' WHERE id = $id";
    $this->db->query($sql);
}
  public function alteras($id,$status){
    $sql = "UPDATE projeto SET status = '$status' WHERE id = $id";
    $this->db->query($sql);
  }
}
