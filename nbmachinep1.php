
<div class="dashtitle"><span class="glyphicon glyphicon-briefcase" style="font-size: 25px; margin: 6px; color: #888888"></span> DECISION 1 </div>

	<div class="dashbox">
		
		<div class="dashtitre"><span class="glyphicon glyphicon-wrench" style="font-size: 25px; margin: 6px; color: #888888"></span> Vos machines (avant décision) : </div>
		
		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbmachine1_p0']))	{    $a = intval($_SESSION['nbmachine1_p0']); }	else	{    $a = 0 ; }
			$nbmachine1 = $a  ;
		echo $_SESSION['machine1']." : ".$nbmachine1."<br>";

			if (isset($_SESSION['nbmachine2_p0']))	{    $a = intval($_SESSION['nbmachine2_p0']); }	else	{    $a = 0 ; }
			$nbmachine2 = $a ;
		echo $_SESSION['machine2']." : ".$nbmachine2."<br>";

			if (isset($_SESSION['nbmachine3_p0']))	{    $a = intval($_SESSION['nbmachine3_p0']); }	else	{    $a = 0 ; }
			$nbmachine3 = $a ;
		echo $_SESSION['machine3']." : ".$nbmachine3."<br>";
			?>
		</div>
	</div>



	<div class="dashbox">
		
		<div class="dashtitre"><span class="glyphicon glyphicon-list-alt" style="font-size: 25px; margin: 6px; color: #888888"></span> Votre effectif (avant décision) : </div>

		<div class="dashsubtitre">
			<?php
			if (isset($_SESSION['nbouvrier_p0']))	{    $a = intval($_SESSION['nbouvrier_p0']); }	else	{    $a = 0 ; }
			$nbouvrier = $a ;
		echo "Ouvriers : ".$nbouvrier."<br>";

			if (isset($_SESSION['nbcommerciaux_p0']))	{    $b = intval($_SESSION['nbcommerciaux_p0']); }		else	{    $b = 0 ; }
			$nbcommerciaux = $b ;
		echo "Commerciaux : ".$nbcommerciaux."<br>";
			?>
		</div>
	</div>