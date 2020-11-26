

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshhuit']) and $_POST['refreshhuit'] == 1 )
{include("page_menu_8_refresh.php");}
else
{include("page_menu_8_base.php");}
?>

