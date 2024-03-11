<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if (!empty($data)) {

  if ($data["type"] === "delete") {
    $id = $data["id"];
     
    $query = "DELETE FROM evoluma.cad WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);
    
    try {
      $stmt->execute();
      $_SESSION["msg"] = "Dados deletados com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "ERRO: " . $e->getMessage();
    }

    header("Location:" . $BASE_URL . "../index.php");

  }
}
?>
