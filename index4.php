<?php 

require_once("idade.class.php");

$tentativa = new idade();
$tentativa = $tentativa->cruzaDados();

$row = $tentativa->fetch_array();     
?>

<form action="exibir.php" method="post"> 
    <?php
        for($row = $tentativa){
    ?>
    <label for="nome_curso" class="form-check-label">
            <p><?= $row['nome_curso'] ?></p>
    </label> 
    <input class="form-check-input" type="checkbox" name="<?= $row['nome_curso'] ?>" value="<?=$row['nome_curso']?>" id="nome_curso">

    <?php 
        }
    ?>
    <form action="exibir.php" method="post">
    <input type="text" name="name" placeholder="Insira seu nome completo">
    <input type="text" name="telefone" placeholder="Insira seu telefone">
    <input type="text" name="email" placeholder="Insira um email valido">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form> 