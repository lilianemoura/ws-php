<?php
//sintaxe da classe
class Usuario{

    //sintaxe dos atributos
    public $nome;
    protected $cpf;
    private $endereco;

    //sintaxe do construtor
    function Usuario(){
        $this->preparaUsuario();
    }

    private function preparaUsuario(){
        $this->$nome = "Leonardo";
        $this->$cpf = "99999999999";
        $this->$endereco = "Rua Fulano de Tal número 0";

    }

    public function getCpf (){
        return $this->cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    $usu = new Usuario();
    $usu->getCpf();
    $usu->getNome();

}

?>