<?php
include __DIR__ . "/env.php";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
echo "Connection failed: " . $conn->connect_error;
// server per interrompere da qui in poi e non caricare altro
// ad esempio su un sito di ecommerce, se il database non dovesse funzionare è meglio usare die() e bloccare tutto altrimenti l'utente  visualizzerebbe il
// il sito a "metà", senza i dati del db, quindi meglio bloccare tutti che far vedere le cose a metà. Magari prima si può aggiungere un messaggio di errore
die();
}
