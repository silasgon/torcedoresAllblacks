<main>
    <section>
        <div class="container center">

            <div class="row">
                <div class="container center">
                    <h3>Importar XML AllBlacks</h3>
                </div>
                <div class="card col-md-4 col-md-offset-2" style="width: 18rem;">
                    <div class="card-body">
                        <form method="post" action="lerXml.php" class="was-validated" novalidate>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Selecione um arquivo XML</label>
                                <input type="file" class="form-control-file" id="lerXml">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card col-md-4 col-md-offset-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Ler arquivo XML</h5>
                        <a href="#" class="btn btn-primary">Ler arquivo XML</a>
                    </div>
                </div>
                <div class="card col-md-4 col-md-offset-2" style="width: 18rem;">
                    <div class="card-body center">
                        <h5 class="card-title">Carregar dados</h5>
                        <a href="#" class="btn btn-primary">Carga de dados</a>
                    </div>
                </div>
                <div class="progress col-md-12 col-md-offset-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <div class="alert alert-success col-md-12 col-md-offset-2" role="alert">
                    Dados dos torcedores carregados com sucesso e salvos no Banco de Dados <a href="index.php" class="alert-link">Verificar dados salvos</a>. click para ver os dados.
                </div>
            </div>

        </div>
        </div>
    </section>
</main>