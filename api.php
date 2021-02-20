<?php
include "config.php";
include "utils.php";

$dbConn = connect($db);

if($_SERVER['REQUEST_METHOD'] == 'GET'){
  if (isset($_GET['id_api_user'])) {
    $id_api_user = $_GET['id_api_user'];
    $sql = $dbConn->prepare("SELECT * FROM api_user WHERE id_api_user=:id_api_user");
    $sql->bindParam(':id_api_user',$id_api_user,PDO::PARAM_INT);
    $sql->execute();
    header("HTTP/1.1 200 OK");
    echo json_encode($sql->fetch(PDO::FETCH_ASSOC));
    exit();
  }
}

?>