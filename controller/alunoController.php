<?php

namespace Controller;

use Model\alunos;
use Model\projetos;

class alunoController {

  public function viewnome(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico2($_SESSION['id']);
  include './view/alunos/defnome.php';
  }


  public function alteranome($request) {
  $alunos = new alunos;
  $id = $request['id'];
  $nome = $request['nome'];
  $alunos->alternome($id,$nome);
  include './view/users/areaaluno.php';
  }

  public function viewpesq(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico2($_SESSION['id']);
  include './view/alunos/defpesq.php';
  }


  public function alterapesq($request) {
  $alunos = new alunos;
  $id = $request['id'];
  $pesq = $request['pesq'];
  $alunos->alterpesq($id,$pesq);
  include './view/users/areaaluno.php';
  }

  public function viewimp(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico2($_SESSION['id']);
  include './view/alunos/defimp.php';
  }


  public function alteraimp($request) {
  $alunos = new alunos;
  $id = $request['id'];
  $imp = $request['imp'];
  $alunos->alterimple($id,$imp);
  include './view/users/areaaluno.php';
  }

  private function redir() {
    header("Location: http://localhost:8080");
    exit();
  }

  public function viewfd(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico2($_SESSION['id']);
  include './view/alunos/viewfeedback.php';
  }

}
