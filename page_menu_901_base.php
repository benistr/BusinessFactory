


<div class="box">
    <div class="box_menu">
      <button onclick="b(0)">Préparation des Critéres </button>
    </div>

	<div class="box_content">
	    <div id="d1">
    		<div class="titre">Parametres</div>
    		<form action="index.php" method="post" enctype="multipart/form-data">

    		<div class="divTable comicGreen">
    			<div class="divTableHeading">
    				<!-- Premier ligne du tableau -->
    				<div class="divTableRow">
    					<div class="divTableHead">X</div><div class="divTableHead">X</div><div class="divTableHead">X</div>
    					<div class="divTableHead">X</div><div class="divTableHead">X</div>
    				</div>
    			</div>

    			<div class="divTableBody">
    				<!-- PREMIERE LIGNE FINANCE EQUIP ETC -->
    				<div class="divTableRow">
    					<div class="divTableCell"><div class="tablecentre">FINANCE</div>
	    					<div class="divTableRow"><div class="divTableCell">Dividendes</div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p1"  <?php echo $_SESSION['item_dividendes_p1'] ?> value="checked" name="item_dividendes_p1"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p2"  <?php echo $_SESSION['item_dividendes_p2'] ?> value="checked" name="item_dividendes_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p3"  <?php echo $_SESSION['item_dividendes_p3'] ?> value="checked" name="item_dividendes_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p4"  <?php echo $_SESSION['item_dividendes_p4'] ?> value="checked" name="item_dividendes_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p5"  <?php echo $_SESSION['item_dividendes_p5'] ?> value="checked" name="item_dividendes_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_dividendes_p6"  <?php echo $_SESSION['item_dividendes_p6'] ?> value="checked" name="item_dividendes_p6"/></div>
		    				</div>
		    				<div class="divTableRow"><div class="divTableCell">Emprunt</div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p1"  <?php echo $_SESSION['item_emprunt_p1'] ?> value="checked" name="item_emprunt_p1"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p2"  <?php echo $_SESSION['item_emprunt_p2'] ?> value="checked" name="item_emprunt_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p3"  <?php echo $_SESSION['item_emprunt_p3'] ?> value="checked" name="item_emprunt_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p4"  <?php echo $_SESSION['item_emprunt_p4'] ?> value="checked" name="item_emprunt_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p5"  <?php echo $_SESSION['item_emprunt_p5'] ?> value="checked" name="item_emprunt_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_emprunt_p6"  <?php echo $_SESSION['item_emprunt_p6'] ?> value="checked" name="item_emprunt_p6"/></div>
		    				</div>
    					</div>    			
    					<div class="divTableCell"><div class="tablecentre">EQUIPEMENT</div>
	    					<div class="divTableRow"><div class="divTableCell">"<?php echo $_SESSION['machine1'] ?>"</div>
	    						<div class="divTableCell"><input type="checkbox" id="item_machine1_p1"  <?php echo $_SESSION['item_machine1_p1'] ?> value="checked" name="item_machine1_p1"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine1_p2"  <?php echo $_SESSION['item_machine1_p2'] ?> value="checked" name="item_machine1_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine1_p3"  <?php echo $_SESSION['item_machine1_p3'] ?> value="checked" name="item_machine1_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine1_p4"  <?php echo $_SESSION['item_machine1_p4'] ?> value="checked" name="item_machine1_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine1_p5"  <?php echo $_SESSION['item_machine1_p5'] ?> value="checked" name="item_machine1_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine1_p6"  <?php echo $_SESSION['item_machine1_p6'] ?> value="checked" name="item_machine1_p6"/></div>
		    				</div>
	    					<div class="divTableRow"><div class="divTableCell">"<?php echo $_SESSION['machine2'] ?>"</div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p1"  <?php echo $_SESSION['item_machine2_p1'] ?> value="checked" name="item_machine2_p1"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p2"  <?php echo $_SESSION['item_machine2_p2'] ?> value="checked" name="item_machine2_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p3"  <?php echo $_SESSION['item_machine2_p3'] ?> value="checked" name="item_machine2_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p4"  <?php echo $_SESSION['item_machine2_p4'] ?> value="checked" name="item_machine2_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p5"  <?php echo $_SESSION['item_machine2_p5'] ?> value="checked" name="item_machine2_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine2_p6"  <?php echo $_SESSION['item_machine2_p6'] ?> value="checked" name="item_machine2_p6"/></div>
	    					</div>
	    					<div class="divTableRow"><div class="divTableCell">"<?php echo $_SESSION['machine3'] ?>"</div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p1"  <?php echo $_SESSION['item_machine3_p1'] ?> value="checked" name="item_machine3_p1"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p2"  <?php echo $_SESSION['item_machine3_p2'] ?> value="checked" name="item_machine3_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p3"  <?php echo $_SESSION['item_machine3_p3'] ?> value="checked" name="item_machine3_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p4"  <?php echo $_SESSION['item_machine3_p4'] ?> value="checked" name="item_machine3_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p5"  <?php echo $_SESSION['item_machine3_p5'] ?> value="checked" name="item_machine3_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_machine3_p6"  <?php echo $_SESSION['item_machine3_p6'] ?> value="checked" name="item_machine3_p6"/></div>
	    					</div>
	    					<div class="divTableRow"><div class="divTableCell">Budget Maintenance</div>
	    						<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p1"  <?php echo $_SESSION['item_budgetmaintenance_p1'] ?> value="checked" name="item_budgetmaintenance_p1"/></div>
	    						<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p2"  <?php echo $_SESSION['item_budgetmaintenance_p2'] ?> value="checked" name="item_budgetmaintenance_p2"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p3"  <?php echo $_SESSION['item_budgetmaintenance_p3'] ?> value="checked" name="item_budgetmaintenance_p3"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p4"  <?php echo $_SESSION['item_budgetmaintenance_p4'] ?> value="checked" name="item_budgetmaintenance_p4"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p5"  <?php echo $_SESSION['item_budgetmaintenance_p5'] ?> value="checked" name="item_budgetmaintenance_p5"/></div>
		    					<div class="divTableCell"><input type="checkbox" id="item_budgetmaintenance_p6"  <?php echo $_SESSION['item_budgetmaintenance_p6'] ?> value="checked" name="item_budgetmaintenance_p6"/></div>
	    					</div>
		    			</div>
						<div class="divTableCell"><div class="tablecentre">PERSONNEL</div>
    						<div class="divTableRow"><div class="divTableCell">Recrutement Ouvrier</div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p1"  <?php echo $_SESSION['item_recrutementouvrier_p1'] ?> value="checked" name="item_recrutementouvrier_p1"/></div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p2"  <?php echo $_SESSION['item_recrutementouvrier_p2'] ?> value="checked" name="item_recrutementouvrier_p2"/></div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p3"  <?php echo $_SESSION['item_recrutementouvrier_p3'] ?> value="checked" name="item_recrutementouvrier_p3"/></div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p4"  <?php echo $_SESSION['item_recrutementouvrier_p4'] ?> value="checked" name="item_recrutementouvrier_p4"/></div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p5"  <?php echo $_SESSION['item_recrutementouvrier_p5'] ?> value="checked" name="item_recrutementouvrier_p5"/></div>
	    						<div class="divTableCell">
	    							<input type="checkbox" id="item_recrutementouvrier_p6"  <?php echo $_SESSION['item_recrutementouvrier_p6'] ?> value="checked" name="item_recrutementouvrier_p6"/></div>
    						</div>
							<div class="divTableRow"><div class="divTableCell">Licenciement Ouvrier</div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p1"  <?php echo $_SESSION['item_licenciementouvrier_p1'] ?> value="checked" name="item_licenciementouvrier_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p2"  <?php echo $_SESSION['item_licenciementouvrier_p2'] ?> value="checked" name="item_licenciementouvrier_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p3"  <?php echo $_SESSION['item_licenciementouvrier_p3'] ?> value="checked" name="item_licenciementouvrier_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p4"  <?php echo $_SESSION['item_licenciementouvrier_p4'] ?> value="checked" name="item_licenciementouvrier_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p5"  <?php echo $_SESSION['item_licenciementouvrier_p5'] ?> value="checked" name="item_licenciementouvrier_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_licenciementouvrier_p6"  <?php echo $_SESSION['item_licenciementouvrier_p6'] ?> value="checked" name="item_licenciementouvrier_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Ouvrier</div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p1"  <?php echo $_SESSION['item_indiceouvrier_p1'] ?> value="checked" name="item_indiceouvrier_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p2"  <?php echo $_SESSION['item_indiceouvrier_p2'] ?> value="checked" name="item_indiceouvrier_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p3"  <?php echo $_SESSION['item_indiceouvrier_p3'] ?> value="checked" name="item_indiceouvrier_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p4"  <?php echo $_SESSION['item_indiceouvrier_p4'] ?> value="checked" name="item_indiceouvrier_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p5"  <?php echo $_SESSION['item_indiceouvrier_p5'] ?> value="checked" name="item_indiceouvrier_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_indiceouvrier_p6"  <?php echo $_SESSION['item_indiceouvrier_p6'] ?> value="checked" name="item_indiceouvrier_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Budget Social</div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p1"  <?php echo $_SESSION['item_budgetsocial_p1'] ?> value="checked" name="item_budgetsocial_p1"/></div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p2"  <?php echo $_SESSION['item_budgetsocial_p2'] ?> value="checked" name="item_budgetsocial_p2"/></div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p3"  <?php echo $_SESSION['item_budgetsocial_p3'] ?> value="checked" name="item_budgetsocial_p3"/></div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p4"  <?php echo $_SESSION['item_budgetsocial_p4'] ?> value="checked" name="item_budgetsocial_p4"/></div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p5"  <?php echo $_SESSION['item_budgetsocial_p5'] ?> value="checked" name="item_budgetsocial_p5"/></div>
									<div class="divTableCell"><input type="checkbox" id="item_budgetsocial_p6"  <?php echo $_SESSION['item_budgetsocial_p6'] ?> value="checked" name="item_budgetsocial_p6"/></div>
							</div>
						</div>
					</div>
					<!-- DEUXIEME LIGNE = PRODUITS -->
					<div class="divTableRow">
						<div class="divTableCell"><div class="tablecentre"><?php echo $_SESSION['product1'] ?></div>
							<div class="divTableRow"><div class="divTableCell">Licence</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p1"  <?php echo $_SESSION['item_product1_licence_p1'] ?> value="checked" name="item_product1_licence_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p2"  <?php echo $_SESSION['item_product1_licence_p2'] ?> value="checked" name="item_product1_licence_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p3"  <?php echo $_SESSION['item_product1_licence_p3'] ?> value="checked" name="item_product1_licence_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p4"  <?php echo $_SESSION['item_product1_licence_p4'] ?> value="checked" name="item_product1_licence_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p5"  <?php echo $_SESSION['item_product1_licence_p5'] ?> value="checked" name="item_product1_licence_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_licence_p6"  <?php echo $_SESSION['item_product1_licence_p6'] ?> value="checked" name="item_product1_licence_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Production</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p1"  <?php echo $_SESSION['item_product1_production_p1'] ?> value="checked" name="item_product1_production_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p2"  <?php echo $_SESSION['item_product1_production_p2'] ?> value="checked" name="item_product1_production_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p3"  <?php echo $_SESSION['item_product1_production_p3'] ?> value="checked" name="item_product1_production_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p4"  <?php echo $_SESSION['item_product1_production_p4'] ?> value="checked" name="item_product1_production_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p5"  <?php echo $_SESSION['item_product1_production_p5'] ?> value="checked" name="item_product1_production_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_production_p6"  <?php echo $_SESSION['item_product1_production_p6'] ?> value="checked" name="item_product1_production_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Qualite</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p1"  <?php echo $_SESSION['item_product1_qualite_p1'] ?> value="checked" name="item_product1_qualite_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p2"  <?php echo $_SESSION['item_product1_qualite_p2'] ?> value="checked" name="item_product1_qualite_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p3"  <?php echo $_SESSION['item_product1_qualite_p3'] ?> value="checked" name="item_product1_qualite_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p4"  <?php echo $_SESSION['item_product1_qualite_p4'] ?> value="checked" name="item_product1_qualite_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p5"  <?php echo $_SESSION['item_product1_qualite_p5'] ?> value="checked" name="item_product1_qualite_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_qualite_p6"  <?php echo $_SESSION['item_product1_qualite_p6'] ?> value="checked" name="item_product1_qualite_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Ss-Traitance</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p1"  <?php echo $_SESSION['item_product1_soustraitance_p1'] ?> value="checked" name="item_product1_soustraitance_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p2"  <?php echo $_SESSION['item_product1_soustraitance_p2'] ?> value="checked" name="item_product1_soustraitance_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p3"  <?php echo $_SESSION['item_product1_soustraitance_p3'] ?> value="checked" name="item_product1_soustraitance_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p4"  <?php echo $_SESSION['item_product1_soustraitance_p4'] ?> value="checked" name="item_product1_soustraitance_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p5"  <?php echo $_SESSION['item_product1_soustraitance_p5'] ?> value="checked" name="item_product1_soustraitance_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_soustraitance_p6"  <?php echo $_SESSION['item_product1_soustraitance_p6'] ?> value="checked" name="item_product1_soustraitance_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">BudgetCom</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p1"  <?php echo $_SESSION['item_product1_budgetcom_p1'] ?> value="checked" name="item_product1_budgetcom_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p2"  <?php echo $_SESSION['item_product1_budgetcom_p2'] ?> value="checked" name="item_product1_budgetcom_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p3"  <?php echo $_SESSION['item_product1_budgetcom_p3'] ?> value="checked" name="item_product1_budgetcom_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p4"  <?php echo $_SESSION['item_product1_budgetcom_p4'] ?> value="checked" name="item_product1_budgetcom_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p5"  <?php echo $_SESSION['item_product1_budgetcom_p5'] ?> value="checked" name="item_product1_budgetcom_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_budgetcom_p6"  <?php echo $_SESSION['item_product1_budgetcom_p6'] ?> value="checked" name="item_product1_budgetcom_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p1"  <?php echo $_SESSION['item_product1_commerciaux_p1'] ?> value="checked" name="item_product1_commerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p2"  <?php echo $_SESSION['item_product1_commerciaux_p2'] ?> value="checked" name="item_product1_commerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p3"  <?php echo $_SESSION['item_product1_commerciaux_p3'] ?> value="checked" name="item_product1_commerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p4"  <?php echo $_SESSION['item_product1_commerciaux_p4'] ?> value="checked" name="item_product1_commerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p5"  <?php echo $_SESSION['item_product1_commerciaux_p5'] ?> value="checked" name="item_product1_commerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_commerciaux_p6"  <?php echo $_SESSION['item_product1_commerciaux_p6'] ?> value="checked" name="item_product1_commerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p1"  <?php echo $_SESSION['item_product1_indicecommerciaux_p1'] ?> value="checked" name="item_product1_indicecommerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p2"  <?php echo $_SESSION['item_product1_indicecommerciaux_p2'] ?> value="checked" name="item_product1_indicecommerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p3"  <?php echo $_SESSION['item_product1_indicecommerciaux_p3'] ?> value="checked" name="item_product1_indicecommerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p4"  <?php echo $_SESSION['item_product1_indicecommerciaux_p4'] ?> value="checked" name="item_product1_indicecommerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p5"  <?php echo $_SESSION['item_product1_indicecommerciaux_p5'] ?> value="checked" name="item_product1_indicecommerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_indicecommerciaux_p6"  <?php echo $_SESSION['item_product1_indicecommerciaux_p6'] ?> value="checked" name="item_product1_indicecommerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Credit Client</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p1"  <?php echo $_SESSION['item_product1_creditclient_p1'] ?> value="checked" name="item_product1_creditclient_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p2"  <?php echo $_SESSION['item_product1_creditclient_p2'] ?> value="checked" name="item_product1_creditclient_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p3"  <?php echo $_SESSION['item_product1_creditclient_p3'] ?> value="checked" name="item_product1_creditclient_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p4"  <?php echo $_SESSION['item_product1_creditclient_p4'] ?> value="checked" name="item_product1_creditclient_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p5"  <?php echo $_SESSION['item_product1_creditclient_p5'] ?> value="checked" name="item_product1_creditclient_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_creditclient_p6"  <?php echo $_SESSION['item_product1_creditclient_p6'] ?> value="checked" name="item_product1_creditclient_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Prix de vente</div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p1"  <?php echo $_SESSION['item_product1_pdv_p1'] ?> value="checked" name="item_product1_pdv_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p2"  <?php echo $_SESSION['item_product1_pdv_p2'] ?> value="checked" name="item_product1_pdv_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p3"  <?php echo $_SESSION['item_product1_pdv_p3'] ?> value="checked" name="item_product1_pdv_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p4"  <?php echo $_SESSION['item_product1_pdv_p4'] ?> value="checked" name="item_product1_pdv_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p5"  <?php echo $_SESSION['item_product1_pdv_p5'] ?> value="checked" name="item_product1_pdv_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product1_pdv_p6"  <?php echo $_SESSION['item_product1_pdv_p6'] ?> value="checked" name="item_product1_pdv_p6"/></div>
							</div>
						</div>
						<div class="divTableCell"><div class="tablecentre"><?php echo $_SESSION['product2'] ?></div>
							<div class="divTableRow"><div class="divTableCell">Licence</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p1"  <?php echo $_SESSION['item_product2_licence_p1'] ?> value="checked" name="item_product2_licence_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p2"  <?php echo $_SESSION['item_product2_licence_p2'] ?> value="checked" name="item_product2_licence_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p3"  <?php echo $_SESSION['item_product2_licence_p3'] ?> value="checked" name="item_product2_licence_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p4"  <?php echo $_SESSION['item_product2_licence_p4'] ?> value="checked" name="item_product2_licence_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p5"  <?php echo $_SESSION['item_product2_licence_p5'] ?> value="checked" name="item_product2_licence_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_licence_p6"  <?php echo $_SESSION['item_product2_licence_p6'] ?> value="checked" name="item_product2_licence_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Production</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p1"  <?php echo $_SESSION['item_product2_production_p1'] ?> value="checked" name="item_product2_production_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p2"  <?php echo $_SESSION['item_product2_production_p2'] ?> value="checked" name="item_product2_production_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p3"  <?php echo $_SESSION['item_product2_production_p3'] ?> value="checked" name="item_product2_production_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p4"  <?php echo $_SESSION['item_product2_production_p4'] ?> value="checked" name="item_product2_production_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p5"  <?php echo $_SESSION['item_product2_production_p5'] ?> value="checked" name="item_product2_production_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_production_p6"  <?php echo $_SESSION['item_product2_production_p6'] ?> value="checked" name="item_product2_production_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Qualite</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p1"  <?php echo $_SESSION['item_product2_qualite_p1'] ?> value="checked" name="item_product2_qualite_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p2"  <?php echo $_SESSION['item_product2_qualite_p2'] ?> value="checked" name="item_product2_qualite_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p3"  <?php echo $_SESSION['item_product2_qualite_p3'] ?> value="checked" name="item_product2_qualite_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p4"  <?php echo $_SESSION['item_product2_qualite_p4'] ?> value="checked" name="item_product2_qualite_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p5"  <?php echo $_SESSION['item_product2_qualite_p5'] ?> value="checked" name="item_product2_qualite_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_qualite_p6"  <?php echo $_SESSION['item_product2_qualite_p6'] ?> value="checked" name="item_product2_qualite_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Ss-Traitance</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p1"  <?php echo $_SESSION['item_product2_soustraitance_p1'] ?> value="checked" name="item_product2_soustraitance_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p2"  <?php echo $_SESSION['item_product2_soustraitance_p2'] ?> value="checked" name="item_product2_soustraitance_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p3"  <?php echo $_SESSION['item_product2_soustraitance_p3'] ?> value="checked" name="item_product2_soustraitance_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p4"  <?php echo $_SESSION['item_product2_soustraitance_p4'] ?> value="checked" name="item_product2_soustraitance_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p5"  <?php echo $_SESSION['item_product2_soustraitance_p5'] ?> value="checked" name="item_product2_soustraitance_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_soustraitance_p6"  <?php echo $_SESSION['item_product2_soustraitance_p6'] ?> value="checked" name="item_product2_soustraitance_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Budget Com</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p1"  <?php echo $_SESSION['item_product2_budgetcom_p1'] ?> value="checked" name="item_product2_budgetcom_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p2"  <?php echo $_SESSION['item_product2_budgetcom_p2'] ?> value="checked" name="item_product2_budgetcom_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p3"  <?php echo $_SESSION['item_product2_budgetcom_p3'] ?> value="checked" name="item_product2_budgetcom_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p4"  <?php echo $_SESSION['item_product2_budgetcom_p4'] ?> value="checked" name="item_product2_budgetcom_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p5"  <?php echo $_SESSION['item_product2_budgetcom_p5'] ?> value="checked" name="item_product2_budgetcom_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_budgetcom_p6"  <?php echo $_SESSION['item_product2_budgetcom_p6'] ?> value="checked" name="item_product2_budgetcom_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p1"  <?php echo $_SESSION['item_product2_commerciaux_p1'] ?> value="checked" name="item_product2_commerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p2"  <?php echo $_SESSION['item_product2_commerciaux_p2'] ?> value="checked" name="item_product2_commerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p3"  <?php echo $_SESSION['item_product2_commerciaux_p3'] ?> value="checked" name="item_product2_commerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p4"  <?php echo $_SESSION['item_product2_commerciaux_p4'] ?> value="checked" name="item_product2_commerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p5"  <?php echo $_SESSION['item_product2_commerciaux_p5'] ?> value="checked" name="item_product2_commerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_commerciaux_p6"  <?php echo $_SESSION['item_product2_commerciaux_p6'] ?> value="checked" name="item_product2_commerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p1"  <?php echo $_SESSION['item_product2_indicecommerciaux_p1'] ?> value="checked" name="item_product2_indicecommerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p2"  <?php echo $_SESSION['item_product2_indicecommerciaux_p2'] ?> value="checked" name="item_product2_indicecommerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p3"  <?php echo $_SESSION['item_product2_indicecommerciaux_p3'] ?> value="checked" name="item_product2_indicecommerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p4"  <?php echo $_SESSION['item_product2_indicecommerciaux_p4'] ?> value="checked" name="item_product2_indicecommerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p5"  <?php echo $_SESSION['item_product2_indicecommerciaux_p5'] ?> value="checked" name="item_product2_indicecommerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_indicecommerciaux_p6"  <?php echo $_SESSION['item_product2_indicecommerciaux_p6'] ?> value="checked" name="item_product2_indicecommerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Credit Client</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p1"  <?php echo $_SESSION['item_product2_creditclient_p1'] ?> value="checked" name="item_product2_creditclient_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p2"  <?php echo $_SESSION['item_product2_creditclient_p2'] ?> value="checked" name="item_product2_creditclient_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p3"  <?php echo $_SESSION['item_product2_creditclient_p3'] ?> value="checked" name="item_product2_creditclient_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p4"  <?php echo $_SESSION['item_product2_creditclient_p4'] ?> value="checked" name="item_product2_creditclient_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p5"  <?php echo $_SESSION['item_product2_creditclient_p5'] ?> value="checked" name="item_product2_creditclient_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_creditclient_p6"  <?php echo $_SESSION['item_product2_creditclient_p6'] ?> value="checked" name="item_product2_creditclient_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Prix de vente</div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p1"  <?php echo $_SESSION['item_product2_pdv_p1'] ?> value="checked" name="item_product2_pdv_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p2"  <?php echo $_SESSION['item_product2_pdv_p2'] ?> value="checked" name="item_product2_pdv_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p3"  <?php echo $_SESSION['item_product2_pdv_p3'] ?> value="checked" name="item_product2_pdv_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p4"  <?php echo $_SESSION['item_product2_pdv_p4'] ?> value="checked" name="item_product2_pdv_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p5"  <?php echo $_SESSION['item_product2_pdv_p5'] ?> value="checked" name="item_product2_pdv_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product2_pdv_p6"  <?php echo $_SESSION['item_product2_pdv_p6'] ?> value="checked" name="item_product2_pdv_p6"/></div>
							</div>
						</div>
						<div class="divTableCell"><div class="tablecentre"><?php echo $_SESSION['product3'] ?></div>
							<div class="divTableRow"><div class="divTableCell">Licence</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p1"  <?php echo $_SESSION['item_product3_licence_p1'] ?> value="checked" name="item_product3_licence_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p2"  <?php echo $_SESSION['item_product3_licence_p2'] ?> value="checked" name="item_product3_licence_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p3"  <?php echo $_SESSION['item_product3_licence_p3'] ?> value="checked" name="item_product3_licence_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p4"  <?php echo $_SESSION['item_product3_licence_p4'] ?> value="checked" name="item_product3_licence_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p5"  <?php echo $_SESSION['item_product3_licence_p5'] ?> value="checked" name="item_product3_licence_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_licence_p6"  <?php echo $_SESSION['item_product3_licence_p6'] ?> value="checked" name="item_product3_licence_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Production</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p1"  <?php echo $_SESSION['item_product3_production_p1'] ?> value="checked" name="item_product3_production_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p2"  <?php echo $_SESSION['item_product3_production_p2'] ?> value="checked" name="item_product3_production_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p3"  <?php echo $_SESSION['item_product3_production_p3'] ?> value="checked" name="item_product3_production_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p4"  <?php echo $_SESSION['item_product3_production_p4'] ?> value="checked" name="item_product3_production_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p5"  <?php echo $_SESSION['item_product3_production_p5'] ?> value="checked" name="item_product3_production_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_production_p6"  <?php echo $_SESSION['item_product3_production_p6'] ?> value="checked" name="item_product3_production_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Qualite</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p1"  <?php echo $_SESSION['item_product3_qualite_p1'] ?> value="checked" name="item_product3_qualite_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p2"  <?php echo $_SESSION['item_product3_qualite_p2'] ?> value="checked" name="item_product3_qualite_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p3"  <?php echo $_SESSION['item_product3_qualite_p3'] ?> value="checked" name="item_product3_qualite_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p4"  <?php echo $_SESSION['item_product3_qualite_p4'] ?> value="checked" name="item_product3_qualite_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p5"  <?php echo $_SESSION['item_product3_qualite_p5'] ?> value="checked" name="item_product3_qualite_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_qualite_p6"  <?php echo $_SESSION['item_product3_qualite_p6'] ?> value="checked" name="item_product3_qualite_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Ss-Traitance</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p1"  <?php echo $_SESSION['item_product3_soustraitance_p1'] ?> value="checked" name="item_product3_soustraitance_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p2"  <?php echo $_SESSION['item_product3_soustraitance_p2'] ?> value="checked" name="item_product3_soustraitance_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p3"  <?php echo $_SESSION['item_product3_soustraitance_p3'] ?> value="checked" name="item_product3_soustraitance_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p4"  <?php echo $_SESSION['item_product3_soustraitance_p4'] ?> value="checked" name="item_product3_soustraitance_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p5"  <?php echo $_SESSION['item_product3_soustraitance_p5'] ?> value="checked" name="item_product3_soustraitance_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_soustraitance_p6"  <?php echo $_SESSION['item_product3_soustraitance_p6'] ?> value="checked" name="item_product3_soustraitance_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Budget Com</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p1"  <?php echo $_SESSION['item_product3_budgetcom_p1'] ?> value="checked" name="item_product3_budgetcom_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p2"  <?php echo $_SESSION['item_product3_budgetcom_p2'] ?> value="checked" name="item_product3_budgetcom_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p3"  <?php echo $_SESSION['item_product3_budgetcom_p3'] ?> value="checked" name="item_product3_budgetcom_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p4"  <?php echo $_SESSION['item_product3_budgetcom_p4'] ?> value="checked" name="item_product3_budgetcom_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p5"  <?php echo $_SESSION['item_product3_budgetcom_p5'] ?> value="checked" name="item_product3_budgetcom_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_budgetcom_p6"  <?php echo $_SESSION['item_product3_budgetcom_p6'] ?> value="checked" name="item_product3_budgetcom_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p1"  <?php echo $_SESSION['item_product3_commerciaux_p1'] ?> value="checked" name="item_product3_commerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p2"  <?php echo $_SESSION['item_product3_commerciaux_p2'] ?> value="checked" name="item_product3_commerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p3"  <?php echo $_SESSION['item_product3_commerciaux_p3'] ?> value="checked" name="item_product3_commerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p4"  <?php echo $_SESSION['item_product3_commerciaux_p4'] ?> value="checked" name="item_product3_commerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p5"  <?php echo $_SESSION['item_product3_commerciaux_p5'] ?> value="checked" name="item_product3_commerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_commerciaux_p6"  <?php echo $_SESSION['item_product3_commerciaux_p6'] ?> value="checked" name="item_product3_commerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p1"  <?php echo $_SESSION['item_product3_indicecommerciaux_p1'] ?> value="checked" name="item_product3_indicecommerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p2"  <?php echo $_SESSION['item_product3_indicecommerciaux_p2'] ?> value="checked" name="item_product3_indicecommerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p3"  <?php echo $_SESSION['item_product3_indicecommerciaux_p3'] ?> value="checked" name="item_product3_indicecommerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p4"  <?php echo $_SESSION['item_product3_indicecommerciaux_p4'] ?> value="checked" name="item_product3_indicecommerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p5"  <?php echo $_SESSION['item_product3_indicecommerciaux_p5'] ?> value="checked" name="item_product3_indicecommerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_indicecommerciaux_p6"  <?php echo $_SESSION['item_product3_indicecommerciaux_p6'] ?> value="checked" name="item_product3_indicecommerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Credit Client</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p1"  <?php echo $_SESSION['item_product3_creditclient_p1'] ?> value="checked" name="item_product3_creditclient_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p2"  <?php echo $_SESSION['item_product3_creditclient_p2'] ?> value="checked" name="item_product3_creditclient_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p3"  <?php echo $_SESSION['item_product3_creditclient_p3'] ?> value="checked" name="item_product3_creditclient_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p4"  <?php echo $_SESSION['item_product3_creditclient_p4'] ?> value="checked" name="item_product3_creditclient_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p5"  <?php echo $_SESSION['item_product3_creditclient_p5'] ?> value="checked" name="item_product3_creditclient_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_creditclient_p6"  <?php echo $_SESSION['item_product3_creditclient_p6'] ?> value="checked" name="item_product3_creditclient_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Prix de vente</div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p1"  <?php echo $_SESSION['item_product3_pdv_p1'] ?> value="checked" name="item_product3_pdv_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p2"  <?php echo $_SESSION['item_product3_pdv_p2'] ?> value="checked" name="item_product3_pdv_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p3"  <?php echo $_SESSION['item_product3_pdv_p3'] ?> value="checked" name="item_product3_pdv_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p4"  <?php echo $_SESSION['item_product3_pdv_p4'] ?> value="checked" name="item_product3_pdv_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p5"  <?php echo $_SESSION['item_product3_pdv_p5'] ?> value="checked" name="item_product3_pdv_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product3_pdv_p6"  <?php echo $_SESSION['item_product3_pdv_p6'] ?> value="checked" name="item_product3_pdv_p6"/></div>
							</div>
						</div>
						<div class="divTableCell"><div class="tablecentre"><?php echo $_SESSION['product4'] ?></div>
							<div class="divTableRow"><div class="divTableCell">Licence</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p1"  <?php echo $_SESSION['item_product4_licence_p1'] ?> value="checked" name="item_product4_licence_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p2"  <?php echo $_SESSION['item_product4_licence_p2'] ?> value="checked" name="item_product4_licence_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p3"  <?php echo $_SESSION['item_product4_licence_p3'] ?> value="checked" name="item_product4_licence_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p4"  <?php echo $_SESSION['item_product4_licence_p4'] ?> value="checked" name="item_product4_licence_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p5"  <?php echo $_SESSION['item_product4_licence_p5'] ?> value="checked" name="item_product4_licence_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_licence_p6"  <?php echo $_SESSION['item_product4_licence_p6'] ?> value="checked" name="item_product4_licence_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Production</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p1"  <?php echo $_SESSION['item_product4_production_p1'] ?> value="checked" name="item_product4_production_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p2"  <?php echo $_SESSION['item_product4_production_p2'] ?> value="checked" name="item_product4_production_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p3"  <?php echo $_SESSION['item_product4_production_p3'] ?> value="checked" name="item_product4_production_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p4"  <?php echo $_SESSION['item_product4_production_p4'] ?> value="checked" name="item_product4_production_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p5"  <?php echo $_SESSION['item_product4_production_p5'] ?> value="checked" name="item_product4_production_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_production_p6"  <?php echo $_SESSION['item_product4_production_p6'] ?> value="checked" name="item_product4_production_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Qualite</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p1"  <?php echo $_SESSION['item_product4_qualite_p1'] ?> value="checked" name="item_product4_qualite_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p2"  <?php echo $_SESSION['item_product4_qualite_p2'] ?> value="checked" name="item_product4_qualite_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p3"  <?php echo $_SESSION['item_product4_qualite_p3'] ?> value="checked" name="item_product4_qualite_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p4"  <?php echo $_SESSION['item_product4_qualite_p4'] ?> value="checked" name="item_product4_qualite_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p5"  <?php echo $_SESSION['item_product4_qualite_p5'] ?> value="checked" name="item_product4_qualite_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_qualite_p6"  <?php echo $_SESSION['item_product4_qualite_p6'] ?> value="checked" name="item_product4_qualite_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Ss-Traitance</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p1"  <?php echo $_SESSION['item_product4_soustraitance_p1'] ?> value="checked" name="item_product4_soustraitance_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p2"  <?php echo $_SESSION['item_product4_soustraitance_p2'] ?> value="checked" name="item_product4_soustraitance_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p3"  <?php echo $_SESSION['item_product4_soustraitance_p3'] ?> value="checked" name="item_product4_soustraitance_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p4"  <?php echo $_SESSION['item_product4_soustraitance_p4'] ?> value="checked" name="item_product4_soustraitance_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p5"  <?php echo $_SESSION['item_product4_soustraitance_p5'] ?> value="checked" name="item_product4_soustraitance_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_soustraitance_p6"  <?php echo $_SESSION['item_product4_soustraitance_p6'] ?> value="checked" name="item_product4_soustraitance_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Budget Com</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p1"  <?php echo $_SESSION['item_product4_budgetcom_p1'] ?> value="checked" name="item_product4_budgetcom_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p2"  <?php echo $_SESSION['item_product4_budgetcom_p2'] ?> value="checked" name="item_product4_budgetcom_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p3"  <?php echo $_SESSION['item_product4_budgetcom_p3'] ?> value="checked" name="item_product4_budgetcom_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p4"  <?php echo $_SESSION['item_product4_budgetcom_p4'] ?> value="checked" name="item_product4_budgetcom_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p5"  <?php echo $_SESSION['item_product4_budgetcom_p5'] ?> value="checked" name="item_product4_budgetcom_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_budgetcom_p6"  <?php echo $_SESSION['item_product4_budgetcom_p6'] ?> value="checked" name="item_product4_budgetcom_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p1"  <?php echo $_SESSION['item_product4_commerciaux_p1'] ?> value="checked" name="item_product4_commerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p2"  <?php echo $_SESSION['item_product4_commerciaux_p2'] ?> value="checked" name="item_product4_commerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p3"  <?php echo $_SESSION['item_product4_commerciaux_p3'] ?> value="checked" name="item_product4_commerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p4"  <?php echo $_SESSION['item_product4_commerciaux_p4'] ?> value="checked" name="item_product4_commerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p5"  <?php echo $_SESSION['item_product4_commerciaux_p5'] ?> value="checked" name="item_product4_commerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_commerciaux_p6"  <?php echo $_SESSION['item_product4_commerciaux_p6'] ?> value="checked" name="item_product4_commerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p1"  <?php echo $_SESSION['item_product4_indicecommerciaux_p1'] ?> value="checked" name="item_product4_indicecommerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p2"  <?php echo $_SESSION['item_product4_indicecommerciaux_p2'] ?> value="checked" name="item_product4_indicecommerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p3"  <?php echo $_SESSION['item_product4_indicecommerciaux_p3'] ?> value="checked" name="item_product4_indicecommerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p4"  <?php echo $_SESSION['item_product4_indicecommerciaux_p4'] ?> value="checked" name="item_product4_indicecommerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p5"  <?php echo $_SESSION['item_product4_indicecommerciaux_p5'] ?> value="checked" name="item_product4_indicecommerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_indicecommerciaux_p6"  <?php echo $_SESSION['item_product4_indicecommerciaux_p6'] ?> value="checked" name="item_product4_indicecommerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Credit Client</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p1"  <?php echo $_SESSION['item_product4_creditclient_p1'] ?> value="checked" name="item_product4_creditclient_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p2"  <?php echo $_SESSION['item_product4_creditclient_p2'] ?> value="checked" name="item_product4_creditclient_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p3"  <?php echo $_SESSION['item_product4_creditclient_p3'] ?> value="checked" name="item_product4_creditclient_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p4"  <?php echo $_SESSION['item_product4_creditclient_p4'] ?> value="checked" name="item_product4_creditclient_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p5"  <?php echo $_SESSION['item_product4_creditclient_p5'] ?> value="checked" name="item_product4_creditclient_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_creditclient_p6"  <?php echo $_SESSION['item_product4_creditclient_p6'] ?> value="checked" name="item_product4_creditclient_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Prix de vente</div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p1"  <?php echo $_SESSION['item_product4_pdv_p1'] ?> value="checked" name="item_product4_pdv_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p2"  <?php echo $_SESSION['item_product4_pdv_p2'] ?> value="checked" name="item_product4_pdv_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p3"  <?php echo $_SESSION['item_product4_pdv_p3'] ?> value="checked" name="item_product4_pdv_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p4"  <?php echo $_SESSION['item_product4_pdv_p4'] ?> value="checked" name="item_product4_pdv_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p5"  <?php echo $_SESSION['item_product4_pdv_p5'] ?> value="checked" name="item_product4_pdv_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product4_pdv_p6"  <?php echo $_SESSION['item_product4_pdv_p6'] ?> value="checked" name="item_product4_pdv_p6"/></div>
							</div>
						</div>
						<div class="divTableCell"><div class="tablecentre"><?php echo $_SESSION['product5'] ?></div>
							<div class="divTableRow"><div class="divTableCell">Licence</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p1"  <?php echo $_SESSION['item_product5_licence_p1'] ?> value="checked" name="item_product5_licence_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p2"  <?php echo $_SESSION['item_product5_licence_p2'] ?> value="checked" name="item_product5_licence_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p3"  <?php echo $_SESSION['item_product5_licence_p3'] ?> value="checked" name="item_product5_licence_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p4"  <?php echo $_SESSION['item_product5_licence_p4'] ?> value="checked" name="item_product5_licence_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p5"  <?php echo $_SESSION['item_product5_licence_p5'] ?> value="checked" name="item_product5_licence_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_licence_p6"  <?php echo $_SESSION['item_product5_licence_p6'] ?> value="checked" name="item_product5_licence_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Production</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p1"  <?php echo $_SESSION['item_product5_production_p1'] ?> value="checked" name="item_product5_production_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p2"  <?php echo $_SESSION['item_product5_production_p2'] ?> value="checked" name="item_product5_production_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p3"  <?php echo $_SESSION['item_product5_production_p3'] ?> value="checked" name="item_product5_production_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p4"  <?php echo $_SESSION['item_product5_production_p4'] ?> value="checked" name="item_product5_production_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p5"  <?php echo $_SESSION['item_product5_production_p5'] ?> value="checked" name="item_product5_production_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_production_p6"  <?php echo $_SESSION['item_product5_production_p6'] ?> value="checked" name="item_product5_production_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Qualite</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p1"  <?php echo $_SESSION['item_product5_qualite_p1'] ?> value="checked" name="item_product5_qualite_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p2"  <?php echo $_SESSION['item_product5_qualite_p2'] ?> value="checked" name="item_product5_qualite_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p3"  <?php echo $_SESSION['item_product5_qualite_p3'] ?> value="checked" name="item_product5_qualite_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p4"  <?php echo $_SESSION['item_product5_qualite_p4'] ?> value="checked" name="item_product5_qualite_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p5"  <?php echo $_SESSION['item_product5_qualite_p5'] ?> value="checked" name="item_product5_qualite_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_qualite_p6"  <?php echo $_SESSION['item_product5_qualite_p6'] ?> value="checked" name="item_product5_qualite_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Ss-Traitance</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p1"  <?php echo $_SESSION['item_product5_soustraitance_p1'] ?> value="checked" name="item_product5_soustraitance_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p2"  <?php echo $_SESSION['item_product5_soustraitance_p2'] ?> value="checked" name="item_product5_soustraitance_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p3"  <?php echo $_SESSION['item_product5_soustraitance_p3'] ?> value="checked" name="item_product5_soustraitance_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p4"  <?php echo $_SESSION['item_product5_soustraitance_p4'] ?> value="checked" name="item_product5_soustraitance_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p5"  <?php echo $_SESSION['item_product5_soustraitance_p5'] ?> value="checked" name="item_product5_soustraitance_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_soustraitance_p6"  <?php echo $_SESSION['item_product5_soustraitance_p6'] ?> value="checked" name="item_product5_soustraitance_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Budget Com</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p1"  <?php echo $_SESSION['item_product5_budgetcom_p1'] ?> value="checked" name="item_product5_budgetcom_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p2"  <?php echo $_SESSION['item_product5_budgetcom_p2'] ?> value="checked" name="item_product5_budgetcom_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p3"  <?php echo $_SESSION['item_product5_budgetcom_p3'] ?> value="checked" name="item_product5_budgetcom_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p4"  <?php echo $_SESSION['item_product5_budgetcom_p4'] ?> value="checked" name="item_product5_budgetcom_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p5"  <?php echo $_SESSION['item_product5_budgetcom_p5'] ?> value="checked" name="item_product5_budgetcom_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_budgetcom_p6"  <?php echo $_SESSION['item_product5_budgetcom_p6'] ?> value="checked" name="item_product5_budgetcom_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p1"  <?php echo $_SESSION['item_product5_commerciaux_p1'] ?> value="checked" name="item_product5_commerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p2"  <?php echo $_SESSION['item_product5_commerciaux_p2'] ?> value="checked" name="item_product5_commerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p3"  <?php echo $_SESSION['item_product5_commerciaux_p3'] ?> value="checked" name="item_product5_commerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p4"  <?php echo $_SESSION['item_product5_commerciaux_p4'] ?> value="checked" name="item_product5_commerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p5"  <?php echo $_SESSION['item_product5_commerciaux_p5'] ?> value="checked" name="item_product5_commerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_commerciaux_p6"  <?php echo $_SESSION['item_product5_commerciaux_p6'] ?> value="checked" name="item_product5_commerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Indice Commerciaux</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p1"  <?php echo $_SESSION['item_product5_indicecommerciaux_p1'] ?> value="checked" name="item_product5_indicecommerciaux_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p2"  <?php echo $_SESSION['item_product5_indicecommerciaux_p2'] ?> value="checked" name="item_product5_indicecommerciaux_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p3"  <?php echo $_SESSION['item_product5_indicecommerciaux_p3'] ?> value="checked" name="item_product5_indicecommerciaux_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p4"  <?php echo $_SESSION['item_product5_indicecommerciaux_p4'] ?> value="checked" name="item_product5_indicecommerciaux_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p5"  <?php echo $_SESSION['item_product5_indicecommerciaux_p5'] ?> value="checked" name="item_product5_indicecommerciaux_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_indicecommerciaux_p6"  <?php echo $_SESSION['item_product5_indicecommerciaux_p6'] ?> value="checked" name="item_product5_indicecommerciaux_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Credit Client</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p1"  <?php echo $_SESSION['item_product5_creditclient_p1'] ?> value="checked" name="item_product5_creditclient_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p2"  <?php echo $_SESSION['item_product5_creditclient_p2'] ?> value="checked" name="item_product5_creditclient_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p3"  <?php echo $_SESSION['item_product5_creditclient_p3'] ?> value="checked" name="item_product5_creditclient_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p4"  <?php echo $_SESSION['item_product5_creditclient_p4'] ?> value="checked" name="item_product5_creditclient_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p5"  <?php echo $_SESSION['item_product5_creditclient_p5'] ?> value="checked" name="item_product5_creditclient_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_creditclient_p6"  <?php echo $_SESSION['item_product5_creditclient_p6'] ?> value="checked" name="item_product5_creditclient_p6"/></div>
							</div>
							<div class="divTableRow"><div class="divTableCell">Prix de vente</div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p1"  <?php echo $_SESSION['item_product5_pdv_p1'] ?> value="checked" name="item_product5_pdv_p1"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p2"  <?php echo $_SESSION['item_product5_pdv_p2'] ?> value="checked" name="item_product5_pdv_p2"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p3"  <?php echo $_SESSION['item_product5_pdv_p3'] ?> value="checked" name="item_product5_pdv_p3"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p4"  <?php echo $_SESSION['item_product5_pdv_p4'] ?> value="checked" name="item_product5_pdv_p4"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p5"  <?php echo $_SESSION['item_product5_pdv_p5'] ?> value="checked" name="item_product5_pdv_p5"/></div>
								<div class="divTableCell"><input type="checkbox" id="item_product5_pdv_p6"  <?php echo $_SESSION['item_product5_pdv_p6'] ?> value="checked" name="item_product5_pdv_p6"/></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="d2"></div>
		
		<div id="d3"></div>

		<div id="d4"></div>

		<div id="d5"></div>
		
		<div id="d6"></div>
		
		<div id="d7"></div>

		<div id="d8"></div>

	</div>
	</div>



</div>
</div>



	<div class="submit_decision">	
	<input type=hidden name="menu" value=901>
	<input type=hidden name="refreshneufcentun" value=1>
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
