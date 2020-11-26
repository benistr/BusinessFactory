

<!--REINTEGRATION DES _POST DANS LES VARIABLES _SESSION-->
<?php 


if (isset($_POST['item_dividendes_p1']))
{    $_SESSION['item_dividendes_p1'] = $_POST['item_dividendes_p1']; }
else {    $_SESSION['item_dividendes_p1'] = 'non' ; }

if (isset($_POST['item_dividendes_p2']))
{    $_SESSION['item_dividendes_p2'] = $_POST['item_dividendes_p2']; }
else {    $_SESSION['item_dividendes_p2'] = 'non' ; }

if (isset($_POST['item_dividendes_p3']))
{    $_SESSION['item_dividendes_p3'] = $_POST['item_dividendes_p3']; }
else {    $_SESSION['item_dividendes_p3'] = 'non' ; }

if (isset($_POST['item_dividendes_p4']))
{    $_SESSION['item_dividendes_p4'] = $_POST['item_dividendes_p4']; }
else {    $_SESSION['item_dividendes_p4'] = 'non' ; }

if (isset($_POST['item_dividendes_p5']))
{    $_SESSION['item_dividendes_p5'] = $_POST['item_dividendes_p5']; }
else {    $_SESSION['item_dividendes_p5'] = 'non' ; }

if (isset($_POST['item_dividendes_p6']))
{    $_SESSION['item_dividendes_p6'] = $_POST['item_dividendes_p6']; }
else {    $_SESSION['item_dividendes_p6'] = 'non' ; }



echo "post : ".$_POST['item_dividendes_p1'];
echo "session :".$_SESSION['item_dividendes_p1'];





?>

