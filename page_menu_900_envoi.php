

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->

<?php 
$req = $bdd->prepare('UPDATE admin SET 

machine1 = :machine1,
machine2 = :machine2, 
machine3 = :machine3,
product1 = :product1,
product2 = :product2, 
product3 = :product3,
product4 = :product4,
product5 = :product5

WHERE ID = :ID'); 


$req->execute(array(
'machine1' => $_SESSION['machine1'],
'machine2' => $_SESSION['machine2'], 
'machine3' => $_SESSION['machine3'],
'product1' => $_SESSION['product1'],
'product2' => $_SESSION['product2'], 
'product3' => $_SESSION['product3'],
'product4' => $_SESSION['product4'],
'product5' => $_SESSION['product5'],
'ID' => $_SESSION['id']
));
?>


<?php 
$req = $bdd->prepare('UPDATE adminbouton SET 

decision1 = :decision1,
decision2 = :decision2,
decision3 = :decision3,
decision4 = :decision4,
decision5 = :decision5,
decision6 = :decision6,
resultat1 = :resultat1,
resultat2 = :resultat2,
resultat3 = :resultat3,
resultat4 = :resultat4,
resultat5 = :resultat5,
resultat6 = :resultat6,
identite = :identite,
envoi = :envoi,
prime = :prime,
refresh = :refresh

WHERE ID = :ID'); 


$req->execute(array(
'decision1' => $_SESSION['decision1'],
'decision2' => $_SESSION['decision2'],
'decision3' => $_SESSION['decision3'],
'decision4' => $_SESSION['decision4'],
'decision5' => $_SESSION['decision5'],
'decision6' => $_SESSION['decision6'],
'resultat1' => $_SESSION['resultat1'],
'resultat2' => $_SESSION['resultat2'],
'resultat3' => $_SESSION['resultat3'],
'resultat4' => $_SESSION['resultat4'],
'resultat5' => $_SESSION['resultat5'],
'resultat6' => $_SESSION['resultat6'],
'identite' => $_SESSION['identite'],
'envoi' => $_SESSION['envoi'],
'prime' => $_SESSION['prime'],
'refresh' => $_SESSION['refresh'],

'ID' => $_SESSION['id']
));

?>

<?php 
$req = $bdd->prepare('UPDATE p0 SET 

nbmachine1 = :nbmachine1,
nbmachine2 = :nbmachine2, 
nbmachine3 = :nbmachine3,
nbouvrier = :nbouvrier,
nbcommerciaux = :nbcommerciaux,
nbequipe = :nbequipe

WHERE ID = :ID'); 


$req->execute(array(
'nbmachine1' => $_SESSION['nbmachine1_p0'],
'nbmachine2' => $_SESSION['nbmachine2_p0'], 
'nbmachine3' => $_SESSION['nbmachine3_p0'],
'nbouvrier' => $_SESSION['nbouvrier_p0'],
'nbcommerciaux' => $_SESSION['nbcommerciaux_p0'],
'nbequipe' => $_SESSION['nbequipe_p0'],
'ID' => $_SESSION['id']
));
?>
