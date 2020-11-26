


<div class="box">
    <div class="box_menu">
      <button onclick="b(0)">Produits / Machines </button>
      <button onclick="b(1)">Décisions</button>
      <button onclick="b(2)">Résultats</button>
      <button onclick="b(3)">Extrat</button>
      <button onclick="b(4)">Situation P0</button>
      <!-- <button onclick="b(5)"><?php echo $_SESSION['product3'] ?></button>
      <button onclick="b(6)"><?php echo $_SESSION['product4'] ?></button>
      <button onclick="b(7)"><?php echo $_SESSION['product5'] ?></button> -->
    </div>


<div class="box_content">

    <div id="d1">
    <div class="titre">Nom des produits</div>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="machine1">Nom Machine1 :</label><br>
	<input id="machine1"  value="<?php echo $_SESSION['machine1'] ?>" name="machine1"/></p></p>
	<label for="machine2">Nom Machine2 :</label><br>
	<input id="machine2"  value="<?php echo $_SESSION['machine2'] ?>" name="machine2"/></p></p>
	<label for="machine3">Nom Machine3 :</label><br>
	<input id="machine3"  value="<?php echo $_SESSION['machine3'] ?>" name="machine3"/></p></p>
	<label for="product1">Nom du produit 1 :</label><br>
	<input id="product1"  value="<?php echo $_SESSION['product1'] ?>" name="product1"/></p></p>
	<label for="product2">Nom du produit 2 :</label><br>
	<input id="product2"  value="<?php echo $_SESSION['product2'] ?>" name="product2"/></p></p>
	<label for="product3">Nom du produit 3 :</label><br>
	<input id="product3"  value="<?php echo $_SESSION['product3'] ?>" name="product3"/></p></p>
	<label for="product4">Nom du produit 4 :</label><br>
	<input id="product4"  value="<?php echo $_SESSION['product4'] ?>" name="product4"/></p></p>
	<label for="product5">Nom du produit 5 :</label><br>
	<input id="product5"  value="<?php echo $_SESSION['product5'] ?>" name="product5"/></p></p>
	</div>


	<div id="d2">
	<div class="titre">Affichage des decisions</div>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="decision1">Décision 1 :</label>	<input type="checkbox" id="decision1"  <?php echo $_SESSION['decision1'] ?> value="checked" name="decision1"/></p></p>
	<label for="decision2">Décision 2 :</label>	<input type="checkbox" id="decision2"  <?php echo $_SESSION['decision2'] ?> value="checked" name="decision2"/></p></p>
	<label for="decision3">Décision 3 :</label>	<input type="checkbox" id="decision3"  <?php echo $_SESSION['decision3'] ?> value="checked" name="decision3"/></p></p>
	<label for="decision4">Décision 4 :</label>	<input type="checkbox" id="decision4"  <?php echo $_SESSION['decision4'] ?> value="checked" name="decision4"/></p></p>
	<label for="decision5">Décision 5 :</label>	<input type="checkbox" id="decision5"  <?php echo $_SESSION['decision5'] ?> value="checked" name="decision5"/></p></p>
	<label for="decision6">Décision 6 :</label>	<input type="checkbox" id="decision6"  <?php echo $_SESSION['decision6'] ?> value="checked" name="decision6"/></p></p>
	</div>


	<div id="d3">
	<div class="titre">Affichage des resultats</div>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="resultat1">Résultat 1 :</label>	<input type="checkbox" id="resultat1"  <?php echo $_SESSION['resultat1'] ?> value="checked" name="resultat1"/></p></p>
	<label for="resultat2">Résultat 2 :</label>	<input type="checkbox" id="resultat2"  <?php echo $_SESSION['resultat2'] ?> value="checked" name="resultat2"/></p></p>
	<label for="resultat3">Résultat 3 :</label>	<input type="checkbox" id="resultat3"  <?php echo $_SESSION['resultat3'] ?> value="checked" name="resultat3"/></p></p>
	<label for="resultat4">Résultat 4 :</label>	<input type="checkbox" id="resultat4"  <?php echo $_SESSION['resultat4'] ?> value="checked" name="resultat4"/></p></p>
	<label for="resultat5">Résultat 5 :</label>	<input type="checkbox" id="resultat5"  <?php echo $_SESSION['resultat5'] ?> value="checked" name="resultat5"/></p></p>
	<label for="resultat6">Résultat 6 :</label>	<input type="checkbox" id="resultat6"  <?php echo $_SESSION['resultat6'] ?> value="checked" name="resultat6"/></p></p>
	</div>


	<div id="d4">
	<div class="titre">Autres</div>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="identite">Identite/Contact :</label>	<input type="checkbox" id="identite"  <?php echo $_SESSION['identite'] ?> value="checked" name="identite"/></p></p>
	<label for="envoi">Envoi :</label>	<input type="checkbox" id="envoi"  <?php echo $_SESSION['envoi'] ?> value="checked" name="envoi"/></p></p>
	<label for="prime">Prime :</label>	<input type="checkbox" id="prime"  <?php echo $_SESSION['prime'] ?> value="checked" name="prime"/></p></p>
	<label for="refresh">Refresh :</label>	<input type="checkbox" id="refresh"  <?php echo $_SESSION['refresh'] ?> value="checked" name="refresh"/></p></p>
	</div>


	<div id="d5">
	<div class="titre">Modifier Situation P0</div>
	<form action="index.php" method="post" enctype="multipart/form-data">
	<label for="nbmachine1">Nb machine 1 :</label><br>
	<input id="nbmachine1"  value="<?php echo $_SESSION['nbmachine1_p0'] ?>" name="nbmachine1"/></p></p>
	<label for="nbmachine2">Nb machine 2 :</label><br>
	<input id="nbmachine2"  value="<?php echo $_SESSION['nbmachine2_p0'] ?>" name="nbmachine2"/></p></p>
	<label for="nbmachine3">Nb machine 3 :</label><br>
	<input id="nbmachine3"  value="<?php echo $_SESSION['nbmachine3_p0'] ?>" name="nbmachine3"/></p></p>
	<label for="nbouvrier">Nb d'ouvriers :</label><br>
	<input id="nbouvrier"  value="<?php echo $_SESSION['nbouvrier_p0'] ?>" name="nbouvrier"/></p></p>
	<label for="nbcommerciaux">Nb de commerciaux :</label><br>
	<input id="nbcommerciaux"  value="<?php echo $_SESSION['nbcommerciaux_p0'] ?>" name="nbcommerciaux"/></p></p>
	<label for="nbequipe">Nb d'équipes :</label><br>
	<input id="nbequipe"  value="<?php echo $_SESSION['nbequipe_p0'] ?>" name="nbequipe"/></p></p>
		</div>


	<div id="d6">
	</div>


	<div id="d7">
	</div>


	<div id="d8">
	</div>


	<div class="submit_decision">	
	<input type=hidden name="menu" value=900>
	<input type=hidden name="refreshneufcent" value=1>
	<input type="submit" value="Envoyer" />
	</form>
	</div>

   </div>
</div>



<script type="text/javascript">
	
function b( index ) {
 
 
    d1.style.display = "none"
    d2.style.display = "none"
    d3.style.display = "none"
    d4.style.display = "none"
    d5.style.display = "none"
    d6.style.display = "none"
    d7.style.display = "none"
    d8.style.display = "none"
     
    // range tous les éléments dans un tableau
    var arraysD = [ d1, d2, d3, d4, d5, d6, d7, d8 ]
     
    // selectionne l'élément dont l'index et donné en paramètre
    // pour le passé en display block
    arraysD[ index ].style.display = "block"
     
    // devrait vérifié si index à une valeur correct
}

</script>
