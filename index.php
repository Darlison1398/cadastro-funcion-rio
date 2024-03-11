
<?php
   require_once("templates/header.php");
?>
    <main clas= "body">
        <!--div class="container">
            <?php if(isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"> <?=$printMsg ?> </p>
            <?php endif; ?>
        </div-->

        <div class="container">
            <form action="<?php $BASE_URL ?>config/create.php" method="post">
                <input type="hidden" name="type" value="create">
                <h2>Cadastro de equipamento</h2>
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" id="id" name="id" required>
                </div>

                <div class="form-group">
                    <label for="equipamento">EQUIPAMENTO:</label>
                    <input type="text" id="equipamento" name="equipamento" required>
                </div>

                <div class="form-group">
                  <label for="data_cadastro">DATA DO CADASTRO:</label>
                  <input type="text" id="data" name="data_cadastro" required>
                </div>

                <div class="form-group">
                    <label for="cliente">CLIENTE:</label>
                    <input type="text" id="cliente" name="cliente" required>
                </div>

                <div class="form-group">
                    <label for="tecnico">TÉCNICO RESPONSÁVEL PELA INSTALAÇÃO:</label>
                    <input type="text" id="tecnico" name="tecnico_instalador" required>
                </div>

                <div class="form-group">
                    <label for="observations">Observações:</label>
                    <textarea type="text" class="form-control" id="observations" name="descricao" placeholder="Insira as observações" rows="3"></textarea>
                </div>
                


                <button id="btn-submit" type="submit" onclick="direcionar()">Cadastrar</button>
            </form>
        </div>
    </main>

<?php
   require_once("templates/footer.php");
?>

