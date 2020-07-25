<div class="text-left">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="Usuario_Home?view=dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visualizar perfil</li>
        </ol>
    </nav>
</div>
<div class="text-left">
    <a href="Usuario_Home?view=dashboard" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp<span class="h6">Voltar</span></a>
</div>
<div class="container text-center">
    <?php
    echo '<input type="hidden" id="session_id" value="' . $_SESSION['Id'] . '">';
    ?>

    <div class="row">
        <div class="col-sm-12 text-center">
            <div class="form-group">
                <i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-sm-12">
            <div class="form-group text-center">
                <h4 id="Nome"></h4>
            </div>
        </div>
    </div>
    <div class="row p5">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>CPF:</h6>
                <p id="CPF"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6> Email:</h6>
                <p id="Email">
                </p>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6>CEP:</h6>
                <p id="CEP">
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6> Logradouro: </h6>
                <p id="Logradouro">
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6> Complemento: </h6>
                <p id="Complemento">
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <h6> Bairro: </h6>
            <p id="Bairro">
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <h6> Cidade: </h6>
                <p id="Cidade">
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <h6>Estado:</h6>
                <p id="UF">
                </p>
            </div>
        </div>
    </div>
</div>