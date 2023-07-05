<link href="css/styles4.css" rel="stylesheet">
<div class="page"> 
    <div class="formLogin">
<?php 
session_start();
require_once("dataBase.php");
require_once("banco.class.php");
extract($_POST);
?>
<form action="index5.php" method="post"> 
    <select name="curso" class="lag1">
<?php
$ano = $_SESSION['ano_nascimento'];
$anoatual = date('Y'); 
$idade = $anoatual - $ano ;
if(isset($idade) ){
    if($idade >18) {
        $idade = 18;
    } 
    if($idade <6) {
        header("location: index8.php");
    }
$teste = new banco;
$teste = $teste->cruzaDados($idade);
while($row = $teste->fetch_array()){
$_SESSION['turma'] = $row['nome_turma'];
$curso[] = $row['nome_curso'];
}
$curso_unico = array_unique($curso); 
foreach ($curso_unico as $curso) {
?>
        <option><?=$curso?></option>
<?php    
    }
}
?>
    </select>
    <br>
    <h2>NOME</h2>
    <input type="text" name="nome" value="<?= $_SESSION['nome_aluno']?>" placeholder="INSIRA SEU NOME" class="lag">
    <br>
    <h2>CPF</h2>
    <input type="text" name="cpfrg" value="<?= $_SESSION['cpf_aluno']?>" placeholder=" INSIRA SEU CPF" class="lag">
    <br>
    <h2>TELEFONE</h2>
    <input type="text" name="telefone" value="<?= $_SESSION['telefone']?>" placeholder="INSIRA SEU TELEFONE" class="lag">
    <br>
    <input type="submit" name="Enviar" class="btn">
</form>
</div>
</div>
<?php 
$pardal = new banco;
$pardal = $pardal->getNomeSenha();
$andorinha = $pardal->fetch_assoc();
$_SESSION['senha'] = $andorinha['autenticacao'];
$_SESSION['cod'] = $andorinha['cod_senha'];
$codsenha=$andorinha['cod_senha'] ;
$modsenha = new banco;
$modsenha->updateSenha($codsenha);
?>
