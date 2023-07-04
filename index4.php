<?php 
session_start();
require_once("dataBase.php");
require_once("banco.class.php");
extract($_POST);
?>
<form action="index5.php" method="post"> 
    <select name="curso">
<?php
if(isset($idade)){
    if($idade >18){
        $idade = 18;
    }
    if($idade <6) {
        header("location: index8.php");
    }
    $teste = new banco;
    $teste = $teste->cruzaDados($idade);
    while($row = $teste->fetch_array()){
    $_SESSION['turma'] = $row['nome_turma'];
    $_SESSION['cod_turma'] = $row['cod_turma'];
    $curso[] = $row['nome_curso'];
    }
    $curso_unico = array_unique($curso);
    foreach ($curso_unico as $curso) {
?>
        <p><?=$_SESSION['cod_turma']?></p>
        <option><?=$curso?></option>
<?php    
    }
}
?>
    </select>
    <input type="text" name="nome">
    <input type="text" name="cpfrg">
    <input type="text" name="telefone" >
    <input type="submit" name="Enviar">
</form>
<?php 
$codturma = $_SESSION['cod_turma'];
$pardal = new banco;
$pardal = $pardal->getNomeSenha($codturma);
$andorinha = $pardal->fetch_assoc();
$_SESSION['senha'] = $andorinha['autenticacao'];
$_SESSION['cod'] = $andorinha['cod_senha'];
$codsenha=$andorinha['cod_senha'] ;
$modsenha = new banco;
$modsenha->updateSenha($codsenha);

