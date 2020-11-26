

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshsept']) and $_POST['refreshsept'] == 1 )
{include("page_menu_7_refresh.php");}
else
{include("page_menu_7_base.php");}
?>

