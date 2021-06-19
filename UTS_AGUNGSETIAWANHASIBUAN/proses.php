<?php

include"koneksi.php";

if(isset($_POST['btn_proses'])) {
    $reg_username = $_POST['username'];
    $reg_password = $_POST['password'];

    $sql = "INSERT INTO user VALUES (NULL, :username, :password)"; 

$stmt = $koneksi->prepare($sql);

$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);

$stmt->execute();

header("location:http://localhost/index_admin.php");
}
