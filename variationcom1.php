				<?php
				if (isset($_SESSION['nbcommerciaux_p0']))	{    $a = intval($_SESSION['nbcommerciaux_p0']); }		else	{    $a = 0 ; }
				$nbcommerciauxold = $a ;
				if (isset($_SESSION['product1commerciaux_p1']))	{    $b = intval($_SESSION['product1commerciaux_p1']); }	else	{    $b = 0 ; }
				if (isset($_SESSION['product2commerciaux_p1']))	{    $c = intval($_SESSION['product2commerciaux_p1']); }	else	{    $c = 0 ; }
				if (isset($_SESSION['product3commerciaux_p1']))	{    $d = intval($_SESSION['product3commerciaux_p1']); }	else	{    $d = 0 ; }
				if (isset($_SESSION['product4commerciaux_p1']))	{    $e = intval($_SESSION['product4commerciaux_p1']); }	else	{    $e = 0 ; }
				if (isset($_SESSION['product5commerciaux_p1']))	{    $f = intval($_SESSION['product5commerciaux_p1']); }	else 	{    $f = 0 ; }
				$nbcommerciauxnew = $b + $c + $d + $e + $f ;
				$variationplus = $nbcommerciauxnew - $nbcommerciauxold ;
				$variationmoins = $nbcommerciauxold - $nbcommerciauxnew ;
				?>

<div class="validation_tips">
	<br>Informations Commerciaux :<br>
</div>

<div class="validation_oui">
<?php

				if ($nbcommerciauxnew > $nbcommerciauxold) { echo "Vous aviez ".$nbcommerciauxold." commerciaux, vous en avez affecté ".$nbcommerciauxnew.". <br>";
															echo "Vous allez en recruter : ".$variationplus.".";	}
										else {}
?>
</div>

<div class="validation_non">
<?php

				if ($nbcommerciauxnew < $nbcommerciauxold) { echo "Vous aviez ".$nbcommerciauxold." commerciaux, vous en avez affecté ".$nbcommerciauxnew.". <br>";
															echo "Vous allez en licencier : ".$variationmoins.".";	}
										else {}
?>
</div>
