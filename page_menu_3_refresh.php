
<!--AFFICHE-->

<div class="old">
<div class="page env">
<div class="titre">Affiche d'équipe</p></div>
<div class="soustitre"></p></div>

<?php 
	// Vérification de l'upload affiche
	if (isset($_FILES['affiche']) AND $_FILES['affiche']['error'] == 0)
	{ 	// On prépare les variables pour le rename et le test de type de fichiers
	    $infosaffiche = pathinfo($_FILES['affiche']['name']);
	    $extension_upload = $infosaffiche['extension'];
	    $extensions_autorisees = array('png','jpg','jpeg','JPG','JPEG','PNG');
	    $nom = $_SESSION['equipe'];

	        if (in_array($extension_upload, $extensions_autorisees))
	        {	// Si le type de fichier est correct on autorise l'upload avec un rename par l'univers et le nom d'équipe
	       		move_uploaded_file($_FILES['affiche']['tmp_name'], 'affiche/' . $nom .'.png');
		       	echo 
		       	'Logo : ' . $infosaffiche['basename'] .' </p>';
	       
	        }else	{
	           	echo 
	           	'Affiche : Fichier non valide ! </p>';
	        		}  		
	
	}else	{	
		echo 
		'Affiche : Aucun changement </p>';
			}
?>
</div>

<!--
<div class="page env">
<div class="titre">Plaquette Commerciale</p></div>
<div class="soustitre"></p></div>


<?php 
	// Vérification de l'upload affiche
	if (isset($_FILES['plaquette']) AND $_FILES['plaquette']['error'] == 0)
	{ 	// On prépare les variables pour le rename et le test de type de fichiers
	    $infosplaquette = pathinfo($_FILES['plaquette']['name']);
	    $extension_upload = $infosplaquette['extension'];
	    $extensions_autorisees = array('PDF','pdf');
	    $nom = $_SESSION['equipe'];

	        if (in_array($extension_upload, $extensions_autorisees))
	        {	// Si le type de fichier est correct on autorise l'upload avec un rename par l'univers et le nom d'équipe
	       		move_uploaded_file($_FILES['plaquette']['tmp_name'], 'plaquette/' . $nom .'.pdf');
		       	echo 
		       	'Plaquette : ' . $infosplaquette['basename'] .' </p>';
	       
	        }else	{
	           	echo 
	           	'Plaquette : Fichier non valide ! </p>';
	        		}  		
	
	}else	{	
		echo 
		'Plaquette : Aucun changement </p>';
			}
?>
</div>





<div class="page env">
<div class="titre">Challenge "Tri des CVs"</p></div>
<div class="soustitre"></p></div>


<?php 
	// Vérification de l'upload affiche
	if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0)
	{ 	// On prépare les variables pour le rename et le test de type de fichiers
	    $infoscv = pathinfo($_FILES['cv']['name']);
	    $extension_upload = $infoscv['extension'];
	    $extensions_autorisees = array('pdf');
	    $nom = $_SESSION['equipe'];

	        if (in_array($extension_upload, $extensions_autorisees))
	        {	// Si le type de fichier est correct on autorise l'upload avec un rename par l'univers et le nom d'équipe
	       		move_uploaded_file($_FILES['cv']['tmp_name'], 'cv/' . $nom .'.pdf');
		       	echo 
		       	'CV : ' . $infoscv['basename'] .' </p>';
	       
	        }else	{
	           	echo 
	           	'CV : Fichier non valide ! </p>';
	        		}  		
	
	}else	{	
		echo 
		'CV : Aucun changement </p>';
			}
?>
</div>






<div class="page env">
<div class="titre">Challenge "Marketing Award"</p></div>
<div class="soustitre"></p></div>


<?php 
	// Vérification de l'upload affiche
	if (isset($_FILES['ma']) AND $_FILES['ma']['error'] == 0)
	{ 	// On prépare les variables pour le rename et le test de type de fichiers
	    $infosma = pathinfo($_FILES['ma']['name']);
	    $extension_upload = $infosma['extension'];
	    $extensions_autorisees = array('pdf');
	    $nom = $_SESSION['equipe'];

	        if (in_array($extension_upload, $extensions_autorisees))
	        {	// Si le type de fichier est correct on autorise l'upload avec un rename par l'univers et le nom d'équipe
	       		move_uploaded_file($_FILES['ma']['tmp_name'], 'ma/' . $nom .'.pdf');
		       	echo 
		       	'Marketing Awards : ' . $infosma['basename'] .' </p>';
	       
	        }else	{
	           	echo 
	           	'Marketing Awards : Fichier non valide ! </p>';
	        		}  		
	
	}else	{	
		echo 
		'Marketing Awards : Aucun changement </p>';
			}
?>
</div>


-->
</div>









































<div class="page">

<form action="index.php" method="post" enctype="multipart/form-data">

	<input type=hidden name="menu" value=3>

	<input type="submit" value="Rafraichir" />

</form>
</div>


</div>