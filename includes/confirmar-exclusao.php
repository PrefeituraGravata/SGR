<main>

  <h2 class="mt-3">Excluir Ramal</h2>
  <div class="excluir">
    <form method="post">
      <p>Você deseja realmente excluir o ramal <strong><?=$obRamal->num_ramal?></strong>?</p>
      <a href="index.php">
        <button type="button" class="btn btn-success">Cancelar</button>
      </a>
        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
    </form>
  </div>
</main>