<div class="page">
<div class="titre">Informations de base</p></div>
<div class="soustitre"></p></div>

<?php

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['slogan'] = $_POST['slogan'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['dir1'] = $_POST['dir1'];
$_SESSION['dir2'] = $_POST['dir2'];
$_SESSION['dir3'] = $_POST['dir3'];
$_SESSION['dir4'] = $_POST['dir4'];
$_SESSION['dir5'] = $_POST['dir5'];
$_SESSION['dir6'] = $_POST['dir6'];
$_SESSION['dir7'] = $_POST['dir7'];

include("connect_bdd.php");

$req = $bdd->prepare('UPDATE equipes SET 
	Nom = :nom,
	Slogan = :slogan,
	Tel = :tel,
	Mail = :mail,
	Dirgeneral = :dir1,
	Dirfinancier = :dir2,
	Dirrh = :dir3,
	Dirmarketing = :dir4,
	Dircommercial = :dir5,
	Dirproduction = :dir6,
	Dirjuridique = :dir7

 WHERE ID = :ID'); 
$req->execute(array(
	'nom' => $_SESSION['nom'],
	'slogan' => $_SESSION['slogan'],
	'tel' => $_SESSION['tel'],
	'mail' => $_SESSION['mail'],
	'dir1' => $_SESSION['dir1'],
	'dir2' => $_SESSION['dir2'],
	'dir3' => $_SESSION['dir3'],
	'dir4' => $_SESSION['dir4'],
	'dir5' => $_SESSION['dir5'],
	'dir6' => $_SESSION['dir6'],
	'dir7' => $_SESSION['dir7'],
	'ID' => $_SESSION['id'],
	));




echo 'Nom : '.$_SESSION['nom'].'<br> Slogan : '.$_SESSION['slogan'].'<br>';
?>
<?php 

	// Vérification de l'upload affiche
	if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0)
	{ 	// On prépare les variables pour le rename et le test de type de fichiers
	    $infoslogo = pathinfo($_FILES['logo']['name']);
	    $extension_upload = $infoslogo['extension'];
	    $extensions_autorisees = array('png','jpg','jpeg','JPG','JPEG','PNG');
	    $nom = $_SESSION['equipe'];

	        if (in_array($extension_upload, $extensions_autorisees))
	        {	// Si le type de fichier est correct on autorise l'upload avec un rename par l'univers et le nom d'équipe
	       		move_uploaded_file($_FILES['logo']['tmp_name'], 'avatar/' . $nom .'.png');
		       	echo 
		       	'Logo : ' . $infoslogo['basename'] .' </p>';
	       
	        }else	{
	           	echo 
	           	'Logo : Fichier non valide ! </p>';
	        		}  		
	
	}else	{	
		echo 
		'Logo : Aucun changement </p>';
			}
?>


</div>

<div class="page">
<div class="titre">Contact d'urgence</p></div>
<div class="soustitre"></p></div>
<?php 
echo 'Telephone : '.$_SESSION['tel'].'<br>';
echo 'Email : '.$_SESSION['mail'].'</p>';
?>
</div>


<div class="page">
<div class="titre">Liste des membres</p></div>
<div class="soustitre"></p></div>
<?php
echo 'D.Général : '.$_SESSION['dir1'].'<br>';
echo 'D.Financier : '.$_SESSION['dir2'].'<br>';
echo 'D.RH : '.$_SESSION['dir3'].'<br>';
echo 'D.Marketing : '.$_SESSION['dir4'].'<br>';
echo 'D.Commercial : '.$_SESSION['dir5'].'<br>';
echo 'D.Production : '.$_SESSION['dir6'].'<br>';
echo 'D.Juridique : '.$_SESSION['dir7'].'</p>';
?>
</div>


<div class="page">

<form action="index.php" method="post" enctype="multipart/form-data">

	<input type=hidden name="menu" value=1>

	<input type="submit" value="Rafraichir" />

</form>
</div>


</div>