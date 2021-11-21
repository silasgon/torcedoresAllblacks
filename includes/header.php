<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>AllBlacks - Hugby</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">AllBlacks</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="sendNotice.php">Enviar Comunicado <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">Importar XML <span class="sr-only"></span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <!-- modal formulario de cadastro -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="container">

                        <div class="container center">
                            <h1>Cadastrar Torcedor AllBlacks</h1>
                        </div>
                        <form method="post" action="cadastrar.php" class="was-validated" novalidate>
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do torcedor" required>
                            </div>
                            <div class="form-group">
                                <label for="documento">Documento</label>
                                <input type="text" class="form-control" id="documento" name="documento" placeholder="000.000.000-00" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                            </div>
                            <!-- Telefone -->
                            <hr>
                            <br>
                            <div class="col-4">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="00000000" required>
                            </div>

                            <hr>
                            <br>
                            <div class="form-row">
                                <div class="col-4">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000" required>
                                </div>
                                <div class="col-8">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do torcedor" required>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col-8">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" placeholder id="cidade" placeholder="Cidade do torcedor" required>
                                </div>
                                <div class="col-4">
                                    <label for="uf">Estado - UF</label>
                                    <select class="form-control" id="uf" name="uf" placeholder required>
                                        <option value="">Escolha um estado</option>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="ES">ES</option>
                                        <option value="DF">DF</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="form-group">
                                <div class="form-row">
                                    <label for="email">Situação cadastral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="ativo" value="1" checked>
                                    <label class="form-check-label" for="ativo">Ativo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="ativo" id="ativo" value="">
                                    <label class="form-check-label" for="ativo">Desativado</label>
                                </div>
                            </div>
                            <hr>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>