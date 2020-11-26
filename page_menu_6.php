

<!-- CHOIX DE LA PAGE A AFFICHER :

SI RETOUR DU FORM -> PAGE DE REFRESH

SINON -> PAGE DU FORM -->


<?php 
if (isset($_POST['refreshsix']) and $_POST['refreshsix'] == 1 )
{include("page_menu_6_refresh.php");}
else
{include("page_menu_6_base.php");}
?>

