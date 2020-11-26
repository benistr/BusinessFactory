


<div class="special2">
<p>	 UNIVERS : A </p>
</div>

<?php

 include("connect_bdd.php");

$e = intval($_SESSION['nbequipe_p0']);



if ($e > 20) 
	{ $f = 20; } 
else {  ; }

if ($e < 20) 
	{ $f = $e; } 
else {  ; }

echo "$e".$e;
echo "$f".$f;


$reponse = $bdd->query('SELECT Equipe FROM equipes WHERE ID <= \'' . $f . '\' ORDER BY ID ');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{


echo '<div class="plaquette">';
echo '<p><strong>' . $donnees['Equipe'] . '</strong> : <p>';
$picture = 'plaquette/'.$donnees['Equipe'].'.png';
echo '<img src='.$picture.'?'.filectime($picture).' border=\'0\' alt=\'\' /><br>';
echo '</div>';


}

$reponse->closeCursor();

?>

<div class="special2">
<p>	 UNIVERS : B </p>
</div>

<?php 
 include("connect_bdd.php");

$reponse = $bdd->query('SELECT Equipe FROM equipes WHERE ID > 20 AND ID <= \'' . $e . '\' ORDER BY ID ');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{


echo '<div class="plaquette">';
echo '<p><strong>' . $donnees['Equipe'] . '</strong> : <p>';
$picture = 'plaquette/'.$donnees['Equipe'].'.png';
echo '<img src='.$picture.'?'.filectime($picture).' border=\'0\' alt=\'\' /><br>';
echo '</div>';


}

$reponse->closeCursor();

?>