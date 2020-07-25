<?php
require './controllers/PagesController.php';

$router = new PagesController();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./header_tags.php"; ?>
</head>

<body class="bg-info">
    <?php
    if (isset($_GET['page'])) {
        $url = explode('/', rtrim($_GET['page']));
        $actionName = $url[0];
        if (method_exists($router, $actionName)) {
            $router->$actionName();
        } else {
            include './views/404.php';
        }
        unset($url[0]);
    }else{
        $router->login();
    }
    //include scripts
    include_once 'footer.php';
    ?>


</body>