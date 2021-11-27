<?php

$messagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $messagem = '<div class="alert alert-success">Email enviado com sucesso!</div>';
            break;
        case 'error':
            $messagem = '<div class="alert alert-danger">Ação não executada!</div>';
            break;
    }
}
?>

<main>
    <?= $messagem ?>
    <section>
        <div class="container center mt-3">
            <div class="text-center">
                <h2>Comunicado aos torcedores AllBlacks</h2>

            </div>
            <hr>
            <br>
            <form method="post"  class="needs-validation" novalidate>
                <div class="text-left mb-3">
                    <h5>Destinatarios do comunicado</h5>
                </div>

                <div class="row mb">

                    <div class="col-md-4 mb-3">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ativosTorcedores" value="ativo" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Torcedores Ativos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="inativosTorcedores" value="inativo" >
                            <label class="form-check-label" for="flexCheckChecked">
                                Torcedores Inativos
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email Torcedor</label>
                            <input type="email" class="form-control" value="<?= isset($torcedor->email) ? $torcedor->email : '' ?>" placeholder="name@example.com">
                        </div>

                    </div>

                </div>
                <hr>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Título do comunicado</label>
                        <input type="text" class="form-control" name="titulo" required>
                    </div>

                    <label for="validationCustom02">Comunicado</label>
                    <textarea class="form-control" name="texto" placeholder="Digite o comunicado" required></textarea>
                </div>
                <br>
                <hr>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar Email</button>
                </div>
            </form>
        </div>
    </section>
</main>