				<?php
				if (isset($_SESSION['product1commerciaux_p4']))	{ $b = intval($_SESSION['product1commerciaux_p4']); }	else	{ $b = 0 ; }
				if (isset($_SESSION['product2commerciaux_p4']))	{ $c = intval($_SESSION['product2commerciaux_p4']); }	else	{ $c = 0 ; }
				if (isset($_SESSION['product3commerciaux_p4']))	{ $d = intval($_SESSION['product3commerciaux_p4']); }	else	{ $d = 0 ; }
				if (isset($_SESSION['product4commerciaux_p4']))	{ $e = intval($_SESSION['product4commerciaux_p4']); }	else 	{ $e = 0 ; }
				if (isset($_SESSION['product5commerciaux_p4']))	{ $f = intval($_SESSION['product5commerciaux_p4']); }	else	{ $f = 0 ; }
				$nbcommerciauxold = $b + $c + $d + $e + $f ;
				if (isset($_SESSION['product1commerciaux_p5']))	{ $b = intval($_SESSION['product1commerciaux_p5']); }	else	{ $b = 0 ; }
				if (isset($_SESSION['product2commerciaux_p5']))	{ $c = intval($_SESSION['product2commerciaux_p5']); }	else	{ $c = 0 ; }
				if (isset($_SESSION['product3commerciaux_p5']))	{ $d = intval($_SESSION['product3commerciaux_p5']); }	else	{ $d = 0 ; }
				if (isset($_SESSION['product4commerciaux_p5']))	{ $e = intval($_SESSION['product4commerciaux_p5']); }	else 	{ $e = 0 ; }
				if (isset($_SESSION['product5commerciaux_p5']))	{ $f = intval($_SESSION['product5commerciaux_p5']); }	else	{ $f = 0 ; }
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
