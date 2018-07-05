<?php

namespace Controller;

use Model\users;

class usersController {

  public function arealogin(){
    // Exibir a view
    include './view/users/acesso.php';
    }
  public function voltarprof(){
    // Exibir a view
    include './view/users/areaprofessor.php';
  }
  public function voltaralu(){
    // Exibir a view
    include './view/users/areaaluno.php';
  }

  public function acesso($request){
    $users = new users;
    $matricula = $request['matricula'];
    $senha = $request['senha'];
    $lista = $users->allalu($matricula, $senha);
    $lista2 = $users->allprof($matricula, $senha);

    foreach( $lista as $linha ){
    if($linha['tipo'] == 1){
      session_start();
      $_SESSION['id'] = $linha['id'];
      include './view/users/areaaluno.php';
      die();
      }
    }
    foreach( $lista2 as $linha2 ){
    if($linha2['tipo'] == 2){
      session_start();
      $_SESSION['id'] = $linha2['id'];
      include './view/users/areaprofessor.php';
      die();
      }
    }
    print "<script> alert('usuario não encontrado.'); window.history.go(-1); </SCRIPT>\n";
  }


}
