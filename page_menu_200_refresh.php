<div class="page">
<div class="titre">MAJ</p></div>
<div class="soustitre"></p></div>

<?php


$_SESSION['1dir1'] = $_POST['dir1'];
$_SESSION['1dir2'] = $_POST['dir2'];
$_SESSION['1dir3'] = $_POST['dir3'];
$_SESSION['1dir4'] = $_POST['dir4'];
$_SESSION['1dir5'] = $_POST['dir5'];
$_SESSION['1dir6'] = $_POST['dir6'];
$_SESSION['1dir7'] = $_POST['dir7'];

include("connect_bdd.php");

$req = $bdd->prepare('UPDATE equipes2 SET 
	
	Dirgeneral = :dir1,
	Dirfinancier = :dir2,
	Dirrh = :dir3,
	Dirmarketing = :dir4,
	Dircommercial = :dir5,
	Dirproduction = :dir6,
	Dirjuridique = :dir7

 WHERE ID = :ID'); 
$req->execute(array(

	'dir1' => $_SESSION['1dir1'],
	'dir2' => $_SESSION['1dir2'],
	'dir3' => $_SESSION['1dir3'],
	'dir4' => $_SESSION['1dir4'],
	'dir5' => $_SESSION['1dir5'],
	'dir6' => $_SESSION['1dir6'],
	'dir7' => $_SESSION['1dir7'],
	'ID' => $_SESSION['id'],
	));
?>


 OK

 
</div>


<div class="page">

<form action="index.php" method="post" enctype="multipart/form-data">

	<input type=hidden name="menu" value=200>

	<input type="submit" value="Rafraichir" />

</form>
</div>


</div>