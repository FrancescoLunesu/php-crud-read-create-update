<?php

// non vediamo le variabili esterne all'interno della funzione
// è quindi necessario passarle come argomento
// $conn passato come parametro è solo un valore segnaposto, potevo chiamarlo in qualsiasi altro modo
function getAll($conn, $table){
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $results = [];
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }

    } elseif ($result) {
        $results = [];
    } else {
        $results = false;
    }

    return $results;

    $conn->close();
}




// funzione remove
// gli argomenti sono dei segnaposto (non sono i valori reali)
function removeId($conn, $table, $id, $basepath){
    $sql = "DELETE
    FROM $table
    WHERE id = ?";

    $stmt = $conn->prepare($sql);
    // la ""i" sta ad indicare che è un intero, se fosse stata una stringa avremmo utilizzato "s"
    $stmt->bind_param("i", $id);
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
    $stmt->close();
}


 ?>
