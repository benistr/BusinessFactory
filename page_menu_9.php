

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshneuf']) and $_POST['refreshneuf'] == 1 )
{include("page_menu_9_refresh.php");}
else
{include("page_menu_9_base.php");}
?>

