
<div class="dashtitle"><span class="glyphicon glyphicon-briefcase" style="font-size: 25px; margin: 6px; color: #888888"></span> DECISION 6 </div>

	<div class="dashbox">
		<div class="dashtitre"><span class="glyphicon glyphicon-wrench" style="font-size: 25px; margin: 6px; color: #888888"></span> Vos machines (avant décision) : </div>
		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbmachine1_p0']))			{ $a = intval($_SESSION['nbmachine1_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement1achat_p1']))	{ $b = intval($_SESSION['equipement1achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement1achat_p2']))	{ $c = intval($_SESSION['equipement1achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement1achat_p3']))	{ $d = intval($_SESSION['equipement1achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement1achat_p4']))	{ $e = intval($_SESSION['equipement1achat_p4']); }	else	{ $e = 0 ; }
			if (isset($_SESSION['equipement1achat_p5']))	{ $f = intval($_SESSION['equipement1achat_p5']); }	else	{ $f = 0 ; }
			$nbmachine1 = $a + $b + $c + $d + $e + $f ;
			echo $_SESSION['machine1']." : ".$nbmachine1."<br>";

			if (isset($_SESSION['nbmachine2_p0']))			{ $a = intval($_SESSION['nbmachine2_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement2achat_p1']))	{ $b = intval($_SESSION['equipement2achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement2achat_p2']))	{ $c = intval($_SESSION['equipement2achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement2achat_p3']))	{ $d = intval($_SESSION['equipement2achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement2achat_p4']))	{ $e = intval($_SESSION['equipement2achat_p4']); }	else	{ $e = 0 ; }
			if (isset($_SESSION['equipement2achat_p5']))	{ $f = intval($_SESSION['equipement2achat_p5']); }	else	{ $f = 0 ; }
			$nbmachine2 = $a + $b + $c + $d + $e + $f ;
			echo $_SESSION['machine2']." : ".$nbmachine2."<br>";

			if (isset($_SESSION['nbmachine3_p0']))			{ $a = intval($_SESSION['nbmachine3_p0']); }		else	{ $a = 0 ; }
			if (isset($_SESSION['equipement3achat_p1']))	{ $b = intval($_SESSION['equipement3achat_p1']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['equipement3achat_p2']))	{ $c = intval($_SESSION['equipement3achat_p2']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['equipement3achat_p3']))	{ $d = intval($_SESSION['equipement3achat_p3']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['equipement3achat_p4']))	{ $e = intval($_SESSION['equipement3achat_p4']); }	else	{ $e = 0 ; }
			if (isset($_SESSION['equipement3achat_p5']))	{ $f = intval($_SESSION['equipement3achat_p5']); }	else	{ $f = 0 ; }
			$nbmachine3 = $a + $b + $c + $d + $e + $f ;
			echo $_SESSION['machine3']." : ".$nbmachine3."<br>";
			?>
		</div>
	</div>

	<div class="dashbox">
		<div class="dashtitre"><span class="glyphicon glyphicon-list-alt" style="font-size: 25px; margin: 6px; color: #888888"></span> Votre effectif (avant décision) : </div>
		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbouvrier_p0']))			{ $a = intval($_SESSION['nbouvrier_p0']); }				else	{ $a = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p1']))		{ $b = intval($_SESSION['embaucheouvrier_p1']); }		else	{ $b = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p2']))		{ $c = intval($_SESSION['embaucheouvrier_p2']); }		else	{ $c = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p3']))		{ $d = intval($_SESSION['embaucheouvrier_p3']); }		else	{ $d = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p4']))		{ $e = intval($_SESSION['embaucheouvrier_p4']); }		else	{ $e = 0 ; }
			if (isset($_SESSION['embaucheouvrier_p5']))		{ $f = intval($_SESSION['embaucheouvrier_p5']); }		else	{ $f = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p1']))	{ $g = intval($_SESSION['licenciementouvrier_p1']); }	else	{ $g = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p2']))	{ $h = intval($_SESSION['licenciementouvrier_p2']); }	else	{ $h = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p3']))	{ $i = intval($_SESSION['licenciementouvrier_p3']); }	else	{ $i = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p4']))	{ $j = intval($_SESSION['licenciementouvrier_p4']); }	else	{ $j = 0 ; }
			if (isset($_SESSION['licenciementouvrier_p5']))	{ $k = intval($_SESSION['licenciementouvrier_p5']); }	else	{ $k = 0 ; }
			$nbouvrier = $a + $b + $c + $d + $e + $f - $g - $h - $i - $j - $k ;
			echo "Ouvriers : ".$nbouvrier."<br>";

			if (isset($_SESSION['product1commerciaux_p5']))	{ $b = intval($_SESSION['product1commerciaux_p5']); }	else	{ $b = 0 ; }
			if (isset($_SESSION['product2commerciaux_p5']))	{ $c = intval($_SESSION['product2commerciaux_p5']); }	else	{ $c = 0 ; }
			if (isset($_SESSION['product3commerciaux_p5']))	{ $d = intval($_SESSION['product3commerciaux_p5']); }	else	{ $d = 0 ; }
			if (isset($_SESSION['product4commerciaux_p5']))	{ $e = intval($_SESSION['product4commerciaux_p5']); }	else 	{ $e = 0 ; }
			if (isset($_SESSION['product5commerciaux_p5']))	{ $f = intval($_SESSION['product5commerciaux_p5']); }	else	{ $f = 0 ; }
			$nbcommerciaux = $b + $c + $d + $e + $f ;
			echo "Commerciaux : ".$nbcommerciaux."<br>";
			?>
		</div>
	</div>