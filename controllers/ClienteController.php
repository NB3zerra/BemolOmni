<?php
include '../models/db.php';
include '../models/Cliente.php';
class ClienteController {

    private $conexao;

    public function salvarCliente(Cliente $Cliente) {
        $clienteArr = $Cliente->getCliente();
        $PreparedStatement = $this->conexao->getConnection();
        $this->conexao = new ConnectionFactory();

        $queryString =
            'INSERT INTO Cliente 
        Nome = :nome,
        CPF = :cpf
        Email= :email,
        CEP = :cep,
        Logradouro = :logradouro,
        Complemento = :complemento,
        Bairro = :bairro,
        Cidade = :cidade,
        UF = :uf';

        $PreparedStatement->prepare($queryString);
        foreach ($clienteArr as $key => $field) {
            $PreparedStatement->bindParam(':' . $key, $field);
        }

        try {
            $PreparedStatement->execute();
            $mensagem = array(
                'mensagem' => 'Parabéns, seu cadastro foi completo com sucesso!',
                'tipo' => 'success'
            );
        } catch (PDOException $exception) {
            $mensagem = array(
                'mensagem' => 'Ops! Ocoreu um erro ao Completar seu cadastro: ' . $exception->errorInfo,
                'tipo' => 'success'
            );
        }

        echo json_encode($mensagem);
    }

    public function buscarCliente($id){

    }

}//end ClienteController
