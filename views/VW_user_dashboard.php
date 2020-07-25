<div class="row">
    <!-- blog post -->
    <div class="col-12">
        <div class="alert alert-success " role="alert">
            <p>Bem vindo(a), <?php echo ($_SESSION['Nome']); ?> ao Bemol Omni!</p>
            <p>Boa Navegação. </p>
        </div>
        <!--end alert-->
    </div>
</div>
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Visualizar perfil</div>
                <span class="float-right">
                    <i class="fa fa-id-badge fa-2x" aria-hidden="true"></i>
                </span>
            </div>
            <a class="btn btn-default card-footer text-white clearfix small z-1" id="btn-att-cadastro" href="Usuario_Home?view=perfil" title="Clique para abrir o formulário">
                <!-- <a class="card-footer text-white clearfix small z-1" href="#"> -->
                <span class="float-left">Ir para</span>
                <span class="float-right">
                    <i class="fa fa-chevron-right " aria-hidden="true"></i>
                </span>
                <!-- </a> -->
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Logout</div>
            </div>
            <button class="btn btn-default card-footer text-white clearfix small z-1" id="btn-logout" onclick="logout()" title="Clique para Efetuar Logout">
                <span class="float-left">Sair</span>
                <span class="float-right">
                    <i class="fa fa-power-off"></i>
                </span>
            </button>
        </div>
    </div>
</div>