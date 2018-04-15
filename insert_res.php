<?php
session_start();
$table = $_SESSION['table'];

include ('connect.php');



if(!empty($_POST)){
$title = mysqli_real_escape_string($conn, $_POST['title']);

$dbh = new PDO("mysql:host=localhost;dbname=demo","root","1234");

$link = "";
    $name = $_FILES['myfile']['name'];
    $mime = $_FILES['myfile']['type'];
    $data = file_get_contents($_FILES['myfile']['tmp_name']);
    $stmt = $dbh->prepare("insert into Resources values('',?,?,?)");
    $stmt->bindParam(1,$table);
    $stmt->bindParam(2,$title);
    $stmt->bindParam(3,$data, PDO::PARAM_LOB);
    $stmt->execute();

    include ('show_table.php');
}


?>


