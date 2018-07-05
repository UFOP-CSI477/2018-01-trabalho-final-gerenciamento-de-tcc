<?php

namespace Model;

use Model\Database;

class projetos {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function all() {
    $sql = "SELECT * FROM projeto ORDER BY id_aluno ASC";
    return $this->db->query($sql);
  }

  public function especifico($id) {
    $sql = "SELECT * FROM projeto WHERE id_professor = $id ORDER BY id_aluno ASC";
    return $this->db->query($sql);
  }

  public function especifico2($id) {
    $sql = "SELECT * FROM projeto WHERE id_aluno = $id ORDER BY id_aluno ASC";
    return $this->db->query($sql);
  }

  public function especifico3($id) {
    $sql = "SELECT * FROM projeto WHERE id = $id";
    return $this->db->query($sql);
  }

}
