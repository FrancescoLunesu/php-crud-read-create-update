<?php
include __DIR__ . '/../database.php';

if(empty($_POST["roomNumber"])){
    die("Non hai inserito il numero della stanza");
}

if(empty($_POST["floor"])){
    die("Non hai inserito il numero piano della stanza");
}
if(empty($_POST["beds"])){
    die("Non hai inserito il numero di letti della stanza");
}


$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at)
VALUES (?, ?, ?, NOW(), NOW())";

$stmt =$conn->prepare($sql);
$stmt->bind_param("iii", $room_number, $floor, $beds);

$room_number = $_POST["roomNumber"];
$floor = $_POST["floor"];
$beds = $_POST["beds"];

$stmt->execute();

if($stmt && $stmt->affected_rows > 0){
    // $stmt->insert_id richiama l'id della stanza appena creata, in questo caso "insert_id" è una proprietò che contiene l'id (fare var_dump per capire meglio)
    header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif($stmt){
    die("Nessun inserimento eseguito");
} else {
    die("Errore!")
}

$stm->close();
$conn->close();
