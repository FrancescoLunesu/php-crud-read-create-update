<?php
include __DIR__ . "/partials/templates/head.php";
include __DIR__ . "/partials/update/server.php";
// var_dump($row);
 ?>

    <div class="container p-3">
        <form action="partials/update/server-edit.php" method="post">
            <div class="form-group">
                <label for="roomNumber">Numero stanza</label>
                <input type="text" class="form-control" name="roomNumber" value="<?php echo $row["room_number"]; ?>" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="floor">Piano</label>
                <input type="text" class="form-control" name="floor" value="<?php echo $row["floor"]; ?>" id="floor">
            </div>
            <div class="form-group">
                <label for="beds">Numero dei letti</label>
                <input type="text" class="form-control" name="beds" value="<?php echo $row["beds"]; ?>" id="beds">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row["id"]; ?>" id="beds">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control bg-primary text-white" value="Modifica">
            </div>
        </form>
    </div>

 <?php
 include __DIR__ . "/partials/templates/footer.php";
  ?>
