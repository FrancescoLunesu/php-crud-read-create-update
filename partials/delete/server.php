<?php
// includo il database.php
include __DIR__ . "/../database.php";

if(empty($_POST["id"])){
    die("Nessun ID");
}

$id = $_POST["id"];

$sql = "DELETE
FROM stanze
WHERE id = $id";

$result = $conn->query($sql);

if($result){
    echo "Cancellazione eseguita";
} else {
    echo "non è possibile cancellare la stanza!";
}

$conn->close();
 ?>
