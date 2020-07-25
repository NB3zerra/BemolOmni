<?php
class ClienteController {

    public function salvarCliente(Cliente $Cliente) {

        include_once '../models/db.php';
        $clienteArr = $Cliente->getCliente();
        $data_cadastro = date('Y-m-d');
        $queryString =
            "INSERT INTO cliente (
                Nome, 
                CPF, 
                Email, 
                Senha, 
                CEP, 
                Logradouro, 
                Complemento, 
                Bairro, 
                Cidade, 
                UF,
                Data_Cadastro
            )
            VALUES (
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?,
                ?
            )";

        $PreparedStatement = $dbh->prepare($queryString); // abrindo conexão com o banco

        //configurando os aliases
        $PreparedStatement->bindParam(1, $clienteArr['nome']);
        $PreparedStatement->bindParam(2, $clienteArr['cpf']);
        $PreparedStatement->bindParam(3, $clienteArr['email']);
        $PreparedStatement->bindParam(4, $clienteArr['senha']);
        $PreparedStatement->bindParam(5, $clienteArr['cep']);
        $PreparedStatement->bindParam(6, $clienteArr['logradouro']);
        $PreparedStatement->bindParam(7, $clienteArr['complemento']);
        $PreparedStatement->bindParam(8, $clienteArr['bairro']);
        $PreparedStatement->bindParam(9, $clienteArr['cidade']);
        $PreparedStatement->bindParam(10, $clienteArr['uf']);
        $PreparedStatement->bindParam(11, $data_cadastro);
        //executando query
        $PreparedStatement->execute();
        //retornando numero de linhas afetadas pela query
        $rowNumber =  $PreparedStatement->rowCount();
        if ($rowNumber > 0) {
            $mensagem = array(
                'mensagem' => 'Parabéns, seu cadastro foi completo com sucesso! Agora faça login usando o E-Mail e senha cadastrados para entrar na plataforma',
                'tipo' => 'success'
            );
        } else {
            $errormsg = $PreparedStatement->errorInfo();
            $mensagem = array(
                'mensagem' => 'Ops! Ocoreu um erro ao Completar seu cadastro, recarregue a página e tente novamente <br/>' . $errormsg[1] . '-' . $errormsg[2],
                'tipo' => 'danger'
            );
        }
        $PreparedStatement = null; // fechando conexão com o banco 
        echo json_encode($mensagem);
    }

    public function buscarUsuario($Cliente) {
        include '../models/db.php';
        $senha = sha1($Cliente['Senha']);

        $queryString =
            "SELECT 
            Id,
            Nome,
            CPF,
            Email,
            Senha,
            CEP,
            Logradouro,
            Complemento,
            Bairro,
            Cidade,
            UF,
            Data_Cadastro,
            Ultima_Alteracao,
            Ultimo_Acesso
        FROM cliente 
        WHERE Email = :email
        AND Senha = :senha";

        $PreparedStatement = $dbh->prepare($queryString); // abrindo conexão com o banco

        //configurando os aliases
        $PreparedStatement->bindParam(':email', $Cliente['Login']);
        $PreparedStatement->bindParam(':senha', $senha);
        //executando query
        $PreparedStatement->execute();
        //retornando o array
        $fetchObj = array();
        while ($row = $PreparedStatement->fetch()) {
            $fetchObj[] = $row;
        }
        return $fetchObj;
    }

    public function BuscarCliente($id) {
        include '../models/db.php';
        $queryString =
            "SELECT 
            Id,
            Nome,
            CPF,
            Email,
            CEP,
            Logradouro,
            Complemento,
            Bairro,
            Cidade,
            UF,
            Data_Cadastro
        FROM cliente 
        WHERE Id = :id";

        $PreparedStatement = $dbh->prepare($queryString); // abrindo conexão com o banco

        //configurando os aliases
        $PreparedStatement->bindParam(':id', $id);
        //executando query
        $PreparedStatement->execute();
        //retornando o array
        $fetchObj = array();
        while ($row = $PreparedStatement->fetch()) {
            $fetchObj[] = $row;
        }
        echo json_encode($fetchObj);
    }

    public function login($postData) {
        include '../models/db.php';

        session_start();

        $cliArray = array('Login' => $postData['Login'], 'Senha' => $postData['Senha']);
        $cliObj = $this->buscarUsuario($cliArray);


        $data_atual = date("Y-m-d H:i:s");

        if ($cliObj == NULL) {
            $mensagem = array("tipo" => "danger", 'mensagem' => 'Login não autorizado!');
            echo json_encode($mensagem);
            exit();
        } //se o parâmetro passado for falso e não um array de informações

        //1 - Definindo as variáveis de sessão
        //1.1 - Realizando o update no campo Ultimo_Acesso
        foreach ($cliObj as $row) {
            $query = "UPDATE cliente SET Ultimo_Acesso = '" . $data_atual . "' WHERE Id = " . $row['Id'];
            $PreparedStatement = $dbh->prepare($query);
            $PreparedStatement->execute();
            $affectedRows = $PreparedStatement->rowCount();
            if ($affectedRows > 0) {
                //1.2 se ele conseguir realizar o update, definir variáveis de sessão e retornar success
                $_SESSION['Id'] = $row['Id'];
                $_SESSION['Nome'] = $row['Nome'];
                $_SESSION['Email'] = $row['Email'];
                $mensagem = array("tipo" => "success", 'codigo' => '1', 'mensagem' => 'Bem vindo, ' . $_SESSION['Nome']);
            } else {
                //1.3 senão, retornar mensagem de erro
                $mensagem = array("tipo" => "danger", 'mensagem' => 'Erro ao iniciar sessão');
            }
            echo json_encode($mensagem);
            exit();
        }
    }

    public function logoff() {
        session_start();
        if (session_destroy()) {
            $mensagem = array("tipo" => "success", 'mensagem' => 'Logoff efetuado com sucesso!');
        } else {
            $mensagem = array("tipo" => "danger", 'mensagem' => 'Erro ao efetuar o logoff! Tente novamente');
        }
        echo json_encode($mensagem);
    }
} //end ClienteController

//filtra as requisições do ajax
$clienteController = new ClienteController();
switch ($_GET['action']) {
    case 'cadastro':
        $cliente = new Cliente($_POST);
        require '../models/Cliente.php';
        $clienteController->salvarCliente($cliente);
        break;
    case 'login':
        $clienteController->login($_POST);
        break;
    case 'logoff':
        $clienteController->logoff();
        break;
    case 'search':
        $clienteController->buscarCliente($_POST['id']);
        break;
    default:
        # code...
        break;
}
