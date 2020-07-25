<!-- default scripts -->
<script src="./plugins/jquery/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="./plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="./plugins/jquery/jquery.mask.min.js"></script>
<script src="js/main.js"></script>



<!-- page related script -->

<?php
if (isset($_GET['page'])) {
    $url = explode('/', rtrim($_GET['page']));
    switch ($url[0]) {
        case 'login':
            echo '<script src="js/login.js"></script>';
            break;
        case 'criar_conta':
            echo '<script src="js/cliente_cadastro.js"></script>';
            break;
        case 'Usuario_Home':
            echo '<script src="js/userFunctions.js"></script>';
            if($_GET['view']=='perfil'){
                echo '<script>searchProfile();</script>';
            }
            break;
        default:
            # code...
            break;
    }
}

?>
