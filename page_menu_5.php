

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshcinq']) and $_POST['refreshcinq'] == 1 )
{include("page_menu_5_refresh.php");}
else
{include("page_menu_5_base.php");}
?>

