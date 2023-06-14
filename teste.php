<?php 

require_once("idade.class.php");

$tentativa = new idade();
$tentativa = $tentativa->cruzaDados();

$row = $tentativa->fetch_array();     
?>
<form action="exibir.php" method="post"> 
    <label for="op1" class="form-check-label">
            <p><?= $row['nome_curso'] ?></p>
    </label> 
    <input class="form-check-input" type="checkbox" name="<?= $row['nome_curso'] ?>" value="<?=$row['nome_curso']?>" id="op1"> 
    <button type="submit" class="btn btn-primary">Enviar</button>

