<main>
    <section>
        <div class="container center mt-3">
            <div class="text-center">
                <h2>Comunicado aos torcedores AllBlacks</h2>

            </div>
            <hr>
            <br>
            <form class="needs-validation" novalidate>
                <div class="text-left mb-3">
                    <h5>Destinatarios do comunicado</h5>
                </div>

                <div class="row mb">



                    <div class="col-md-4 mb-3">

                        <div class=" custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Todos torcedores</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">Torcedores Ativos</label>
                        </div>
                    </div>
                    <div class="col-md-8 mb-4">

                        
                            <div>
                                <label>Selecionar email</label>
                            </div>
                            <select class="custom-select" required>
                                <option value="">Choose...</option>
                                <option value="1">Torcedor One</option>
                                <option value="2">TorcedorTwo</option>
                                <option value="3">Torcedor Three</option>
                            </select>
                        
                    </div>
                </div>
                <hr>

                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">Título do comunicado</label>
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>



                    <div class="col-md-12 mb-3">
                        <label for="exampleFormControlFile1">Selecione uma imagem</label>
                        <input type="file" class="form-control-file" id="imgAllblacks">
                    </div>


                    <label for="validationCustom02">Comunicado</label>
                    <textarea class="form-control" id="validationCustom01" placeholder="Digite o comunicado" required></textarea>
                </div>
                <br>
                <hr>
                <div class="form-group text-center">
                    <button class="btn btn-primary" type="submit">Enviar Email</button>
                </div>

            </form>


        </div>
    </section>
</main>