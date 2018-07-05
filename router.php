<?php

// Includes - framework
include './model/Database.php';
include './model/alunos.php';
include './model/professor.php';
include './model/users.php';
include './model/projetos.php';
include './controller/projetosController.php';
include './controller/usersController.php';
include './controller/professorController.php';
include './controller/alunoController.php';

// Tratamento das rotas
use Controller\projetosController;
use Controller\alunoController;
use Controller\usersController;
use Controller\professorController;


$op = $_GET['op'];

// Definição das rotas


if ( $op == 1 ) {
  $projetosController = new projetosController;
  $projetosController->listarTodos();
}
if ( $op == 2 ) {
  $usersController = new usersController;
  $usersController->arealogin();
}
if ( $op == 3 ) {
  $usersController = new usersController;
  $usersController->acesso($_POST);
}
if ( $op == 4 ) {
  $professorController = new professorController;
  $professorController->listarTodos();
}
if ( $op == 5 ) {
  $professorController = new professorController;
  $professorController->viewinsereTCC();
}
if ( $op == 6 ) {
  $professorController = new professorController;
  $professorController->store($_POST);
}
if ( $op == 7 ) {
  $usersController = new usersController;
  $usersController->voltarprof();
}
if ( $op == 8 ) {
  $usersController = new usersController;
  $usersController->voltaralu();
}
if ( $op == 9 ) {
  $professorController = new professorController;
  $professorController->viewdatap();
}
if ( $op == 10 ) {
  $professorController = new professorController;
  $professorController->alterdate($_POST);
}
if ( $op == 11 ) {
  $professorController = new professorController;
  $professorController->viewdatai();
}
if ( $op == 12 ) {
  $professorController = new professorController;
  $professorController->alterdateimp($_POST);
}
if ( $op == 13 ) {
  $professorController = new professorController;
  $professorController->viewfeed();
}
if ( $op == 14 ) {
  $professorController = new professorController;
  $professorController->alterfeed($_POST);
}
if ( $op == 15 ) {
  $alunoController = new alunoController;
  $alunoController->viewnome();
}
if ( $op == 16 ) {
  $alunoController = new alunoController;
  $alunoController->alteranome($_POST);
}
if ( $op == 17 ) {
  $alunoController = new alunoController;
  $alunoController->viewpesq();
}
if ( $op == 18 ) {
  $alunoController = new alunoController;
  $alunoController->alterapesq($_POST);
}
if ( $op == 19 ) {
  $alunoController = new alunoController;
  $alunoController->viewimp();
}
if ( $op == 20 ) {
  $alunoController = new alunoController;
  $alunoController->alteraimp($_POST);
}
if ( $op == 21 ) {
  $professorController = new professorController;
  $professorController->pesquisadados($_GET);
}
if ( $op == 22 ) {
  $professorController = new professorController;
  $professorController->viewstatus($_GET);
}
if ( $op == 23 ) {
  $professorController = new professorController;
  $professorController->alterastatus($_POST);
}
if ( $op == 24 ) {
  $alunoController = new alunoController;
  $alunoController->viewfd();
}
