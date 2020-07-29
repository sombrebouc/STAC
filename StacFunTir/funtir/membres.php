<!-- \\\\\ MODAL Creation d'évènement ///// -->
<!--
     <div class="modal fade" id="membersListModal" tabindex="-1">
     <div class="modal-dialog modal-md modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-body rounded">
 
 
             </div>
         </div>
     </div>
 </div>
-->

<?php

define( 'DB_NAME', 'stac' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'THOR81' );
define( 'DB_HOST', 'localhost' );
define( 'DB_TABLE', 'membres' );

// connexion à la bdd
$connexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);

?>