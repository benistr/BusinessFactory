<!-- ACCES AU MENU SI SESSION SINON IDENTIFICATION -->

<?php
if ( isset($_SESSION['id'])) { include('aside_log_id.php'); }
else { include("aside_log_post.php"); } 
?>