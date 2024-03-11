<?php
session_start();

include_once("connection.php");
include_once("url.php");

$data = $_GET;

if (!empty($data)) {
    $query = "SELECT * FROM evoluma.cad WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":id", $data["id"]);
    $stmt->execute();
    $cd = $stmt->fetch();

}
?>
