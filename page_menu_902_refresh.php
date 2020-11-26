
<div class="validation">


<!--REINTEGRATION DES _POST DANS LES VARIABLES _SESSION-->
<?php include("page_menu_902_integration.php"); 
?>

<!--CONNECTION A LA BDD-->
<?php include("connect_bdd.php"); 
?>

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->
<?php include("page_menu_902_envoi.php");
?>


<!--BOUTON RETOUR-->
Les bases P1;P2;P3;P4;P5 et P6 ont été éffacé.


<form action="index.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="menu" value="902">
<input type="submit" value="RETOUR" />
</form>
</div>

