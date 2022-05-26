<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($ramais as $ramal){
    $resultados .= '<tr>
                      <td>'.$ramal->num_ramal.'</td>
                      <td>'.$ramal->loc_ramal.'</td>
                      <td><a href="./editar.php?id='.$ramal->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                          </a>
                          <a href="./excluir.php?id='.$ramal->id.'">
                          <button type="button" class="btn btn-danger ">Excluir</button>
                          </a>
                      </td>
                      <td>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                            Nenhum Ramal encontrado
                                                       </td>
                                                    </tr>';

?>

<main>

  <?=$mensagem?>

  <section>

    <table class="table">
        <thead>
          <tr>
            <th>Número</th>
            <th>Localização</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>

</main>