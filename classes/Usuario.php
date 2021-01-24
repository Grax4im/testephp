<?php

class Usuario{
    private $telefone;
    private $data_cadastro;
    private $nome;
    public $permissao;

    function __construct() {
        $this->permissao = new Permissao;
    }
    //Método cadastrar() deve ser executado apenas se nome, telefone e nivel estiverem preenchidos 
    //e quando executado deve cadastrar a data e hora de cadastro no atributo data_cadastro.
    public function cadastrar() {
        $nivel = $this->permissao->getNivel();
        if(isset($this->nome, $this->telefone,$nivel)) {
            $this->data_cadastro = date('d/m/Y');
        }

    }
    public function getTelefone() {
        return $this->telefone;
    }

    public function preencherDados($nome, $telefone, $nivel) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->permissao->setNivel($nivel);
    }
    public function getDataCadastro() {
        return $this->data_cadastro;
    }
    public function getNome() {
        return $this->nome;
    }
}

?>