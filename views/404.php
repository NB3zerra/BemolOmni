<div class="container">
    <div class="container">
        <div class="row justify-content-center" style="    padding-top: 127px">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-10" style="padding: 218px;">
                        <div class="text-center">
                            <h4>ERRO 404 - Página não encontrada!</h4>
                        </div>
                        <div class="text-center">
                            <?php
                            if (isset($_SESSION['Nome'])) {
                            ?> <a href="Usuario_Home?view=dashboard" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp<span class="h6">Voltar</span></a>
                                
                            <?php } else { ?>
                                <a href="login" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp<span class="h6">Voltar</span></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>