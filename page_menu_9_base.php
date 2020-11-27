
<div class="dash">
	<?php $decision = $_POST['menu'] - 3 ; include("nbmachinep".$decision.".php"); ?>
</div>

<div class="box">
    <div class="box_menu">
      <button onclick="b(0)">Finance</button>
      <button onclick="b(1)">Equipement</button>
      <button onclick="b(2)">Personnel</button>
      <button onclick="b(3)"><?php echo $_SESSION['product1'] ?></button>
      <button onclick="b(4)"><?php echo $_SESSION['product2'] ?></button>
      <button onclick="b(5)"><?php echo $_SESSION['product3'] ?></button>
      <button onclick="b(6)"><?php echo $_SESSION['product4'] ?></button>
      <button onclick="b(7)"><?php echo $_SESSION['product5'] ?></button>
    </div>
	
	<div class="box_content">
		<div id="d1">	<!--DECISIONS GENERALES-->
			<div class="titre"><span class="glyphicon glyphicon-euro" style="font-size: 25px; margin: 6px; color: #888888"></span>> Décisions Générales</div><form action="index.php" method="post" enctype="multipart/form-data">

			<!--item_dividendes_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_dividendes_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="dividendes">Dividendes à distribuer (€) :</label>
			<input id="dividendes" name="dividendes_p6" type="number" min=0 value="<?php echo $_SESSION['dividendes_p6'] ?>"
			<?php if ($_SESSION['item_dividendes_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>

			<!--item_emprunt_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_emprunt_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="montant">Montant de l'emprunt (€) (<200K€) :</label>
			<input id="montant" name="montant_p6" type="number" min=0 max=200000 value="<?php echo $_SESSION['montant_p6'] ?>"
			<?php if ($_SESSION['item_emprunt_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
		</div>
	
		<div id="d2">	<!--INVESTISSEMENT DE PRODUCTION-->
			<div class="titre"><span class="glyphicon glyphicon-cog" style="font-size: 25px; margin: 6px; color: #888888"></span>> Investissement de production</div><form action="index.php" method="post" enctype="multipart/form-data">

			<!--item_machine1_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_machine1_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="equipement_1">Achat d'equipement "<?php echo $_SESSION['machine1'] ?>" (valeur négative si vous voulez vendre):</label>
			<input id="equipement_1" name="equipement1achat_p6" type="number" value="<?php echo $_SESSION['equipement1achat_p6'] ?>"
			<?php if ($_SESSION['item_machine1_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>

			<!--item_machine2_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_machine2_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="equipement_2">Achat d'equipement "<?php echo $_SESSION['machine2'] ?>" (valeur négative si vous voulez vendre):</label>
			<input id="equipement_2" name="equipement2achat_p6" type="number" value="<?php echo $_SESSION['equipement2achat_p6'] ?>"
			<?php if ($_SESSION['item_machine2_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>

			<!--item_machine3_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_machine3_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="equipement_3">Achat d'equipement "<?php echo $_SESSION['machine3'] ?>" (valeur négative si vous voulez vendre):</label>
			<input id="equipement_3" name="equipement3achat_p6" type="number" value="<?php echo $_SESSION['equipement3achat_p6'] ?>"
			<?php if ($_SESSION['item_machine3_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>

			<!--item_budgetmaintenance_p6-->
			<!--VERIFICATION ITEM/LOCK + READONLY INPUT -->
			<?php if ($_SESSION['item_budgetmaintenance_p6'] == 'checked')
			{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="budgetmaintenance">Budget maintenance total (€) :</label>
			<input id="budgetmaintenance" name="budgetmaintenance_p6" type="number" min=0 value="<?php echo $_SESSION['budgetmaintenance_p6'] ?>"
			<?php if ($_SESSION['item_budgetmaintenance_p6'] == 'checked')
			{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
		</div>
    
	    <div id="d3">
			<!--GESTION DU PERSONNEL-->	<div class="titre"><span class="glyphicon glyphicon-search" style="font-size: 25px; margin: 6px; color: #888888"></span>> Gestion du personnel</div>
			<form action="index.php" method="post" enctype="multipart/form-data">

			<!--item_recrutementouvrier_p6-->
			<?php if ($_SESSION['item_recrutementouvrier_p6'] == 'checked')
			{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="embaucheouvrier">Recrutement d'ouvriers :</label>
			<input id="embaucheouvrier" name="embaucheouvrier_p6" type="number" min=0 value="<?php echo $_SESSION['embaucheouvrier_p6'] ?>"
			<?php if ($_SESSION['item_recrutementouvrier_p6'] == 'checked')
			{ echo '' ; }
			else { echo  'readonly' ; } ?>
			></div>
			<!--item_licenciementouvrier_p6-->
			<?php if ($_SESSION['item_licenciementouvrier_p6'] == 'checked')
			{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="licenciementouvrier">Licenciement d'ouvriers :</label>
			<input id="licenciementouvrier" name="licenciementouvrier_p6" type="number" min=0 value="<?php echo $_SESSION['licenciementouvrier_p6'] ?>"
			<?php if ($_SESSION['item_licenciementouvrier_p6'] == 'checked')
			{ echo '' ; }
			else { echo  'readonly' ; } ?>
			></div>
			<!--item_indiceouvrier_p6-->
			<?php if ($_SESSION['item_indiceouvrier_p6'] == 'checked')
			{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="indiceouvrier">Indice de salaire (ouvriers) :</label>
			<input id="indiceouvrier" name="indiceouvrier_p6" type="number" min=100 max=200 value="<?php echo $_SESSION['indiceouvrier_p6'] ?>"
			<?php if ($_SESSION['item_indiceouvrier_p6'] == 'checked')
			{ echo '' ; }
			else { echo  'readonly' ; } ?>
			></div>
			<!--item_budgetsocial_p6-->
			<?php if ($_SESSION['item_budgetsocial_p6'] == 'checked')
			{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="budgetsocial">Budget social (€) :</label>
			<input id="budgetsocial" name="budgetsocial_p6" type="number" min=0 value="<?php echo $_SESSION['budgetsocial_p6'] ?>"
			<?php if ($_SESSION['item_budgetsocial_p6'] == 'checked')
			{ echo '' ; }
			else { echo  'readonly' ; } ?>
			></div>
		</div>

		<div id="d4">
			<!--PARAMETRAGE PRODUIT 1-->	<div class="titre"><?php echo $_SESSION['product1'] ?></div>
			<form action="index.php" method="post" enctype="multipart/form-data">
			<!--item_product1_licence_p6-->
			<?php if ($_SESSION['item_product1_licence_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1licence">Achat de licence :</label>
			<input id="product1licence" name="product1licence_p6" type="number" min=0 value="<?php echo $_SESSION['product1licence_p6'] ?>"
			<?php if ($_SESSION['item_product1_licence_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_production_p6-->
			<?php if ($_SESSION['item_product1_production_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1production">Production prévue :</label>
			<input id="product1production" name="product1production_p6" type="number" min=0 value="<?php echo $_SESSION['product1production_p6'] ?>"
			<?php if ($_SESSION['item_product1_production_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_qualite_p6-->
			<?php if ($_SESSION['item_product1_qualite_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1qualite">Qualité prévue :</label>
			<input id="product1qualite" name="product1qualite_p6" type="number" min=0 value="<?php echo $_SESSION['product1qualite_p6'] ?>"
			<?php if ($_SESSION['item_product1_qualite_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_soustraitance_p6-->
			<?php if ($_SESSION['item_product1_soustraitance_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1soustraitance">Sous-traitance prévue :</label>
			<input id="product1soustraitance" name="product1soustraitance_p6" type="number" min=0 value="<?php echo $_SESSION['product1soustraitance_p6'] ?>"
			<?php if ($_SESSION['item_product1_soustraitance_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_budgetcom_p6-->
			<?php if ($_SESSION['item_product1_budgetcom_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1communication">Budget communication (€) :</label>
			<input id="product1communication" name="product1communication_p6" type="number" min=0 value="<?php echo $_SESSION['product1communication_p6'] ?>"
			<?php if ($_SESSION['item_product1_budgetcom_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_commerciaux_p6-->
			<?php if ($_SESSION['item_product1_commerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product1commerciaux">Commerciaux spécialisés :</label>
			<input id="product1commerciaux" name="product1commerciaux_p6" type="number" min=0 value="<?php echo $_SESSION['product1commerciaux_p6'] ?>"
			<?php if ($_SESSION['item_product1_commerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_indicecommerciaux_p6-->
			<?php if ($_SESSION['item_product1_indicecommerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="product1indicefdv">Indice de salaire (commerciaux) :</label>
			<input id="product1indicefdv" name="product1indicefdv_p6" type="number" min=0 max=200 value="<?php echo $_SESSION['product1indicefdv_p6'] ?>"
			<?php if ($_SESSION['item_product1_indicecommerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product1_creditclient_p6-->
			<?php if ($_SESSION['item_product1_creditclient_p6'] == 'checked')	
				{
				include 'page_menu_9_product1_cc_on.php';
			 	}
				else 
				{
				include 'page_menu_9_product1_cc_off.php';
				}
			?>
			<!--item_product1_fdv_p6-->
			<div class="product1">
			<?php if ($_SESSION['item_product1_pdv_p6'] == 'checked')
				{
				include 'page_menu_9_product1_pdv_on.php';
				}
				else 
				{
				include 'page_menu_9_product1_pdv_off.php';
				}
			?>
			</div>
		</div>

		<div id="d5">
			<!--PARAMETRAGE PRODUIT 2-->	<div class="titre"><?php echo $_SESSION['product2'] ?></div>
			<form action="index.php" method="post" enctype="multipart/form-data">
			<!--item_product2_licence_p6-->
			<?php if ($_SESSION['item_product2_licence_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2licence">Achat de licence :</label>
			<input id="product2licence" name="product2licence_p6" type="number" min=0 value="<?php echo $_SESSION['product2licence_p6'] ?>"
			<?php if ($_SESSION['item_product2_licence_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_production_p6-->
			<?php if ($_SESSION['item_product2_production_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2production">Production prévue :</label>
			<input id="product2production" name="product2production_p6" type="number" min=0 value="<?php echo $_SESSION['product2production_p6'] ?>"
			<?php if ($_SESSION['item_product2_production_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_qualite_p6-->
			<?php if ($_SESSION['item_product2_qualite_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2qualite">Qualité prévue :</label>
			<input id="product2qualite" name="product2qualite_p6" type="number" min=0 value="<?php echo $_SESSION['product2qualite_p6'] ?>"
			<?php if ($_SESSION['item_product2_qualite_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_soustraitance_p6-->
			<?php if ($_SESSION['item_product2_soustraitance_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2soustraitance">Sous-traitance prévue :</label>
			<input id="product2soustraitance" name="product2soustraitance_p6" type="number" min=0 value="<?php echo $_SESSION['product2soustraitance_p6'] ?>"
			<?php if ($_SESSION['item_product2_soustraitance_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_budgetcom_p6-->
			<?php if ($_SESSION['item_product2_budgetcom_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2communication">Budget communication (€) :</label>
			<input id="product2communication" name="product2communication_p6" type="number" min=0 value="<?php echo $_SESSION['product2communication_p6'] ?>"
			<?php if ($_SESSION['item_product2_budgetcom_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_commerciaux_p6-->
			<?php if ($_SESSION['item_product2_commerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product2commerciaux">Commerciaux spécialisés :</label>
			<input id="product2commerciaux" name="product2commerciaux_p6" type="number" min=0 value="<?php echo $_SESSION['product2commerciaux_p6'] ?>"
			<?php if ($_SESSION['item_product2_commerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_indicecommerciaux_p6-->
			<?php if ($_SESSION['item_product2_indicecommerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="product2indicefdv">Indice de salaire (commerciaux) :</label>
			<input id="product2indicefdv" name="product2indicefdv_p6" type="number" min=0 max=200 value="<?php echo $_SESSION['product2indicefdv_p6'] ?>"
			<?php if ($_SESSION['item_product2_indicecommerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product2_creditclient_p6-->
			<?php if ($_SESSION['item_product2_creditclient_p6'] == 'checked')	
				{
				include 'page_menu_9_product2_cc_on.php';
			 	}
				else 
				{
				include 'page_menu_9_product2_cc_off.php';
				}
			?>
			<!--item_product2_fdv_p6-->
			<div class="product2">
			<?php if ($_SESSION['item_product2_pdv_p6'] == 'checked')
				{
				include 'page_menu_9_product2_pdv_on.php';
				}
				else 
				{
				include 'page_menu_9_product2_pdv_off.php';
				}
			?>
			</div>
		</div>

		<div id="d6">
			<!--PARAMETRAGE PRODUIT 3-->	<div class="titre"><?php echo $_SESSION['product3'] ?></div>
			<form action="index.php" method="post" enctype="multipart/form-data">
			<!--item_product3_licence_p6-->
			<?php if ($_SESSION['item_product3_licence_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3licence">Achat de licence :</label>
			<input id="product3licence" name="product3licence_p6" type="number" min=0 value="<?php echo $_SESSION['product3licence_p6'] ?>"
			<?php if ($_SESSION['item_product3_licence_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_production_p6-->
			<?php if ($_SESSION['item_product3_production_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3production">Production prévue :</label>
			<input id="product3production" name="product3production_p6" type="number" min=0 value="<?php echo $_SESSION['product3production_p6'] ?>"
			<?php if ($_SESSION['item_product3_production_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_qualite_p6-->
			<?php if ($_SESSION['item_product3_qualite_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3qualite">Qualité prévue :</label>
			<input id="product3qualite" name="product3qualite_p6" type="number" min=0 value="<?php echo $_SESSION['product3qualite_p6'] ?>"
			<?php if ($_SESSION['item_product3_qualite_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_soustraitance_p6-->
			<?php if ($_SESSION['item_product3_soustraitance_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3soustraitance">Sous-traitance prévue :</label>
			<input id="product3soustraitance" name="product3soustraitance_p6" type="number" min=0 value="<?php echo $_SESSION['product3soustraitance_p6'] ?>"
			<?php if ($_SESSION['item_product3_soustraitance_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_budgetcom_p6-->
			<?php if ($_SESSION['item_product3_budgetcom_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3communication">Budget communication (€) :</label>
			<input id="product3communication" name="product3communication_p6" type="number" min=0 value="<?php echo $_SESSION['product3communication_p6'] ?>"
			<?php if ($_SESSION['item_product3_budgetcom_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_commerciaux_p6-->
			<?php if ($_SESSION['item_product3_commerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product3commerciaux">Commerciaux spécialisés :</label>
			<input id="product3commerciaux" name="product3commerciaux_p6" type="number" min=0 value="<?php echo $_SESSION['product3commerciaux_p6'] ?>"
			<?php if ($_SESSION['item_product3_commerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_indicecommerciaux_p6-->
			<?php if ($_SESSION['item_product3_indicecommerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="product3indicefdv">Indice de salaire (commerciaux) :</label>
			<input id="product3indicefdv" name="product3indicefdv_p6" type="number" min=0 max=200 value="<?php echo $_SESSION['product3indicefdv_p6'] ?>"
			<?php if ($_SESSION['item_product3_indicecommerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product3_creditclient_p6-->
			<?php if ($_SESSION['item_product3_creditclient_p6'] == 'checked')	
				{
				include 'page_menu_9_product3_cc_on.php';
			 	}
				else 
				{
				include 'page_menu_9_product3_cc_off.php';
				}
			?>
			<!--item_product3_fdv_p6-->
			<div class="product3">
			<?php if ($_SESSION['item_product3_pdv_p6'] == 'checked')
				{
				include 'page_menu_9_product3_pdv_on.php';
				}
				else 
				{
				include 'page_menu_9_product3_pdv_off.php';
				}
			?>
			</div>
		</div>

		<div id="d7">
			<!--PARAMETRAGE PRODUIT 4-->	<div class="titre"><?php echo $_SESSION['product4'] ?></div>
			<form action="index.php" method="post" enctype="multipart/form-data">
			<!--item_product4_licence_p6-->
			<?php if ($_SESSION['item_product4_licence_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4licence">Achat de licence :</label>
			<input id="product4licence" name="product4licence_p6" type="number" min=0 value="<?php echo $_SESSION['product4licence_p6'] ?>"
			<?php if ($_SESSION['item_product4_licence_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_production_p6-->
			<?php if ($_SESSION['item_product4_production_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4production">Production prévue :</label>
			<input id="product4production" name="product4production_p6" type="number" min=0 value="<?php echo $_SESSION['product4production_p6'] ?>"
			<?php if ($_SESSION['item_product4_production_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_qualite_p6-->
			<?php if ($_SESSION['item_product4_qualite_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4qualite">Qualité prévue :</label>
			<input id="product4qualite" name="product4qualite_p6" type="number" min=0 value="<?php echo $_SESSION['product4qualite_p6'] ?>"
			<?php if ($_SESSION['item_product4_qualite_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_soustraitance_p6-->
			<?php if ($_SESSION['item_product4_soustraitance_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4soustraitance">Sous-traitance prévue :</label>
			<input id="product4soustraitance" name="product4soustraitance_p6" type="number" min=0 value="<?php echo $_SESSION['product4soustraitance_p6'] ?>"
			<?php if ($_SESSION['item_product4_soustraitance_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_budgetcom_p6-->
			<?php if ($_SESSION['item_product4_budgetcom_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4communication">Budget communication (€) :</label>
			<input id="product4communication" name="product4communication_p6" type="number" min=0 value="<?php echo $_SESSION['product4communication_p6'] ?>"
			<?php if ($_SESSION['item_product4_budgetcom_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_commerciaux_p6-->
			<?php if ($_SESSION['item_product4_commerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product4commerciaux">Commerciaux spécialisés :</label>
			<input id="product4commerciaux" name="product4commerciaux_p6" type="number" min=0 value="<?php echo $_SESSION['product4commerciaux_p6'] ?>"
			<?php if ($_SESSION['item_product4_commerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_indicecommerciaux_p6-->
			<?php if ($_SESSION['item_product4_indicecommerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="product4indicefdv">Indice de salaire (commerciaux) :</label>
			<input id="product4indicefdv" name="product4indicefdv_p6" type="number" min=0 max=200 value="<?php echo $_SESSION['product4indicefdv_p6'] ?>"
			<?php if ($_SESSION['item_product4_indicecommerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product4_creditclient_p6-->
			<?php if ($_SESSION['item_product4_creditclient_p6'] == 'checked')	
				{
				include 'page_menu_9_product4_cc_on.php';
			 	}
				else 
				{
				include 'page_menu_9_product4_cc_off.php';
				}
			?>
			<!--item_product4_fdv_p6-->
			<div class="product4">
			<?php if ($_SESSION['item_product4_pdv_p6'] == 'checked')
				{
				include 'page_menu_9_product4_pdv_on.php';
				}
				else 
				{
				include 'page_menu_9_product4_pdv_off.php';
				}
			?>
			</div>
		</div>

		<div id="d8">
			<!--PARAMETRAGE PRODUIT 5-->	<div class="titre"><?php echo $_SESSION['product5'] ?></div>
			<form action="index.php" method="post" enctype="multipart/form-data">
			<!--item_product5_licence_p6-->
			<?php if ($_SESSION['item_product5_licence_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5licence">Achat de licence :</label>
			<input id="product5licence" name="product5licence_p6" type="number" min=0 value="<?php echo $_SESSION['product5licence_p6'] ?>"
			<?php if ($_SESSION['item_product5_licence_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_production_p6-->
			<?php if ($_SESSION['item_product5_production_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5production">Production prévue :</label>
			<input id="product5production" name="product5production_p6" type="number" min=0 value="<?php echo $_SESSION['product5production_p6'] ?>"
			<?php if ($_SESSION['item_product5_production_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_qualite_p6-->
			<?php if ($_SESSION['item_product5_qualite_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5qualite">Qualité prévue :</label>
			<input id="product5qualite" name="product5qualite_p6" type="number" min=0 value="<?php echo $_SESSION['product5qualite_p6'] ?>"
			<?php if ($_SESSION['item_product5_qualite_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_soustraitance_p6-->
			<?php if ($_SESSION['item_product5_soustraitance_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5soustraitance">Sous-traitance prévue :</label>
			<input id="product5soustraitance" name="product5soustraitance_p6" type="number" min=0 value="<?php echo $_SESSION['product5soustraitance_p6'] ?>"
			<?php if ($_SESSION['item_product5_soustraitance_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_budgetcom_p6-->
			<?php if ($_SESSION['item_product5_budgetcom_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5communication">Budget communication (€) :</label>
			<input id="product5communication" name="product5communication_p6" type="number" min=0 value="<?php echo $_SESSION['product5communication_p6'] ?>"
			<?php if ($_SESSION['item_product5_budgetcom_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_commerciaux_p6-->
			<?php if ($_SESSION['item_product5_commerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }	else	{ echo '<div class="lock">' ; } ?>
			<label for="product5commerciaux">Commerciaux spécialisés :</label>
			<input id="product5commerciaux" name="product5commerciaux_p6" type="number" min=0 value="<?php echo $_SESSION['product5commerciaux_p6'] ?>"
			<?php if ($_SESSION['item_product5_commerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_indicecommerciaux_p6-->
			<?php if ($_SESSION['item_product5_indicecommerciaux_p6'] == 'checked')	{ echo '<div class="item">' ; }
			else { echo '<div class="lock">' ; } ?>
			<label for="product5indicefdv">Indice de salaire (commerciaux) :</label>
			<input id="product5indicefdv" name="product5indicefdv_p6" type="number" min=0 max=200 value="<?php echo $_SESSION['product5indicefdv_p6'] ?>"
			<?php if ($_SESSION['item_product5_indicecommerciaux_p6'] == 'checked')	{ echo '' ; }	else	{ echo  'readonly' ; } ?>
			></div>
			<!--item_product5_creditclient_p6-->
			<?php if ($_SESSION['item_product5_creditclient_p6'] == 'checked')	
				{
				include 'page_menu_9_product5_cc_on.php';
			 	}
				else 
				{
				include 'page_menu_9_product5_cc_off.php';
				}
			?>
			<!--item_product5_fdv_p6-->
			<div class="product5">
			<?php if ($_SESSION['item_product5_pdv_p6'] == 'checked')
				{
				include 'page_menu_9_product5_pdv_on.php';
				}
				else 
				{
				include 'page_menu_9_product5_pdv_off.php';
				}
			?>
			</div>
		</div>
	</div>


<div class="submit_decision">	
	<input type=hidden name="menu" value=9>
	<input type=hidden name="refreshneuf" value=1>
	<input type="submit" value="Envoyer la décision 6"/>
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

<script type="text/javascript">
	var slider1 = document.getElementById("pdvproduct1barre");
	var output1 = document.getElementById("pdvproduct1result");
	output1.innerHTML = slider1.value; // Display the default slider value
	// Update the current slider value (each time you drag the slider handle)
	slider1.oninput = function() {
	  output1.innerHTML = this.value;
	}
</script>

<script type="text/javascript">
	var slider2 = document.getElementById("pdvproduct2barre");
	var output2 = document.getElementById("pdvproduct2result");
	output2.innerHTML = slider2.value; // Display the default slider value
	// Update the current slider value (each time you drag the slider handle)
	slider2.oninput = function() {
	  output2.innerHTML = this.value;
	}
</script>

<script type="text/javascript">
	var slider3 = document.getElementById("pdvproduct3barre");
	var output3 = document.getElementById("pdvproduct3result");
	output3.innerHTML = slider3.value; // Display the default slider value
	// Update the current slider value (each time you drag the slider handle)
	slider3.oninput = function() {
	  output3.innerHTML = this.value;
	}
</script>

<script type="text/javascript">
	var slider4 = document.getElementById("pdvproduct4barre");
	var output4 = document.getElementById("pdvproduct4result");
	output4.innerHTML = slider4.value; // Display the default slider value
	// Update the current slider value (each time you drag the slider handle)
	slider4.oninput = function() {
	  output4.innerHTML = this.value;
	}
</script>

<script type="text/javascript">
	var slider5 = document.getElementById("pdvproduct5barre");
	var output5 = document.getElementById("pdvproduct5result");
	output5.innerHTML = slider5.value; // Display the default slider value
	// Update the current slider value (each time you drag the slider handle)
	slider5.oninput = function() {
	  output5.innerHTML = this.value;
	}
</script>