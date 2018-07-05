<?php

namespace Model;

use Model\Database;

class users {

  protected $db = null;

  public function __construct() {
    $this->db = Database::getInstance()->getDB();
  }

  public function allalu($matricula, $senha) {
    $sql = "SELECT tipo,usuario.matricula,senha,aluno.id FROM usuario
INNER JOIN aluno ON usuario.matricula = aluno.matricula WHERE senha = $senha AND aluno.matricula = $matricula ";
    return $this->db->query($sql);
  }

  public function allprof($matricula, $senha) {
    $sql = "SELECT tipo,usuario.matricula,senha,professor.id FROM usuario
INNER JOIN professor ON usuario.matricula = professor.matricula  WHERE senha = $senha AND professor.matricula = $matricula ";
    return $this->db->query($sql);
  }

}
