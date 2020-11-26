
<div class="dashtitle"> DECISION 3 </div>

<div class="dashbox">

<div class="dashtitre">
Machines (avant décision) : 
</div>

<?php 
if (isset($_SESSION['nbmachine1_p0']))
{    $a = intval($_SESSION['nbmachine1_p0']); }
else {    $a = 0 ; }
if (isset($_SESSION['equipement1achat_p1']))
{    $b = intval($_SESSION['equipement1achat_p1']); }
else {    $b = 0 ; }
if (isset($_SESSION['equipement1achat_p2']))
{    $c = intval($_SESSION['equipement1achat_p2']); }
else {    $c = 0 ; }


$nbmachine1 = $a + $b + $c ;
echo "Equipement1 : ".$nbmachine1."  ";


if (isset($_SESSION['nbmachine2_p0']))
{    $a = intval($_SESSION['nbmachine2_p0']); }
else {    $a = 0 ; }
if (isset($_SESSION['equipement2achat_p1']))
{    $b = intval($_SESSION['equipement2achat_p1']); }
else {    $b = 0 ; }
if (isset($_SESSION['equipement2achat_p2']))
{    $c = intval($_SESSION['equipement2achat_p2']); }
else {    $c = 0 ; }



$nbmachine2 = $a + $b + $c ;
echo "Equipement2 : ".$nbmachine2." ";

/* 
if (isset($_SESSION['nbmachine3_p0']))
{    $a = intval($_SESSION['nbmachine3_p0']); }
else {    $a = 0 ; }
if (isset($_SESSION['equipement3achat_p1']))
{    $b = intval($_SESSION['equipement3achat_p1']); }
else {    $b = 0 ; }
if (isset($_SESSION['equipement3achat_p2']))
{    $c = intval($_SESSION['equipement3achat_p2']); }
else {    $c = 0 ; }
if (isset($_SESSION['equipement3achat_p3']))
{    $d = intval($_SESSION['equipement3achat_p3']); }
else {    $d = 0 ; }
if (isset($_SESSION['equipement3achat_p4']))
{    $e = intval($_SESSION['equipement3achat_p4']); }
else {    $e = 0 ; }
if (isset($_SESSION['equipement3achat_p5']))
{    $f = intval($_SESSION['equipement3achat_p5']); }
else {    $f = 0 ; }
$nbmachine3 = $a + $b + $c + $d + $e + $f ;
echo "NOMMACHINE3 : ".$nbmachine3."<br>"; */
?>

</div>


<div class="dashbox">
<div class="dashtitre">
Effectif (avant décision):
</div>

<?php


if (isset($_SESSION['nbouvrier_p0']))
{    $a = intval($_SESSION['nbouvrier_p0']); }
else {    $a = 0 ; }
if (isset($_SESSION['embaucheouvrier_p1']))
{    $b = intval($_SESSION['embaucheouvrier_p1']); }
else {    $b = 0 ; }
if (isset($_SESSION['embaucheouvrier_p2']))
{    $c = intval($_SESSION['embaucheouvrier_p2']); }
else {    $c = 0 ; }


if (isset($_SESSION['licenciementouvrier_p1']))
{    $g = intval($_SESSION['licenciementouvrier_p1']); }
else {    $g = 0 ; }
if (isset($_SESSION['licenciementouvrier_p2']))
{    $h = intval($_SESSION['licenciementouvrier_p2']); }
else {    $h = 0 ; }




$nbouvrier = $a + $b + $c - $g - $h ;
echo "Ouvriers : ".$nbouvrier." - ";


if (isset($_SESSION['product1commerciaux_p2']))
{    $b = intval($_SESSION['product1commerciaux_p2']); }
else {    $b = 0 ; }
if (isset($_SESSION['product2commerciaux_p2']))
{    $c = intval($_SESSION['product2commerciaux_p2']); }
else {    $c = 0 ; }
if (isset($_SESSION['product3commerciaux_p2']))
{    $d = intval($_SESSION['product3commerciaux_p2']); }
else {    $d = 0 ; }
if (isset($_SESSION['product4commerciaux_p2']))
{    $e = intval($_SESSION['product4commerciaux_p2']); }
else {    $e = 0 ; }
if (isset($_SESSION['product5commerciaux_p2']))
{    $f = intval($_SESSION['product5commerciaux_p2']); }
else {    $f = 0 ; }

$nbcommerciaux = $b + $c + $d + $e + $f ;
echo "Commerciaux : ".$nbcommerciaux."  ";




?>
</div>