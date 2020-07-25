<?php
if (isset($_GET['view'])) { ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <div class="dropdown">
                                        <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Perfil
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="Usuario_Home?view=perfil" title="Visualizar perfil">
                                                <div class="form-group text-center">
                                                    <i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
                                                </div>
                                                <div class="text-center p-2">
                                                    <p><?php echo $_SESSION['Nome']; ?></p>
                                                </div>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <button class="dropdown-item" onclick="logout()">Sair</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="p-3">
                        <div id="content">
                            <?php $pagina = $_GET['view'];
                            switch ($pagina) {
                                case 'dashboard':
                                    include_once 'VW_user_dashboard.php';
                                    break;
                                case 'perfil':
                                    include_once 'VW_user_perfil.php';
                                    break;
                                default:
                                    # code...
                                    break;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    include '404.php';
} ?>