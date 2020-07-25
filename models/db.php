<?php
#configuração mysql
$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$database = "bemol_omni";

try {
    $dbh = new PDO('mysql:host='.$servidor.';dbname='.$database.'', $usuario, $senha);
    $consulta = $dbh->query("SET NAMES 'utf8");
    $consulta = $dbh->query("SET character_set_connection=utf8");
    $consulta = $dbh->query("SET character_set_client=utf8");
    $consulta = $dbh->query("SET character_set_results=utf8");
} catch (PDOException $e) {
    echo "Erro!: Não foi possível conectar ao Banco de Dados " . $e->getMessage() . "<br/>";
    die();
}
