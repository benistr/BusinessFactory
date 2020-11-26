




<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshneufcentdeux']) and $_POST['refreshneufcentdeux'] == 1 )
{include("page_menu_902_refresh.php");}
else
{include("page_menu_902_base.php");}
?>


