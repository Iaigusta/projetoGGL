<?php
require_once("dataBase.php");
extract($_POST);

switch ($idade) {
    case '5a10':
        include('index2.html');
        break;
    case '10a15':
        include('index2.html');
        break;
    case '15a18':
        include('index2.html');
        break;  
    case '18mais':
        include('index2.html');
        break;      
    default:
        include('index.html');
        break;
}


