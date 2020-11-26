

<!--REINTEGRATION DES _POST DANS LES VARIABLES _SESSION-->
<?php 
$_SESSION['product1'] = $_POST['product1'];
$_SESSION['product2'] = $_POST['product2'];
$_SESSION['product3'] = $_POST['product3'];
$_SESSION['product4'] = $_POST['product4'];
$_SESSION['product5'] = $_POST['product5'];

$_SESSION['machine1'] = $_POST['machine1'];
$_SESSION['machine2'] = $_POST['machine2'];
$_SESSION['machine3'] = $_POST['machine3'];


if (isset($_POST['decision1']))
{    $_SESSION['decision1'] = $_POST['decision1']; }
else {    $_SESSION['decision1'] = 'non' ; }

if (isset($_POST['decision2']))
{    $_SESSION['decision2'] = $_POST['decision2']; }
else {    $_SESSION['decision2'] = 'non' ; }

if (isset($_POST['decision3']))
{    $_SESSION['decision3'] = $_POST['decision3']; }
else {    $_SESSION['decision3'] = 'non' ; }

if (isset($_POST['decision4']))
{    $_SESSION['decision4'] = $_POST['decision4']; }
else {    $_SESSION['decision4'] = 'non' ; }

if (isset($_POST['decision5']))
{    $_SESSION['decision5'] = $_POST['decision5']; }
else {    $_SESSION['decision5'] = 'non' ; }

if (isset($_POST['decision6']))
{    $_SESSION['decision6'] = $_POST['decision6']; }
else {    $_SESSION['decision6'] = 'non' ; }

if (isset($_POST['resultat1']))
{    $_SESSION['resultat1'] = $_POST['resultat1']; }
else {    $_SESSION['resultat1'] = 'non' ; }

if (isset($_POST['resultat2']))
{    $_SESSION['resultat2'] = $_POST['resultat2']; }
else {    $_SESSION['resultat2'] = 'non' ; }

if (isset($_POST['resultat3']))
{    $_SESSION['resultat3'] = $_POST['resultat3']; }
else {    $_SESSION['resultat3'] = 'non' ; }

if (isset($_POST['resultat4']))
{    $_SESSION['resultat4'] = $_POST['resultat4']; }
else {    $_SESSION['resultat4'] = 'non' ; }

if (isset($_POST['resultat5']))
{    $_SESSION['resultat5'] = $_POST['resultat5']; }
else {    $_SESSION['resultat5'] = 'non' ; }

if (isset($_POST['resultat6']))
{    $_SESSION['resultat6'] = $_POST['resultat6']; }
else {    $_SESSION['resultat6'] = 'non' ; }

if (isset($_POST['identite']))
{    $_SESSION['identite'] = $_POST['identite']; }
else {    $_SESSION['identite'] = 'non' ; }

if (isset($_POST['envoi']))
{    $_SESSION['envoi'] = $_POST['envoi']; }
else {    $_SESSION['envoi'] = 'non' ; }

if (isset($_POST['prime']))
{    $_SESSION['prime'] = $_POST['prime']; }
else {    $_SESSION['prime'] = 'non' ; }

if (isset($_POST['refresh']))
{    $_SESSION['refresh'] = $_POST['refresh']; }
else {    $_SESSION['refresh'] = 'non' ; }


$_SESSION['nbmachine1_p0'] = $_POST['nbmachine1'];
$_SESSION['nbmachine2_p0'] = $_POST['nbmachine2'];
$_SESSION['nbmachine3_p0'] = $_POST['nbmachine3'];
$_SESSION['nbouvrier_p0'] = $_POST['nbouvrier'];
$_SESSION['nbcommerciaux_p0'] = $_POST['nbcommerciaux'];
$_SESSION['nbequipe_p0'] = $_POST['nbequipe'];

?>