<?php
$dbh = new PDO("mysql:host=localhost;dbname=demo","root","1234");
$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $dbh->prepare("select * from Resources where id=?");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header("Content-Type: application/pdf");
echo $row['pdf'];

?>
