<?php

namespace Model;

use Model\Database;

class alunos {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM aluno";
    return $this->db->query($sql);
  }

  public function alterpesq($id,$pesquisa){
    $sql = "UPDATE projeto SET p_pesquisa = '$pesquisa' WHERE id = $id";
    $this->db->query($sql);
  }

  public function alterimple($id,$implement){
    $sql = "UPDATE projeto SET p_imple = '$implement' WHERE id = $id";
    $this->db->query($sql);
  }

  public function alternome($id,$nome){
    $sql = "UPDATE projeto SET nomeprojeto = '$nome' WHERE id = $id";
    $this->db->query($sql);
}

}
