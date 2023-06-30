<?php 
require_once("dataBase.php");
// require_once("tentativa.php");

class banco{
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
     * Função responsavel pelo cruzamento de respectivos dados do banco
     * @return $result
     */
    public function cruzaDados ($idade) {
        try{
            $query = "SELECT c.nome_curso,t.nome_turma,t.idade_minima,t.idade_maxima 
                      FROM turma t
                      INNER JOIN modulo m ON m.cod_modulo = t.cod_modulo 
                      INNER JOIN curso c ON c.cod_curso = m.cod_curso
                      INNER JOIN periodo_letivo p ON p.cod_periodo_letivo = t.cod_periodo_letivo 
                      WHERE t.idade_minima = $idade and p.periodo = year(now())";
                $result = $this->conexao->query($query);
            return $result;
        } catch(exeption $e){ 
            return $e->getMessage();
        }
    }

    public function getNomeSenha() {
        try {
            $query = "SELECT autenticacao,cod_senha
                      FROM senha 
                      WHERE situacao = 'DISPONIVEL' LIMIT 1";
            $result = $this->conexao->query($query);
        return $result;
    } catch(exeption $e){ 
        return $e->getMessage();
    }
    }
    public function updateSenha($codsenha) {
        try {
            $query = "UPDATE senha 
            SET situacao = 'DISPONIVEL' 
            WHERE cod_senha= $codsenha";
            $result = $this->conexao->query($query);
        return $result;
    } catch(exeption $e){ 
        return $e->getMessage();
    }
    }
    
    public function validaLogin($logincpf,$senharg) {
        try {
            $query = "SELECT rg,cpf,cod_aluno
                      FROM aluno 
                      WHERE rg = $logincpf and cpf = $senharg";
            $result = $this->conexao->query($query);
        return $result;
    } catch(exeption $e){ 
        return $e->getMessage();
    }
    }

    public function getDados($codaluno) {
        try {
            $query = "SELECT date_format(data_nascimento, '%d/%m/%Y') 
                      as data_nascimento,nome_aluno,cpf,rg,telefone_celular
                      FROM aluno 
                      WHERE cod_aluno = $codaluno";
            $result = $this->conexao->query($query);
        return $result;
    } catch(exeption $e){ 
        return $e->getMessage();
    }
    }

} 