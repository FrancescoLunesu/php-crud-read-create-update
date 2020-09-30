<?php
include __DIR__ . '/../database.php';

$sql = "UPDATE stanze
SET room_number = ?, floor = ?, beds = ?
WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $roomNumber,$floor,$beds,$id);

// tra le parentesi quadre inserisco il nome del "name=" dentro all'input nel file update.php
$roomNumber = $_POST["roomNumber"];
$floor = $_POST["floor"];
$beds = $_POST["beds"];
$id = $_POST["id"];

// eseguiamo la query:
$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    header("Location: $basepath/show.php?id=$id");
} elseif ($stmt %%$stmt->affected_rows == 0) {
    echo "non hia modificato nessun dato";
} else {
    die("Errore!");
}

// ricordiamoci di chiudere la connessione
$conn->close();
?>
