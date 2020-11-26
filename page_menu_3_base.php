<div class="old">

	<div class="page env">
	<div class="titre">Affiche d'équipe</p></div>
	<div class="soustitre">Apercu </p></div>
		<?php
		$picture = 'affiche/'.$_SESSION['equipe'].'.png';
		echo '<img src='.$picture.'?'.filectime($picture).' border=\'0\' alt=\'\' />';
		?>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="affiche">Affiche (.jpg .png .jpeg <20Mo):</label><br>
	<input id="affiche" type="file" name="affiche" /></p>
	</div>
<!-- 
	<div class="page env">
	<div class="titre">Plaquette Commerciale</p></div>
	<div class="soustitre">Apercu <br>
	<a href="plaquette/<?php echo $_SESSION['equipe']?>.pdf" download="Plaquette" >
	<img src="pdf.png" border='' alt=''></a></p></div>

<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="plaquette">Plaquette (.PDF .pdf <20Mo):</label><br>
	<input id="plaquette" type="file" name="plaquette" /></p>
</div>



<div class="page env">
<div class="titre">Challenge "Tri des CVs"</p>
</div>
<div class="soustitre">Apercu <br>


 <a href="cv/<?php echo $_SESSION['equipe']?>.pdf" download="Tri CVs" >
<img src="pdf.png" border='' alt=''>
</a>

</p></div>
<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="cv">Cv (.pdf <20Mo):</label><br>
	<input id="cv" type="file" name="cv" /></p>
</div>


<div class="page env">
<div class="titre">Challenge "Marketing Award"</p>
</div>
<div class="soustitre">Apercu <br>



 <a href="ma/<?php echo $_SESSION['equipe']?>.pdf" download="Marketing" >
<img src="pdf.png" border='' alt=''>
</a>




</p></div>


<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="ma">Cv (.pdf <20Mo):</label><br>
	<input id="ma" type="file" name="ma" /></p>
</div>
-->

<!--BOUTON D'ENVOI-->
<div class="page">
	<input type=hidden name="menu" value=3>
	<input type=hidden name="refreshtrois" value=1>
	<input type="submit" value="Mettre à jour" />
</form>
</div>


</div>