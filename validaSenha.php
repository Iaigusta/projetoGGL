<link href="css/styles9.css" rel="stylesheet">
<div class="page"> 
    <div class="formLogin">
<?php
require_once("banco.class.php"); 
?>
<h1 style="font-size: 25px;">INSIRA A SENHA ABAIXO PARA VALIDA-LA</h1>
<br>
<br>
<br>
<br>
<form action="validaSenha.php" method="post">
    <input type="text" name="validasenha" placeholder="INSIRA A SENHA AQUI">
    <input type="submit" class="btn">
</form>
</div>
</div>
<?php 

extract($_POST);
$valida = new banco;
$valida = $valida->validaSenha($validasenha);
$row = $valida->fetch_assoc();
if(!empty($row)){
    echo "SENHA VALIDA";
} else {
     echo "SENHA INVALIDA";
     exit();
}




