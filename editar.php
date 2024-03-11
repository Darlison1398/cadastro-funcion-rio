
<?php
   require_once("templates/header.php");
   require_once("config/redy.php");
 
?>
    <main class= "body">
        <!--div class="container">
            <?php if(isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"> <?=$printMsg ?> </p>
            <?php endif; ?>
        </div-->

        <div class="container">
            <form action="<?= $BASE_URL ?>config/update.php" method="POST">
          
                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?= $cd["id"] ?>">
                <h2>Editar de equipamento</h2>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" id="id" name="id" value="<?= $id ?>">
                </div>

                <div class="form-group">
                    <label for="equipamento">EQUIPAMENTO:</label>
                    <input type="text" id="equipamento" name="equipamento"  value="<?= $cd['equipamento'] ?>">
                </div>

                <div class="form-group">
                  <label for="data_cadastro">DATA DO CADASTRO:</label>  
                  <input type="text" id="data" name="data_cadastro" value="<?= $cd['data_cadastro']  ?> ">
                </div>

                <div class="form-group">
                    <label for="cliente">CLIENTE:</label>
                    <?= var_dump("cliente") ?>
                    <input type="text" id="cliente" name="cliente" value="<?= $cd['cliente'] ?>">
                </div>

                <div class="form-group">
                    <label for="tecnico">TÉCNICO RESPONSÁVEL PELA INSTALAÇÃO:</label>
                    <input type="text" id="tecnico" name="tecnico_instalador" value="<?= $cd['tecnico_instalador'] ?>">
                </div>

                <div class="form-group">
                    <label for="observations">OBSERVAÇÕES:</label>
                    <textarea type="text" class="form-control" id="observations" name="descricao" placeholder="Insira as observações" rows="3"> <?= $cd['descricao'] ?> </textarea>
                </div>
                


                <button id="btn-submit" type="submit" onclick="direcionar()">Atualizar</button>
            </form>
        </div>
    </main>

<?php
   require_once("templates/footer.php");
?>

