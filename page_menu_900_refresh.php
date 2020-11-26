
<div class="validation">


<!--REINTEGRATION DES _POST DANS LES VARIABLES _SESSION-->
<?php include("page_menu_900_integration.php"); ?>

<!--CONNECTION A LA BDD-->
<?php include("connect_bdd.php"); ?>

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->
<?php include("page_menu_900_envoi.php"); ?>



<!--BOUTON RETOUR-->

<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="menu" value="900">
<input type="submit" value="RETOUR" />
</form>
</div>

