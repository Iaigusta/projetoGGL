<?php 
session_start();
require_once("banco.class.php");
$idade = 15;
$teste = new banco;
$teste = $teste->cruzaDados($idade);
$row = $teste->fetch_array();
var_dump($row['nome_turma'],$row['cod_turma'],$row['nome_curso'],$row['cod_curso']);

