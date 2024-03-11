<?php
  
  $host = "localhost";
  $db = "evoluma";
  $user = "root";
  $pass = "Darlin13#5";

  try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch (PDOException $e) {
    // menssagem de erro na conexão
    $error = $e->getMessage();
    echo "Erro: $e";
  }

