<?php
  require_once("templates/header.php");
  //require_once("config/create.php");
  require_once("config/redy.php");


?>


    <main class="main-veiw">
        <div class="container-show">
            <h1 id="title"> <?= $cd["equipamento"] ?> </h1>
            <label class="title-show">ID</label>
            <p class="bold"> <?= $cd["id"]  ?> </p>
            <label class="title-show">Data do cadastro</label>
            <p class="bold"> <?= $cd["data_cadastro"]  ?> </p>
            <label class="title-show">Cliente</label>
            <p class="bold"> <?= $cd["cliente"]  ?> </p>
            <label class="title-show">Técnico instalador</label>
            <p class="bold"> <?= $cd["tecnico_instalador"]  ?> </p>
            <label class="title-show">Descrição do equipamento</label>
            <p class="bold"> <?= $cd["descricao"] ?> </p>
        </div>
    </main>
<?php
   require_once("templates/footer.php");
?>
