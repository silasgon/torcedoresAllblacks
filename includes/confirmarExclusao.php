<main>
    <section>
        <div class="container">

            <form method="post" class="was-validated" novalidate>

                <div class="alert alert-danger mt-3 text-center" role="alert">
                    <h4 class="alert-heading">Excluir torcedor AllBlack</h4>
                    <p>Você deseja realmente excluir o torcedor <strong><?= $torcedor->nome ?></strong>?</p>
                    <hr>

                </div>
                <hr>
                <div class="text-center">
                    <button href="index.php" class="btn btn-success btn-lg">Cancelar</button>
                    <button type="submit" name="excluir" class="btn btn-danger btn-lg">Excluir</button>
                </div>
            </form>

        </div>
        </div>
    </section>
</main>