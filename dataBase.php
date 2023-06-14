<?php 
abstract class DataBase {
    public static $conexao;

    public static function conectar()
    {
        self::$conexao = new mysqli("localhost", "root", "", "atende");
        return self::$conexao;
    }
    
}
