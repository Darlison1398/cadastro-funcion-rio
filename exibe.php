<?php
  require_once("templates/header.php");
  require_once("config/create.php");

?>


    <main class="main-veiw">
        <div class="container-view">
            <h2>Dados Cadastrados</h2>
            <?php if(count($cadastro) > 0): ?>
              <table id="equip-table">
                <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Equipamento</th>
                      <th scope="col">Data do Cadastro</th>
                      <th scope="col">Cliente</th>
                      <th scope="col">Técnico</th>
                      <th scope="col">Observações</th>
                      <th scope="col"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach($cadastro as $cd): ?>
                    
                    <tr>
                      <td scope="row"> <?= $cd["id"] ?> </td>
                      <td scope="row"> <?= $cd["equipamento"] ?> </td>
                      <td scope="row"> <?= $cd["data_cadastro"] ?> </td>
                      <td scope="row"> <?= $cd["cliente"] ?> </td>
                      <td scope="row"> <?= $cd["tecnico_instalador"] ?> </td>
                      <td scope="row"> <?= $cd["descricao"] ?> </td>

                      <td class="actions">
                        <a href="<?= $BASE_URL ?>show.php?id=<?= $cd["id"] ?>"> <i class="fas fa-eye check-icon"> </i> </a>

                        <a href="<?= $BASE_URL ?>editar.php?id=<?= $cd["id"] ?>"> <i class="far fa-edit edit-icon"> </i> </a>

                        <form action="<?= $BASE_URL ?>config/delete.php" class="delete-form" method="POST">
                          <input type="hidden" name="type" value="delete">
                          <input type="hidden" name="id" value="<?= $cd['id']?>">
                          <button type="submit" class="delete-btn" onclick="confirmDelete(<?= $cd['id'] ?>)"> <i class="fa-regular fa-trash-can"></i> </button>
                        </form>


                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>


              </table>

            <?php endif; ?>

        </div>
    </main>
<?php
   require_once("templates/footer.php");
?>
