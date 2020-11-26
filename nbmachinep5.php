
<div class="dashtitle"> DECISION 5 </div>

	<div class="dashbox">
		<div class="dashtitre">Vos machines (avant décision) : </div>
		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbmachine1_p0']))			{ $a = intval($_SESSION['nbmachine1_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement1achat_p1']))	{ $b = intval($_SESSION['equipement1achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement1achat_p2']))	{ $c = intval($_SESSION['equipement1achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement1achat_p3']))	{ $d = intval($_SESSION['equipement1achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement1achat_p4']))	{ $e = intval($_SESSION['equipement1achat_p4']); }	else	{ $e = 0 ; }
			$nbmachine1 = $a + $b + $c + $d + $e ;
			echo $_SESSION['machine1']." : ".$nbmachine1."<br>";

			if (isset($_SESSION['nbmachine2_p0']))			{ $a = intval($_SESSION['nbmachine2_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement2achat_p1']))	{ $b = intval($_SESSION['equipement2achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement2achat_p2']))	{ $c = intval($_SESSION['equipement2achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement2achat_p3']))	{ $d = intval($_SESSION['equipement2achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement2achat_p4']))	{ $e = intval($_SESSION['equipement2achat_p4']); }	else	{ $e = 0 ; }
			$nbmachine2 = $a + $b + $c + $d + $e ;
			echo $_SESSION['machine2']." : ".$nbmachine2."<br>";

			if (isset($_SESSION['nbmachine3_p0']))			{ $a = intval($_SESSION['nbmachine3_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement3achat_p1']))	{ $b = intval($_SESSION['equipement3achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement3achat_p2']))	{ $c = intval($_SESSION['equipement3achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement3achat_p3']))	{ $d = intval($_SESSION['equipement3achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement3achat_p4']))	{ $e = intval($_SESSION['equipement3achat_p4']); }	else	{ $e = 0 ; }
			$nbmachine3 = $a + $b + $c + $d + $e ;
			echo $_SESSION['machine3']." : ".$nbmachine3."<br>";
			?>
		</div>
	</div>

	<div class="dashbox">
		<div class="dashtitre">Votre effectif (avant décision) : </div>
		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbouvrier_p0']))			{ $a = intval($_SESSION['nbouvrier_p0']); }				else	{ $a = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p1']))		{ $b = intval($_SESSION['embaucheouvrier_p1']); }		else	{ $b = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p2']))		{ $c = intval($_SESSION['embaucheouvrier_p2']); }		else	{ $c = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p3']))		{ $d = intval($_SESSION['embaucheouvrier_p3']); }		else	{ $d = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p4']))		{ $e = intval($_SESSION['embaucheouvrier_p4']); }		else	{ $e = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p1']))	{ $g = intval($_SESSION['licenciementouvrier_p1']); }	else	{ $g = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p2']))	{ $h = intval($_SESSION['licenciementouvrier_p2']); }	else	{ $h = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p3']))	{ $i = intval($_SESSION['licenciementouvrier_p3']); }	else	{ $i = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p4']))	{ $j = intval($_SESSION['licenciementouvrier_p4']); }	else	{ $j = 0 ; }
			$nbouvrier = $a + $b + $c + $d + $e - $g - $h - $i - $j ;
			echo "Ouvriers : ".$nbouvrier."<br>";

			if (isset($_SESSION['product1commerciaux_p4']))	{ $b = intval($_SESSION['product1commerciaux_p4']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['product2commerciaux_p4']))	{ $c = intval($_SESSION['product2commerciaux_p4']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['product3commerciaux_p4']))	{ $d = intval($_SESSION['product3commerciaux_p4']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['product4commerciaux_p4']))	{ $e = intval($_SESSION['product4commerciaux_p4']); }	else 	{ $e = 0 ; }
			if (isset($_SESSION['product5commerciaux_p4']))	{ $f = intval($_SESSION['product5commerciaux_p4']); }	else	{ $f = 0 ; }
			$nbcommerciaux = $b + $c + $d + $e + $f ;
			echo "Commerciaux : ".$nbcommerciaux."<br>";
			?>
		</div>
	</div>