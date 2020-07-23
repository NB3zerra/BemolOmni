<?php
require './controllers/PagesController.php';

$router = new PagesController();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "./header_tags.php"; ?>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $url = explode('/', $_GET['page']);
        $actionName = $url[0];
        if (method_exists($router, $actionName)) {
            $router->$actionName();
        } else {
            include './views/404.php';
        }
        unset($url[0]);
    }else{
        
    }
    //include scripts
    include_once 'footer.php';
    ?>


</body>