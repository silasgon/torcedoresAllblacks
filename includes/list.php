<?php

$resultados = '';
foreach($torcedores as $torcedor){
    $resultados .= '<tr>
                        <td>'.$torcedor->id.'</td>
                        <td>'.$torcedor->nome.'</td>
                        <td>'.$torcedor->documento.'</td>
                        <td>'.$torcedor->email.'</td>
                        <td>'.$torcedor->telefone.'</td>
                        <td>'.$torcedor->cep.'</td>
                        <td>'.$torcedor->endereco.'</td>
                        <td>'.$torcedor->cidade.'</td>
                        <td>'.$torcedor->uf.'</td>
                        <td>'.($torcedor->ativo == 1 ? 'Ativo' : 'Inativo').'</td>
                        <td>
                            <a href="editar.php?id='.$torcedor->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$torcedor->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
}

?>


<main>

    <section>

        <table class="table mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Cep</th>
                    <th>Endereco</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
    </section>

</main>