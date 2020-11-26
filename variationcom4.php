				<?php
				if (isset($_SESSION['product1commerciaux_p3']))	{ $b = intval($_SESSION['product1commerciaux_p3']); }	else	{ $b = 0 ; }
				if (isset($_SESSION['product2commerciaux_p3']))	{ $c = intval($_SESSION['product2commerciaux_p3']); }	else	{ $c = 0 ; }
				if (isset($_SESSION['product3commerciaux_p3']))	{ $d = intval($_SESSION['product3commerciaux_p3']); }	else	{ $d = 0 ; }
				if (isset($_SESSION['product4commerciaux_p3']))	{ $e = intval($_SESSION['product4commerciaux_p3']); }	else 	{ $e = 0 ; }
				if (isset($_SESSION['product5commerciaux_p3']))	{ $f = intval($_SESSION['product5commerciaux_p3']); }	else	{ $f = 0 ; }
				$nbcommerciauxold = $b + $c + $d + $e + $f ;
				if (isset($_SESSION['product1commerciaux_p4']))	{ $b = intval($_SESSION['product1commerciaux_p4']); }	else	{ $b = 0 ; }
				if (isset($_SESSION['product2commerciaux_p4']))	{ $c = intval($_SESSION['product2commerciaux_p4']); }	else	{ $c = 0 ; }
				if (isset($_SESSION['product3commerciaux_p4']))	{ $d = intval($_SESSION['product3commerciaux_p4']); }	else	{ $d = 0 ; }
				if (isset($_SESSION['product4commerciaux_p4']))	{ $e = intval($_SESSION['product4commerciaux_p4']); }	else 	{ $e = 0 ; }
				if (isset($_SESSION['product5commerciaux_p4']))	{ $f = intval($_SESSION['product5commerciaux_p4']); }	else	{ $f = 0 ; }
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
