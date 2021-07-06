<?php
require_once("db.php");
$pdo_statement=$pdo_conn->prepare("delete from books where id=" . $_GET['id']);
$pdo_statement->execute();
header('location:table.php');
?>