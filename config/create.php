<?php 
  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  if (!empty($data)) {

    if ($data["type"] === "create") {
      $id = $data["id"];
      $equipamento = $data["equipamento"];
      //$dataCadastro = $data["data_cadastro"]; // Correção aqui
      $dataCadastro = date('Y-m-d', strtotime($data["data_cadastro"])); 
      $cliente = $data["cliente"];
      $tecnico = $data["tecnico_instalador"];
      $descricao = $data["descricao"];

      $query = "INSERT INTO cad (id, equipamento, data_cadastro, cliente, tecnico_instalador, descricao) VALUES (:id, :equipamento, :data_cadastro, :cliente, :tecnico_instalador, :descricao)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":equipamento", $equipamento);
      $stmt->bindParam(":data_cadastro", $dataCadastro);
      $stmt->bindParam(":cliente", $cliente);
      $stmt->bindParam(":tecnico_instalador", $tecnico);
      $stmt->bindParam(":descricao", $descricao);
      
      try {
        $stmt->execute();
        $_SESSION["msg"] = "Dados inseridos com sucesso!";
        header("Location: ../exibe.php");
      } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "ERRO: " . $e->getMessage();
      }


    } 

  } else if($data["type"] === "edit"){
    $id = $data["id"];
    $equipamento = $data["equipamento"];
    //$dataCadastro = $data["data_cadastro"]; // Correção aqui
    $dataCadastro = date('Y-m-d', strtotime($data["data_cadastro"])); 
    $cliente = $data["cliente"];
    $tecnico = $data["tecnico_instalador"];
    $descricao = $data["descricao"];

    $query = "UPDATE evoluma.cad SET id =  :id, 
      equipamento = :equipamento, 
      data_cadastro = :data_cadadstro, 
      cliente = :cliente, 
      tecnico_instalador = :tecnico_instalador, 
      descricao = :descricao 
      WHERE 
      id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":equipamento", $equipamento);
    $stmt->bindParam(":data_cadastro", $dataCadastro);
    $stmt->bindParam(":cliente", $cliente);
    $stmt->bindParam(":tecnico_instalador", $tecnico);
    $stmt->bindParam(":descricao", $descricao);
    
    try {
      $stmt->execute();
      $_SESSION["msg"] = "Dados inseridos com sucesso!";
      header("Location: ../exibe.php");
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "ERRO: " . $e->getMessage();
    }

  


  } else{
    if(!empty($_GET)){
      $id = $_GET["id"];
    }

    if(!empty($id)) {
      $query = "SELECT * FROM cad WHERE id = :id";
      $stmt = $conn->prepare($query);
      $stmt->bindParam(":id", $id);
      $stmt->execute();

      $cadastro = $stmt->fetchAll();
    }

    // vai retornar todos os dados
    $cadastro = [];
    $query = "SELECT * FROM cad";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $cadastro = $stmt->fetchAll();
  }

?>