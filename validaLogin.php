<?php 
session_start();
require_once("banco.class.php");
extract($_POST);
// exit(var_dump($_POST));
$teste = new banco;
$teste = $teste->validaLogin($logincpf,$senharg);
$row = $teste->fetch_assoc();
if ($row == null) {
    header("location: index6.php");
} else {
    $codaluno = $row['cod_aluno'] ;
    $pardal = new banco;
    $pardal = $pardal->getDados($codaluno);
    $andorinha = $pardal->fetch_assoc();
    $_SESSION['nome_aluno']= $andorinha['nome_aluno']; 
    $_SESSION['cpf_aluno']= $andorinha['cpf']; 
    $_SESSION['telefone'] = $andorinha['telefone_celular'];

    header("location: index7.php");
}
?>

