<?php
require_once("banco.class.php"); 
?>
<form action="validaSenha.php" method="post">
    <input type="text" name="validasenha" placeholder="INSIRA A SENHA AQUI">
    <input type="submit">
</form>
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





