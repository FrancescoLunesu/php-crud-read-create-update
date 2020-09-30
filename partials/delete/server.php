<?php
// includo il database.php
include __DIR__ . '/../database.php';

if(empty($_POST["id"])){
    die("Nessun ID");
}

$id = $_POST["id"];

$sql = "DELETE
FROM stanze
WHERE id = $id";

$stmt = $conn->prepare($sql);
// la ""i" sta ad indicare che è un intero, se fosse stata una stringa avremmo utilizzato "s"
$stmt->bind_param("i", $id);
$id = $_POST["id"];
// eseguiamo la query
$stmt->execute();

// $result = $conn->query($sql);
// var_dump($stmt);
if($stmt){
    header("Location: $basepath/index.php?roomId=$id");
} else {
    echo "non è possibile cancellare la stanza!";
}

$conn->close();
 ?>
