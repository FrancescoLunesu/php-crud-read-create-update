<?php
include __DIR__ . '/partials/templates/head.php';
 ?>

 <div class="container p-3">
     <form action="partials/create/server.php" method="post">
         <div class="form-group">
             <label for="roomNumber">Numero stanza</label>
             <input type="text" class="form-control" name="roomNumber" value="" id="roomNumber" placeholder="Inserisci il numero della stanza">
         </div>
         <div class="form-group">
             <label for="floor">Piano</label>
             <input type="text" class="form-control" name="floor" value="" id="floor" placeholder="Inserisci il piano della stanza">
         </div>
         <div class="form-group">
             <label for="beds">Numero dei letti</label>
             <input type="text" class="form-control" name="beds" value="" id="beds" placeholder="Inserisci il numero di letti della stanza">
         </div>
         <div class="form-group">
             <input type="submit" class="form-control bg-primary text-white" value="Insert">
         </div>
     </form>
 </div>
