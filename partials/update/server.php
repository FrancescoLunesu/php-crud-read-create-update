<?php
// includo il database.php
include __DIR__ . "/../database.php";

if(empty($_GET["id"])){
    die("Nessun ID");
}

$id = $_GET["id"];

$sql = "SELECT id, room_number, floor, beds
FROM stanze
WHERE id= $id";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // dato che avrò una riga sola, non ha senso usare il ciclo while
    $row = $result->fetch_assoc();

} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();
 ?>
