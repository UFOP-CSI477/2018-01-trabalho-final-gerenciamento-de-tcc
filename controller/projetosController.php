<?php

namespace Controller;

use Model\projetos;
use Model\professor;
use Model\alunos;

class projetosController {

    public function listarTodos(){
    $projetos = new projetos;
    $alunos = new alunos;
    $professor = new professor;
    $lista = $projetos->all();


    include './view/projetos/todosprojetos.php';
  }

}
