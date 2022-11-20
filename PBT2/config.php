<?php
include("dbpbt2.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];

$query=mysql_query ("SELECT * FROM login WHERE idL ='$id'") or die(mysql_error());
$row=mysql_fetch_array($query);
$username=$row['username'];
?>