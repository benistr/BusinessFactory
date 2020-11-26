

<div class="validation">

<!-- VERIFICATION QUE LA DECISION EST ENCORE OUVERTE -->
<?php 
if ($_SESSION['decision4'] == "non") {

/* PAGE DE REFUS DECISION */
 include ("validation_non.php");

}

else

{

/* REINTEGRATION DES _POST DANS LES VARIABLES _SESSION */
	include("page_menu_7_integration.php");

/* CONNECTION A LA BDD */
	include("connect_bdd.php");

/* ENVOI DES VARIABLES _SESSION VERS LA BDD */
	include("page_menu_7_envoi.php");

	include("validation_oui.php");


}

?>

<!--BOUTON RETOUR-->

<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="menu" value="7">
<input type="submit" value="RETOUR" />
</form>
</div>
