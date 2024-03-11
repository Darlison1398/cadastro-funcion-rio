<?php
   require_once("config/url.php");
   require_once("config/create.php");

   if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criando equipamentos</title>
    <script src="<?= $BASE_URL ?>script/script.js"></script>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="title">
           <h1>Evoluma</h1>
        </div>
         
        <div class="navbar">
            <nav class="menu">
                <ul>
                    <li><a href="<?= $BASE_URL ?>index.php">Cadastrar</a></li>
                    <li><a href="<?= $BASE_URL ?>exibe.php">Ver</a></li>
                </ul>
            </nav>
        </div>

    </header>