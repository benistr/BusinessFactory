

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshquatre']) and $_POST['refreshquatre'] == 1 )
{include("page_menu_4_refresh.php");}
else
{include("page_menu_4_base.php");}
?>

