<main>
    <section>
        <div class="container mt-3 mb-3">

            <div class="row mt-3 d-flex justify-content-center">
                <div class="container">
                    <h3>Importar XML AllBlacks</h3>
                </div>
                <div class="card col-md-3 col-md-offset-2 mr-1 text-center" style="width: 18rem;">
                    <div class="card-body">
                        <form method="post" action="lerXml.php" enctype="multipart/form-data" class="was-validated" novalidate>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Selecione um arquivo XML</label>
                                <input type="file" class="form-control-file mb-1" name="file">
                                <input type="submit" class="form-control-file" name="acao" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card col-md-3 col-md-offset-2 text-center mr-1" style="width: 18rem;">
                    <div class="card-body" disabled>
                        <h5 class="card-title">Ler arquivo XML</h5>
                        <a type='submit' name='lerArquivoXml' class="btn btn-primary">Ler arquivo XML</a>
                    </div>
                </div>
                <div class="card col-md-3 col-md-offset-2 text-center mr-1" style="width: 18rem;">
                    <div class="card-body center">
                        <h5 class="card-title">Carregar dados</h5>
                        <a href="#" class="btn btn-primary">Carga de dados</a>
                    </div>
                </div>
                <div class="progress col-md-12 col-md-offset-2 mt-3">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <div class="alert alert-success col-md-12 col-md-offset-2 mt-3" role="alert">
                    Dados dos torcedores carregados com sucesso e salvos no Banco de Dados <a href="index.php" class="alert-link">Verificar dados salvos</a>. click para ver os dados.
                </div>
            </div>

        </div>
        </div>
    </section>
</main>