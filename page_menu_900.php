




<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshneufcent']) and $_POST['refreshneufcent'] == 1 )
{include("page_menu_900_refresh.php");}
else
{include("page_menu_900_base.php");}
?>


