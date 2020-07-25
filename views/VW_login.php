<div class="container">
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 127px">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <?php session_start();
                        if (isset($_SESSION['Nome'])) :
                        ?>
                            <div class="text-center form-group">
                                <h3>Opa, já existe uma sessão ativa! Efetue o logoff para entrar em outra conta</h3>
                                <a href="Usuario_Home?view=dashboard">Voltar</a>
                            </div>
                        <?php else : ?>
                            <form action="" class="log-form text-center" id="login-form" name="login-form" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Bemol Omni - Login</h1>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="email" class="form-control form-control-user" id="Login" name="Login" aria-describedby="emailHelp" placeholder="Seu E-mail.." required>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="password" class="form-control form-control-user" id="Senha" name="Senha" placeholder="Senha" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary" id="loginbtn">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="criar_conta">Primeira vez? Clique aqui! </a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="recuperar_senha">Esqueceu a senha?</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>