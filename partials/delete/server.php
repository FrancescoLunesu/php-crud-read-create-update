<?php
// includo il database.php
include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

if(empty($_POST["id"])){
    die("Nessun ID");
}

$id = $_POST["id"];

removeId($conn,'stanze',$id,$basepath);
 ?>
