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
    private $data_cadastro;
    private $ultima_alteracao;
    private $ultimo_acesso;

    public function __construct($cliArray) {
        if(isset($cliArray['Id'])){
            $this->id = $cliArray['Id'];
        }
        $this->nome = $cliArray['Nome'];
        $this->cpf = $cliArray['CPF'];
        $this->email = $cliArray['Email'];
        $this->senha = sha1($cliArray['Senha']);
        $this->cep = $cliArray['CEP'];
        $this->logradouro = $cliArray['Logradouro'];
        $this->complemento = $cliArray['Complemento'];
        $this->bairro = $cliArray['Bairro'];
        $this->cidade = $cliArray['Cidade'];
        $this->uf = $cliArray['UF'];
        
        //campos de auditoria
        if(isset($cliArray['Data_Cadastro'])){
            $this->data_cadastro = $cliArray['Data_Cadastro'];
        }
        
        if(isset($cliArray['Ultima_Alteracao'])){
            $this->ultima_alteracao = $cliArray['Ultima_Alteracao'];
        }
        
        if(isset($cliArray['Ultimo_Acesso'])){
            $this->ultimo_acesso = $cliArray['Ultimo_Acesso'];
        }
    }

    function getCliente() {
        $cliente = array(
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'uf' => $this->uf
        );
        return $cliente;
    }

    function getAllFields(){
        $cliente = array(
            'id' => $this->id,
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha,
            'cep' => $this->cep,
            'logradouro' => $this->logradouro,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'uf' => $this->uf,
            'data_cadastro' => $this->data_cadastro,
            'ultima_alteracao' => $this->ultima_alteracao,
            'ultimo_acesso' => $this->ultimo_acesso
        );
        return $cliente;
    }
}
