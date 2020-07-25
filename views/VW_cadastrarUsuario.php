<div class="container">
    <div class="container">
        <div class="row justify-content-center" style="    padding-top: 127px">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="text-left">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="login">Login</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Criar conta</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="text-left">
                    <a href="login" class="btn btn-default"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp<span class="h6">Voltar</span></a>
                    </div>
                    <div class="p-3">
                        <h3>Criar conta</h3>
                    </div>

                    <hr>
                    <form action="" class="form-cadastro" id="cadastro_form" name="cadastro_form" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- informações pessoais -->
                                    <h6 class="p-3">Informações Pessoais:</h6>
                                    <div class="row p5">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="Nome">Nome:</label>
                                                <input type="text" placeholder="Digite seu Nome" id="Nome" name="Nome" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="CPF">CPF:</label>
                                                <input type="text" placeholder="CPF(Somente Números)" name="CPF" id="CPF" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p5">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Email">E-Mail:</label>
                                                <input type="email" placeholder="exemplo@mail.com" name="Email" id="Email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="EmailConf">Confirmar E-Mail:</label>
                                                <input type="email" placeholder="exemplo@mail.com" id="EmailConf" class="form-control" required>
                                                <div id="EmailWarn"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p5">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Senha">Senha:</label>
                                                <input type="password" placeholder="Insira uma senha" name="Senha" id="Senha" class="form-control" required>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="SenhaConf">Confirme a senha:</label>
                                                <input type="password" placeholder="Repita a senha" id="SenhaConf" class="form-control" required>
                                                <div id="SenhaWarn"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <!-- Endereço -->
                                    <h6 class="p-3">Endereço:</h6>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="CEP">CEP:</label>
                                                <input type="text" placeholder="(Apenas números)" maxlength="9" name="CEP" id="CEP" class="form-control" required>
                                                <div id="cepWarn"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="Logradouro">Logradouro:</label>
                                                <input type="text" placeholder="" name="Logradouro" id="Logradouro" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Complemento">Complemento:</label>
                                                <input type="text" name="Complemento" id="Complemento" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="Bairro">Bairro:</label>
                                            <input type="text" name="Bairro" id="Bairro" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Cidade">Cidade:</label>
                                                <input type="text" name="Cidade" id="Cidade" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="Uf">Estado:</label>
                                                <select name="UF" id="UF" class="form-control" required>
                                                    <option value="0" selected>Selecione...</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" id="btn_cadastro" class="btn btn-success">Completar Cadastro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>