<?php
// collego il file head.php che continere il tag DOCTYPE e HEAD
include __DIR__ . "/partials/templates/head.php";
// includo il server.php che contiene la query per estrarre i dati dal db
include __DIR__ . "/partials/home/server.php";
// faccio un controllo con var_dump per vedere se è stato incluso correttamente
// var_dump($results);
// die();
 ?>


    <div class="container">
        <?php if(!empty($_GET["roomId"])){
            $stanza_cancellata = $_GET["roomId"];
        ?>
            <div class="alert alert-warning">
                <?php echo "Hai cancellato la stanza numero: $stanza_cancellata"; ?>
            </div>
        <?php } ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero Stanza</th>
                    <th>Piano</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- ciclo sul mio array $results per stampare i risultati della query fatta su server.php -->
                <?php foreach($results as $room){ ?>
                <tr>
                    <td><?php echo $room["id"]; ?></td>
                    <td><?php echo $room["room_number"]; ?></td>
                    <td><?php echo $room["floor"]; ?></td>
                    <td><a href="show.php?id=<?php echo $room["id"]; ?>">VIEW</a></td>
                    <td><a href="update.php?id=<?php echo $room["id"]; ?>">UPDATE</a></td>
                    <td>
                        <form class="" action="partials/delete/server.php" method="post">
                            <input type="submit" name="" value="DELETE" class="btn btn-danger">
                            <!-- creaiamo un input nascosto (type="hidden") con nome "id" -->
                            <input type="hidden" name="id" value="<?php echo $room["id"]; ?>">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

<?php
include __DIR__ . "/partials/templates/footer.php";
 ?>
