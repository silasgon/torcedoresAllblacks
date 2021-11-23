<main>
    <section>
        <div class="container">

            <div class="container center">
                <h3><?= TITLE ?> AllBlacks</h3>
            </div>
            <form method="post" class="was-validated" novalidate>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= $torcedor->nome ?>" placeholder="Nome do torcedor" required>
                </div>
                <div class="form-group">
                    <label for="documento">Documento</label>
                    <input type="text" class="form-control" id="documento" name="documento" value="<?= $torcedor->documento ?>" placeholder="000.000.000-00" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $torcedor->email ?>" placeholder="name@example.com" required>
                </div>
                <!-- Telefone -->
                <hr>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" value="<?= $torcedor->telefone ?>" placeholder="00000000" required>
                </div>

                <hr>

                <div class="form-row">
                    <div class="col-4">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" name="cep" id="cep" value="<?= $torcedor->cep ?>" placeholder="00000-000" required>
                    </div>
                    <div class="col-8">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="<?= $torcedor->endereco ?>" placeholder="Endereço do torcedor" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-8">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder id="cidade" value="<?= $torcedor->cidade ?>" placeholder="Cidade do torcedor" required>
                    </div>
                    <div class="col-4">
                        <label for="uf">Estado - UF</label>
                        <select class="form-control" id="uf" name="uf" required>
                            <option value="<?= $torcedor->uf ?>"><?= $torcedor->uf ?></option>
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
                <div class="form-group">
                    <div class="form-row">
                        <label for="email">Situação cadastral</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ativo" value="1" checked>
                        <label class="form-check-label">
                            Ativo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ativo" value="" <?= $torcedor->ativo == '' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="gridRadios2">
                            Desativado
                        </label>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                    <button href="index.html" class="btn btn-secondary btn-lg">Cancelar</button>
                </div>
            </form>

        </div>
        </div>
    </section>
</main>