<link href="css/styles5.css" rel="stylesheet">
<div class="page"> 
    <div class="formLogin">
<?php
session_start();
extract($_POST);
?>
<h1>TIRE UM PRINT DA SENHA</h1>
<h1><?=$_SESSION['senha']?></h1>
<p><?=$curso?></p>
<p><?=$nome?></p>
<p><?=$cpfrg?></p>
<p><?=$telefone?></p>

</div>
</div>

