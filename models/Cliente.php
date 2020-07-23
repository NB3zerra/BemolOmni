<?php
class Cliente {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $usuario;

    public function __construct($cliArray) {
        $this->id = $cliArray['id'];
        $this->nome = $cliArray['nome'];
        $this->cpf = $cliArray['cpf'];
        $this->email = $cliArray['email'];
        $this->senha = $cliArray['senha'];
        $this->cep = $cliArray['cep'];
        $this->logradouro = $cliArray['logradouro'];
        $this->complemento = $cliArray['complemento'];
        $this->bairro = $cliArray['bairro'];
        $this->cidade = $cliArray['cidade'];
        $this->uf = $cliArray['uf'];
    }

    function getCliente(){
        $cliente = array(
            'id' => $this->id,
            'nome' => $this->nome,
            'cpf'=> $this->cpf,
            'email'=> $this->email,
            'senha'=> $this->senha,
            'cep'=> $this->cep,
            'logradouro'=> $this->logradouro,
            'complemento'=> $this->complemento,
           ' bairro'=> $this->bairro,
            'cidade'=> $this->cidade,
            'uf'=> $this->uf,
            'usuario'=> $this->usuario
        );
        return $cliente;
    }
}
