<main>
    <section>
        <div class="container center mb-3">

            <form class="needs-validation" novalidate>
                <div class="form-row">

                    <div class="col-md-4 mb-3">

                        <label>Destinatarios do comunicado</label>

                        <div class=" custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Todos torcedores</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">Torcedores Ativos</label>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="row">
                            <select class="custom-select" required>
                                <option value="">Choose...</option>
                                <option value="1">Torcedor One</option>
                                <option value="2">TorcedorTwo</option>
                                <option value="3">Torcedor Three</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Título do comunicado</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>



                    <div class="col-md-12 mb-3 border">
                        <label for="exampleFormControlFile1">Selecione uma imagem</label>
                        <input type="file" class="form-control-file" id="imgAllblacks">
                    </div>


                    <label for="validationCustom02">Comunicado</label>
                    <textarea class="form-control" id="validationCustom01" placeholder="Digite o comunicado" required></textarea>
                </div>
                <br>
                <hr>
                <button class="btn btn-primary" type="submit">Enviar Email</button>
            </form>


        </div>
    </section>
</main>