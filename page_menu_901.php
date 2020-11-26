




<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshneufcentun']) and $_POST['refreshneufcentun'] == 1 )
{include("page_menu_901_refresh.php");}
else
{include("page_menu_901_base.php");}
?>


