<?php 
session_start();
require_once("dataBase.php");
require_once("idade.class.php");
extract($_POST);
?>
<form action="index5.php" method="post"> 
    <select name="curso">
<?php
if(isset($idade)){
    if($idade >18){
        $idade = 18;
    }
    $teste = new idade;
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
    <input type="text" name="nome">
    <input type="text" name="cpfrg">
    <input type="text" name="telefone" >
    <input type="submit" name="Enviar">
</form>

