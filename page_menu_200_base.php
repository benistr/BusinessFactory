

<div class="page env">

<div class="nom">Prime de Participation aux bénéfices !</p>
</div>
<div class="soustitre"> 

La maison mère qui à financé votre entreprise décide de vous remercier pour votre implication en vous offrant <strong>100</strong> actions !!! A vous de répartir ces actions entre vous (A la hauteur de votre implication personnelle !!).

</p></div>
</div>	

<div class="page env">
<div class="soustitre">
Directeur General<br>
<?php echo $_SESSION['dir1'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir1">Nb d'actions :</label><br>
	<input id="dir1" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir1'] ?>"name="dir1" /></p>
</div>
</div>

<div class="page env">
<div class="soustitre">
Directeur Financier<br>
<?php echo $_SESSION['dir2'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir2">Nb d'actions :</label><br>
	<input id="dir2" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir2'] ?>" name="dir2" /></p>
</div></div>


<div class="page env">
<div class="soustitre">
Directeur RH<br>
<?php echo $_SESSION['dir3'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir3">Nb d'actions :</label><br>
	<input id="dir3" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir3'] ?>"name="dir3" /></p>
</div>
</div>

<div class="page env">
<div class="soustitre">
Directeur Marketing<br>
<?php echo $_SESSION['dir4'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir4">Nb d'actions :</label><br>
	<input id="dir4" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir4'] ?>" name="dir4" /></p>
</div></div>


<div class="page env">
<div class="soustitre">
Directeur Commercial<br>
<?php echo $_SESSION['dir5'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir6">Nb d'actions :</label><br>
	<input id="dir6" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir5'] ?>"name="dir5" /></p>
</div></div>


<div class="page env">
<div class="soustitre">
Directeur Distribution<br>
<?php echo $_SESSION['dir6'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir6">Nb d'actions :</label><br>
	<input id="dir6" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir6'] ?>" name="dir6" /></p>
</div>
</div>

<div class="page env">
<div class="soustitre">
Directeur Juridique<br>
<?php echo $_SESSION['dir7'] ?><br>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="dir7">Nb d'actions :</label><br>
	<input id="dir7" type="number" min=0 max=100 value="<?php echo $_SESSION['1dir7'] ?>"name="dir7" /></p>
</div></div>



<div class="page">
	<input type=hidden name="menu" value=200>
	<input type=hidden name="refreshdeuxcent" value=1>
	<input type="submit" value="Mettre à jour" />
</form>
</div>

