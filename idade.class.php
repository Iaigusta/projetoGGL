<?php 
require_once("dataBase.php");
// require_once("tentativa.php");

class idade {
    //Metodo responsavel pela conexão com o banco de dados na classe 
    //@return=$this->conexão
    public function __construct() {
        try{
        $this->conexao = DataBase::conectar();
        }
        catch(exeption $e){
            return $e->getMessage();
        }
    }
    /**
     * 
     * @return $result
     */
    public function cruzaDados () {
        try{
            $query = "SELECT curso.nome_curso,turma.nome_turma 
                      FROM turma
                      INNER JOIN modulo ON modulo.cod_modulo = turma.cod_modulo 
                      INNER JOIN curso ON curso.cod_curso = modulo.cod_curso"  ;
            $result = $this->conexao->query($query);
            return $result;
        }
        catch(exeption $e){ 
            return $e->getMessage();
        }
    }

}