
<div class="validation">


<!--REINTEGRATION DES _POST DANS LES VARIABLES _SESSION-->
<?php include("page_menu_901_integration.php"); 
?>

<!--CONNECTION A LA BDD-->
<?php include("connect_bdd.php"); 
?>

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->
<?php include("page_menu_901_envoi.php");
?>


<!--BOUTON RETOUR-->

<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="menu" value="901">
<input type="submit" value="RETOUR" />
</form>
</div>

