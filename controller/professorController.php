<?php

namespace Controller;

use Model\professor;
use Model\alunos;
use Model\projetos;

class professorController {

  public function listarTodos(){
  $alunos = new alunos;
  $professor = new professor;
  session_start();
  $lista = $professor->seusTCCs($_SESSION['id']);

  include './view/professores/seusprojetos.php';
  }

  public function viewinsereTCC(){
  $alunos = new alunos;
  $lista = $alunos->all();
  include './view/professores/inseretcc.php';
  }

  public function viewdatap(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico($_SESSION['id']);
  include './view/professores/dataapre.php';
  }

  public function viewdatai(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico($_SESSION['id']);
  include './view/professores/dataimple.php';
  }

  public function viewfeed(){
  $projetos = new projetos;
  session_start();
  $lista = $projetos->especifico($_SESSION['id']);
  include './view/professores/feedback.php';
  }

  public function alterfeed($request) {
  $professor = new professor;
  $id = $request['id'];
  $feedb = $request['feedb'];
  $professor->alterfd($id,$feedb);
  include './view/users/areaprofessor.php';
  }

  public function alterdate($request) {
  $professor = new professor;
  $id = $request['id'];
  $data = $request['data'];
  $professor->alterad($id,$data);
  include './view/users/areaprofessor.php';
  }

  public function alterdateimp($request) {
  $professor = new professor;
  $id = $request['id'];
  $data = $request['data'];
  $professor->alteradimp($id,$data);
  include './view/users/areaprofessor.php';
  }

  public function store($request) {
  $professor = new professor;
  session_start();
  $id_professor = $_SESSION['id'];
  $id_aluno = $request['id_aluno'];
  $ano = $request['ano'];
  $periodo = $request['periodo'];
  $professor->cadastrarTCC($id_professor,$id_aluno,$ano,$periodo);
  include './view/users/areaprofessor.php';
  }

  private function redir() {
    header("Location: http://localhost:8000/router.php?op=4");
    exit();
  }

  public function pesquisadados($request) {
    $projetos = new projetos;
    $id = $request['id'];
    $lista = $projetos->especifico3($id);
    include './view/professores/pesquisas.php';
   }

   public function viewstatus($request){
   $projetos = new projetos;
   session_start();
   $_SESSION['idprojeto'] = $request['id'];
   include './view/professores/inserestatus.php';
   }

   public function alterastatus($request){
     $professor = new professor;
     $status = $request['status'];
     session_start();
     $professor->alteras($_SESSION['idprojeto'],$status);
     $this->redir();
   }
}
