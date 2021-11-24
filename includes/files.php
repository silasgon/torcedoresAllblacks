<?php

$messagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $messagem = '<div class="alert alert-success col-md-12 col-md-offset-2 mt-3" role="alert">
                            Dados dos torcedores carregados com sucesso e salvos no Banco de Dados <a href="index.php" class="alert-link">Verificar dados salvos</a>. click para ver os dados.
                        </div>';
            break;
        case 'error1':
            $messagem = '<div class="alert alert-danger">Você não pode ler esse tipo de arquivo!</div>';
            break;
        case 'error':
            $messagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
    }
}
?>

<main>
<?=$messagem ?>
    <section>
        <div class="container mt-3 mb-3">

            <div class="row mt-3 d-flex justify-content-center">
                <div class="container">
                    <h3>Importar XML AllBlacks</h3>
                </div>
                <div class="card col-md-12 col-md-offset-2 mr-1 text-center" style="width: 18rem;">
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
                <?=$messagem ?>
            </div>

        </div>
        </div>
    </section>
</main>