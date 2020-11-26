
<div class="page">

<div class="titre">Informations de base</p>
</div>

<form action="index.php" method="post" enctype="multipart/form-data">

	<label for="nom">Nom :</label><br>
	<input id="nom" type="text" value="<?php echo $_SESSION['nom'] ?>" name="nom"/></p>
  

    <label for="slogan">Slogan :</label><br>
	<input id="slogan" type="text" value="<?php echo $_SESSION['slogan'] ?>" name="slogan"/></p>

<?php

$picture = 'avatar/'.$_SESSION['equipe'].'.png';



echo '<img src='.$picture.'?'.filectime($picture).' border=\'0\' alt=\'\' />';


?>


	<label for="logo">Logo (.jpg .png .jpeg <10Mo):</label><br>
	<input id="logo" type="file" name="logo" /></p>
</div>

<!--CONTACT D'URGENCE-->
<div class="page">
<div class="titre">Contact d'urgence</p></div>
<div class="soustitre"></p></div>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="telephone">Numéro de telephone :</label><br>
	<input id="telephone" type="number" value="<?php echo $_SESSION['tel'] ?>" name="tel"/></p>
    <label for="mail">Email :</label><br>
	<input id="mail" type="email" value="<?php echo $_SESSION['mail'] ?>" name="mail"/></p></p>
</div>

<!--LISTE DES MEMBRES-->
<div class="page">
<div class="titre">Liste des membres</p></div>
<div class="soustitre"></p></div>
	<label for="dir1">Directeur Général :</label><br>
	<input id="dir1" type="text" value="<?php echo $_SESSION['dir1'] ?>" name="dir1"/></p>
	<label for="dir2">Directeur Financier :</label><br>
	<input id="dir2" type="text" value="<?php echo $_SESSION['dir2'] ?>" name="dir2"/></p>
	<label for="dir3">Directeur RH :</label><br>
	<input id="dir3" type="text" value="<?php echo $_SESSION['dir3'] ?>" name="dir3"/></p>
	<label for="dir4">Directeur Marketing :</label><br>
	<input id="dir4" type="text" value="<?php echo $_SESSION['dir4'] ?>" name="dir4"/></p>
	<label for="dir5">Directeur Commercial :</label><br>
	<input id="dir5" type="text" value="<?php echo $_SESSION['dir5'] ?>" name="dir5"/></p>
	<label for="dir6">Directeur Production :</label><br>
	<input id="dir6" type="text" value="<?php echo $_SESSION['dir6'] ?>" name="dir6"/></p>
	<label for="dir7">Directeur Juridique :</label><br>
	<input id="dir7" type="text" value="<?php echo $_SESSION['dir7'] ?>" name="dir7"/></p>
</div>


<!--BOUTON D'ENVOI-->
<div class="page">
	<input type=hidden name="menu" value=1>
	<input type=hidden name="refreshun" value=1>
	<input type="submit" value="Mettre à jour" />
</form>
</div>


