<?php
session_start();
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

<head>
    <?php include("head.php"); ?> 
</head>




<body>
  
  <?php

  include("connect_bdd.php");

$req = $bdd->prepare('SELECT * FROM adminbouton WHERE ID = ?');
$req->execute(array(100));
$resultat = $req->fetch();


                              $_SESSION['decision1'] = $resultat['decision1'];
                              $_SESSION['decision2'] = $resultat['decision2'];
                              $_SESSION['decision3'] = $resultat['decision3'];
                              $_SESSION['decision4'] = $resultat['decision4'];
                              $_SESSION['decision5'] = $resultat['decision5'];
                              $_SESSION['decision6'] = $resultat['decision6'];
                              
                              $_SESSION['resultat1'] = $resultat['resultat1'];
                              $_SESSION['resultat2'] = $resultat['resultat2'];
                              $_SESSION['resultat3'] = $resultat['resultat3'];
                              $_SESSION['resultat4'] = $resultat['resultat4'];
                              $_SESSION['resultat5'] = $resultat['resultat5'];
                              $_SESSION['resultat6'] = $resultat['resultat6'];

                              $_SESSION['identite'] = $resultat['identite'];
                              $_SESSION['envoi'] = $resultat['envoi'];
                              $_SESSION['prime'] = $resultat['prime'];
                              $_SESSION['refresh'] = $resultat['refresh'];

                              $req->closeCursor();


$req = $bdd->prepare('SELECT * FROM admin WHERE ID = ?');
$req->execute(array(100));
$resultat = $req->fetch();

                              $_SESSION['item_dividendes_p1'] = $resultat['item_dividendes_p1'];
                              $_SESSION['item_dividendes_p2'] = $resultat['item_dividendes_p2'];
                              $_SESSION['item_dividendes_p3'] = $resultat['item_dividendes_p3'];
                              $_SESSION['item_dividendes_p4'] = $resultat['item_dividendes_p4'];
                              $_SESSION['item_dividendes_p5'] = $resultat['item_dividendes_p5'];
                              $_SESSION['item_dividendes_p6'] = $resultat['item_dividendes_p6'];
                              $_SESSION['item_emprunt_p1'] = $resultat['item_emprunt_p1'];
                              $_SESSION['item_emprunt_p2'] = $resultat['item_emprunt_p2'];
                              $_SESSION['item_emprunt_p3'] = $resultat['item_emprunt_p3'];
                              $_SESSION['item_emprunt_p4'] = $resultat['item_emprunt_p4'];
                              $_SESSION['item_emprunt_p5'] = $resultat['item_emprunt_p5'];
                              $_SESSION['item_emprunt_p6'] = $resultat['item_emprunt_p6'];
                              $_SESSION['item_machine1_p1'] = $resultat['item_machine1_p1'];
                              $_SESSION['item_machine1_p2'] = $resultat['item_machine1_p2'];
                              $_SESSION['item_machine1_p3'] = $resultat['item_machine1_p3'];
                              $_SESSION['item_machine1_p4'] = $resultat['item_machine1_p4'];
                              $_SESSION['item_machine1_p5'] = $resultat['item_machine1_p5'];
                              $_SESSION['item_machine1_p6'] = $resultat['item_machine1_p6'];
                              $_SESSION['item_machine2_p1'] = $resultat['item_machine2_p1'];
                              $_SESSION['item_machine2_p2'] = $resultat['item_machine2_p2'];
                              $_SESSION['item_machine2_p3'] = $resultat['item_machine2_p3'];
                              $_SESSION['item_machine2_p4'] = $resultat['item_machine2_p4'];
                              $_SESSION['item_machine2_p5'] = $resultat['item_machine2_p5'];
                              $_SESSION['item_machine2_p6'] = $resultat['item_machine2_p6'];
                              $_SESSION['item_machine3_p1'] = $resultat['item_machine3_p1'];
                              $_SESSION['item_machine3_p2'] = $resultat['item_machine3_p2'];
                              $_SESSION['item_machine3_p3'] = $resultat['item_machine3_p3'];
                              $_SESSION['item_machine3_p4'] = $resultat['item_machine3_p4'];
                              $_SESSION['item_machine3_p5'] = $resultat['item_machine3_p5'];
                              $_SESSION['item_machine3_p6'] = $resultat['item_machine3_p6'];
                              $_SESSION['item_budgetmaintenance_p1'] = $resultat['item_budgetmaintenance_p1'];
                              $_SESSION['item_budgetmaintenance_p2'] = $resultat['item_budgetmaintenance_p2'];
                              $_SESSION['item_budgetmaintenance_p3'] = $resultat['item_budgetmaintenance_p3'];
                              $_SESSION['item_budgetmaintenance_p4'] = $resultat['item_budgetmaintenance_p4'];
                              $_SESSION['item_budgetmaintenance_p5'] = $resultat['item_budgetmaintenance_p5'];
                              $_SESSION['item_budgetmaintenance_p6'] = $resultat['item_budgetmaintenance_p6'];
                              $_SESSION['item_recrutementouvrier_p1'] = $resultat['item_recrutementouvrier_p1'];
                              $_SESSION['item_recrutementouvrier_p2'] = $resultat['item_recrutementouvrier_p2'];
                              $_SESSION['item_recrutementouvrier_p3'] = $resultat['item_recrutementouvrier_p3'];
                              $_SESSION['item_recrutementouvrier_p4'] = $resultat['item_recrutementouvrier_p4'];
                              $_SESSION['item_recrutementouvrier_p5'] = $resultat['item_recrutementouvrier_p5'];
                              $_SESSION['item_recrutementouvrier_p6'] = $resultat['item_recrutementouvrier_p6'];
                              $_SESSION['item_licenciementouvrier_p1'] = $resultat['item_licenciementouvrier_p1'];
                              $_SESSION['item_licenciementouvrier_p2'] = $resultat['item_licenciementouvrier_p2'];
                              $_SESSION['item_licenciementouvrier_p3'] = $resultat['item_licenciementouvrier_p3'];
                              $_SESSION['item_licenciementouvrier_p4'] = $resultat['item_licenciementouvrier_p4'];
                              $_SESSION['item_licenciementouvrier_p5'] = $resultat['item_licenciementouvrier_p5'];
                              $_SESSION['item_licenciementouvrier_p6'] = $resultat['item_licenciementouvrier_p6'];
                              $_SESSION['item_indiceouvrier_p1'] = $resultat['item_indiceouvrier_p1'];
                              $_SESSION['item_indiceouvrier_p2'] = $resultat['item_indiceouvrier_p2'];
                              $_SESSION['item_indiceouvrier_p3'] = $resultat['item_indiceouvrier_p3'];
                              $_SESSION['item_indiceouvrier_p4'] = $resultat['item_indiceouvrier_p4'];
                              $_SESSION['item_indiceouvrier_p5'] = $resultat['item_indiceouvrier_p5'];
                              $_SESSION['item_indiceouvrier_p6'] = $resultat['item_indiceouvrier_p6'];
                              $_SESSION['item_budgetsocial_p1'] = $resultat['item_budgetsocial_p1'];
                              $_SESSION['item_budgetsocial_p2'] = $resultat['item_budgetsocial_p2'];
                              $_SESSION['item_budgetsocial_p3'] = $resultat['item_budgetsocial_p3'];
                              $_SESSION['item_budgetsocial_p4'] = $resultat['item_budgetsocial_p4'];
                              $_SESSION['item_budgetsocial_p5'] = $resultat['item_budgetsocial_p5'];
                              $_SESSION['item_budgetsocial_p6'] = $resultat['item_budgetsocial_p6'];
                              $_SESSION['item_product1_licence_p1'] = $resultat['item_product1_licence_p1'];
                              $_SESSION['item_product1_licence_p2'] = $resultat['item_product1_licence_p2'];
                              $_SESSION['item_product1_licence_p3'] = $resultat['item_product1_licence_p3'];
                              $_SESSION['item_product1_licence_p4'] = $resultat['item_product1_licence_p4'];
                              $_SESSION['item_product1_licence_p5'] = $resultat['item_product1_licence_p5'];
                              $_SESSION['item_product1_licence_p6'] = $resultat['item_product1_licence_p6'];
                              $_SESSION['item_product1_production_p1'] = $resultat['item_product1_production_p1'];
                              $_SESSION['item_product1_production_p2'] = $resultat['item_product1_production_p2'];
                              $_SESSION['item_product1_production_p3'] = $resultat['item_product1_production_p3'];
                              $_SESSION['item_product1_production_p4'] = $resultat['item_product1_production_p4'];
                              $_SESSION['item_product1_production_p5'] = $resultat['item_product1_production_p5'];
                              $_SESSION['item_product1_production_p6'] = $resultat['item_product1_production_p6'];
                              $_SESSION['item_product1_qualite_p1'] = $resultat['item_product1_qualite_p1'];
                              $_SESSION['item_product1_qualite_p2'] = $resultat['item_product1_qualite_p2'];
                              $_SESSION['item_product1_qualite_p3'] = $resultat['item_product1_qualite_p3'];
                              $_SESSION['item_product1_qualite_p4'] = $resultat['item_product1_qualite_p4'];
                              $_SESSION['item_product1_qualite_p5'] = $resultat['item_product1_qualite_p5'];
                              $_SESSION['item_product1_qualite_p6'] = $resultat['item_product1_qualite_p6'];
                              $_SESSION['item_product1_soustraitance_p1'] = $resultat['item_product1_soustraitance_p1'];
                              $_SESSION['item_product1_soustraitance_p2'] = $resultat['item_product1_soustraitance_p2'];
                              $_SESSION['item_product1_soustraitance_p3'] = $resultat['item_product1_soustraitance_p3'];
                              $_SESSION['item_product1_soustraitance_p4'] = $resultat['item_product1_soustraitance_p4'];
                              $_SESSION['item_product1_soustraitance_p5'] = $resultat['item_product1_soustraitance_p5'];
                              $_SESSION['item_product1_soustraitance_p6'] = $resultat['item_product1_soustraitance_p6'];
                              $_SESSION['item_product1_budgetcom_p1'] = $resultat['item_product1_budgetcom_p1'];
                              $_SESSION['item_product1_budgetcom_p2'] = $resultat['item_product1_budgetcom_p2'];
                              $_SESSION['item_product1_budgetcom_p3'] = $resultat['item_product1_budgetcom_p3'];
                              $_SESSION['item_product1_budgetcom_p4'] = $resultat['item_product1_budgetcom_p4'];
                              $_SESSION['item_product1_budgetcom_p5'] = $resultat['item_product1_budgetcom_p5'];
                              $_SESSION['item_product1_budgetcom_p6'] = $resultat['item_product1_budgetcom_p6'];
                              $_SESSION['item_product1_commerciaux_p1'] = $resultat['item_product1_commerciaux_p1'];
                              $_SESSION['item_product1_commerciaux_p2'] = $resultat['item_product1_commerciaux_p2'];
                              $_SESSION['item_product1_commerciaux_p3'] = $resultat['item_product1_commerciaux_p3'];
                              $_SESSION['item_product1_commerciaux_p4'] = $resultat['item_product1_commerciaux_p4'];
                              $_SESSION['item_product1_commerciaux_p5'] = $resultat['item_product1_commerciaux_p5'];
                              $_SESSION['item_product1_commerciaux_p6'] = $resultat['item_product1_commerciaux_p6'];
                              $_SESSION['item_product1_indicecommerciaux_p1'] = $resultat['item_product1_indicecommerciaux_p1'];
                              $_SESSION['item_product1_indicecommerciaux_p2'] = $resultat['item_product1_indicecommerciaux_p2'];
                              $_SESSION['item_product1_indicecommerciaux_p3'] = $resultat['item_product1_indicecommerciaux_p3'];
                              $_SESSION['item_product1_indicecommerciaux_p4'] = $resultat['item_product1_indicecommerciaux_p4'];
                              $_SESSION['item_product1_indicecommerciaux_p5'] = $resultat['item_product1_indicecommerciaux_p5'];
                              $_SESSION['item_product1_indicecommerciaux_p6'] = $resultat['item_product1_indicecommerciaux_p6'];
                              $_SESSION['item_product1_creditclient_p1'] = $resultat['item_product1_creditclient_p1'];
                              $_SESSION['item_product1_creditclient_p2'] = $resultat['item_product1_creditclient_p2'];
                              $_SESSION['item_product1_creditclient_p3'] = $resultat['item_product1_creditclient_p3'];
                              $_SESSION['item_product1_creditclient_p4'] = $resultat['item_product1_creditclient_p4'];
                              $_SESSION['item_product1_creditclient_p5'] = $resultat['item_product1_creditclient_p5'];
                              $_SESSION['item_product1_creditclient_p6'] = $resultat['item_product1_creditclient_p6'];
                              $_SESSION['item_product1_pdv_p1'] = $resultat['item_product1_pdv_p1'];
                              $_SESSION['item_product1_pdv_p2'] = $resultat['item_product1_pdv_p2'];
                              $_SESSION['item_product1_pdv_p3'] = $resultat['item_product1_pdv_p3'];
                              $_SESSION['item_product1_pdv_p4'] = $resultat['item_product1_pdv_p4'];
                              $_SESSION['item_product1_pdv_p5'] = $resultat['item_product1_pdv_p5'];
                              $_SESSION['item_product1_pdv_p6'] = $resultat['item_product1_pdv_p6'];
                              $_SESSION['item_product2_licence_p1'] = $resultat['item_product2_licence_p1'];
                              $_SESSION['item_product2_licence_p2'] = $resultat['item_product2_licence_p2'];
                              $_SESSION['item_product2_licence_p3'] = $resultat['item_product2_licence_p3'];
                              $_SESSION['item_product2_licence_p4'] = $resultat['item_product2_licence_p4'];
                              $_SESSION['item_product2_licence_p5'] = $resultat['item_product2_licence_p5'];
                              $_SESSION['item_product2_licence_p6'] = $resultat['item_product2_licence_p6'];
                              $_SESSION['item_product2_production_p1'] = $resultat['item_product2_production_p1'];
                              $_SESSION['item_product2_production_p2'] = $resultat['item_product2_production_p2'];
                              $_SESSION['item_product2_production_p3'] = $resultat['item_product2_production_p3'];
                              $_SESSION['item_product2_production_p4'] = $resultat['item_product2_production_p4'];
                              $_SESSION['item_product2_production_p5'] = $resultat['item_product2_production_p5'];
                              $_SESSION['item_product2_production_p6'] = $resultat['item_product2_production_p6'];
                              $_SESSION['item_product2_qualite_p1'] = $resultat['item_product2_qualite_p1'];
                              $_SESSION['item_product2_qualite_p2'] = $resultat['item_product2_qualite_p2'];
                              $_SESSION['item_product2_qualite_p3'] = $resultat['item_product2_qualite_p3'];
                              $_SESSION['item_product2_qualite_p4'] = $resultat['item_product2_qualite_p4'];
                              $_SESSION['item_product2_qualite_p5'] = $resultat['item_product2_qualite_p5'];
                              $_SESSION['item_product2_qualite_p6'] = $resultat['item_product2_qualite_p6'];
                              $_SESSION['item_product2_soustraitance_p1'] = $resultat['item_product2_soustraitance_p1'];
                              $_SESSION['item_product2_soustraitance_p2'] = $resultat['item_product2_soustraitance_p2'];
                              $_SESSION['item_product2_soustraitance_p3'] = $resultat['item_product2_soustraitance_p3'];
                              $_SESSION['item_product2_soustraitance_p4'] = $resultat['item_product2_soustraitance_p4'];
                              $_SESSION['item_product2_soustraitance_p5'] = $resultat['item_product2_soustraitance_p5'];
                              $_SESSION['item_product2_soustraitance_p6'] = $resultat['item_product2_soustraitance_p6'];
                              $_SESSION['item_product2_budgetcom_p1'] = $resultat['item_product2_budgetcom_p1'];
                              $_SESSION['item_product2_budgetcom_p2'] = $resultat['item_product2_budgetcom_p2'];
                              $_SESSION['item_product2_budgetcom_p3'] = $resultat['item_product2_budgetcom_p3'];
                              $_SESSION['item_product2_budgetcom_p4'] = $resultat['item_product2_budgetcom_p4'];
                              $_SESSION['item_product2_budgetcom_p5'] = $resultat['item_product2_budgetcom_p5'];
                              $_SESSION['item_product2_budgetcom_p6'] = $resultat['item_product2_budgetcom_p6'];
                              $_SESSION['item_product2_commerciaux_p1'] = $resultat['item_product2_commerciaux_p1'];
                              $_SESSION['item_product2_commerciaux_p2'] = $resultat['item_product2_commerciaux_p2'];
                              $_SESSION['item_product2_commerciaux_p3'] = $resultat['item_product2_commerciaux_p3'];
                              $_SESSION['item_product2_commerciaux_p4'] = $resultat['item_product2_commerciaux_p4'];
                              $_SESSION['item_product2_commerciaux_p5'] = $resultat['item_product2_commerciaux_p5'];
                              $_SESSION['item_product2_commerciaux_p6'] = $resultat['item_product2_commerciaux_p6'];
                              $_SESSION['item_product2_indicecommerciaux_p1'] = $resultat['item_product2_indicecommerciaux_p1'];
                              $_SESSION['item_product2_indicecommerciaux_p2'] = $resultat['item_product2_indicecommerciaux_p2'];
                              $_SESSION['item_product2_indicecommerciaux_p3'] = $resultat['item_product2_indicecommerciaux_p3'];
                              $_SESSION['item_product2_indicecommerciaux_p4'] = $resultat['item_product2_indicecommerciaux_p4'];
                              $_SESSION['item_product2_indicecommerciaux_p5'] = $resultat['item_product2_indicecommerciaux_p5'];
                              $_SESSION['item_product2_indicecommerciaux_p6'] = $resultat['item_product2_indicecommerciaux_p6'];
                              $_SESSION['item_product2_creditclient_p1'] = $resultat['item_product2_creditclient_p1'];
                              $_SESSION['item_product2_creditclient_p2'] = $resultat['item_product2_creditclient_p2'];
                              $_SESSION['item_product2_creditclient_p3'] = $resultat['item_product2_creditclient_p3'];
                              $_SESSION['item_product2_creditclient_p4'] = $resultat['item_product2_creditclient_p4'];
                              $_SESSION['item_product2_creditclient_p5'] = $resultat['item_product2_creditclient_p5'];
                              $_SESSION['item_product2_creditclient_p6'] = $resultat['item_product2_creditclient_p6'];
                              $_SESSION['item_product2_pdv_p1'] = $resultat['item_product2_pdv_p1'];
                              $_SESSION['item_product2_pdv_p2'] = $resultat['item_product2_pdv_p2'];
                              $_SESSION['item_product2_pdv_p3'] = $resultat['item_product2_pdv_p3'];
                              $_SESSION['item_product2_pdv_p4'] = $resultat['item_product2_pdv_p4'];
                              $_SESSION['item_product2_pdv_p5'] = $resultat['item_product2_pdv_p5'];
                              $_SESSION['item_product2_pdv_p6'] = $resultat['item_product2_pdv_p6'];
                              $_SESSION['item_product3_licence_p1'] = $resultat['item_product3_licence_p1'];
                              $_SESSION['item_product3_licence_p2'] = $resultat['item_product3_licence_p2'];
                              $_SESSION['item_product3_licence_p3'] = $resultat['item_product3_licence_p3'];
                              $_SESSION['item_product3_licence_p4'] = $resultat['item_product3_licence_p4'];
                              $_SESSION['item_product3_licence_p5'] = $resultat['item_product3_licence_p5'];
                              $_SESSION['item_product3_licence_p6'] = $resultat['item_product3_licence_p6'];
                              $_SESSION['item_product3_production_p1'] = $resultat['item_product3_production_p1'];
                              $_SESSION['item_product3_production_p2'] = $resultat['item_product3_production_p2'];
                              $_SESSION['item_product3_production_p3'] = $resultat['item_product3_production_p3'];
                              $_SESSION['item_product3_production_p4'] = $resultat['item_product3_production_p4'];
                              $_SESSION['item_product3_production_p5'] = $resultat['item_product3_production_p5'];
                              $_SESSION['item_product3_production_p6'] = $resultat['item_product3_production_p6'];
                              $_SESSION['item_product3_qualite_p1'] = $resultat['item_product3_qualite_p1'];
                              $_SESSION['item_product3_qualite_p2'] = $resultat['item_product3_qualite_p2'];
                              $_SESSION['item_product3_qualite_p3'] = $resultat['item_product3_qualite_p3'];
                              $_SESSION['item_product3_qualite_p4'] = $resultat['item_product3_qualite_p4'];
                              $_SESSION['item_product3_qualite_p5'] = $resultat['item_product3_qualite_p5'];
                              $_SESSION['item_product3_qualite_p6'] = $resultat['item_product3_qualite_p6'];
                              $_SESSION['item_product3_soustraitance_p1'] = $resultat['item_product3_soustraitance_p1'];
                              $_SESSION['item_product3_soustraitance_p2'] = $resultat['item_product3_soustraitance_p2'];
                              $_SESSION['item_product3_soustraitance_p3'] = $resultat['item_product3_soustraitance_p3'];
                              $_SESSION['item_product3_soustraitance_p4'] = $resultat['item_product3_soustraitance_p4'];
                              $_SESSION['item_product3_soustraitance_p5'] = $resultat['item_product3_soustraitance_p5'];
                              $_SESSION['item_product3_soustraitance_p6'] = $resultat['item_product3_soustraitance_p6'];
                              $_SESSION['item_product3_budgetcom_p1'] = $resultat['item_product3_budgetcom_p1'];
                              $_SESSION['item_product3_budgetcom_p2'] = $resultat['item_product3_budgetcom_p2'];
                              $_SESSION['item_product3_budgetcom_p3'] = $resultat['item_product3_budgetcom_p3'];
                              $_SESSION['item_product3_budgetcom_p4'] = $resultat['item_product3_budgetcom_p4'];
                              $_SESSION['item_product3_budgetcom_p5'] = $resultat['item_product3_budgetcom_p5'];
                              $_SESSION['item_product3_budgetcom_p6'] = $resultat['item_product3_budgetcom_p6'];
                              $_SESSION['item_product3_commerciaux_p1'] = $resultat['item_product3_commerciaux_p1'];
                              $_SESSION['item_product3_commerciaux_p2'] = $resultat['item_product3_commerciaux_p2'];
                              $_SESSION['item_product3_commerciaux_p3'] = $resultat['item_product3_commerciaux_p3'];
                              $_SESSION['item_product3_commerciaux_p4'] = $resultat['item_product3_commerciaux_p4'];
                              $_SESSION['item_product3_commerciaux_p5'] = $resultat['item_product3_commerciaux_p5'];
                              $_SESSION['item_product3_commerciaux_p6'] = $resultat['item_product3_commerciaux_p6'];
                              $_SESSION['item_product3_indicecommerciaux_p1'] = $resultat['item_product3_indicecommerciaux_p1'];
                              $_SESSION['item_product3_indicecommerciaux_p2'] = $resultat['item_product3_indicecommerciaux_p2'];
                              $_SESSION['item_product3_indicecommerciaux_p3'] = $resultat['item_product3_indicecommerciaux_p3'];
                              $_SESSION['item_product3_indicecommerciaux_p4'] = $resultat['item_product3_indicecommerciaux_p4'];
                              $_SESSION['item_product3_indicecommerciaux_p5'] = $resultat['item_product3_indicecommerciaux_p5'];
                              $_SESSION['item_product3_indicecommerciaux_p6'] = $resultat['item_product3_indicecommerciaux_p6'];
                              $_SESSION['item_product3_creditclient_p1'] = $resultat['item_product3_creditclient_p1'];
                              $_SESSION['item_product3_creditclient_p2'] = $resultat['item_product3_creditclient_p2'];
                              $_SESSION['item_product3_creditclient_p3'] = $resultat['item_product3_creditclient_p3'];
                              $_SESSION['item_product3_creditclient_p4'] = $resultat['item_product3_creditclient_p4'];
                              $_SESSION['item_product3_creditclient_p5'] = $resultat['item_product3_creditclient_p5'];
                              $_SESSION['item_product3_creditclient_p6'] = $resultat['item_product3_creditclient_p6'];
                              $_SESSION['item_product3_pdv_p1'] = $resultat['item_product3_pdv_p1'];
                              $_SESSION['item_product3_pdv_p2'] = $resultat['item_product3_pdv_p2'];
                              $_SESSION['item_product3_pdv_p3'] = $resultat['item_product3_pdv_p3'];
                              $_SESSION['item_product3_pdv_p4'] = $resultat['item_product3_pdv_p4'];
                              $_SESSION['item_product3_pdv_p5'] = $resultat['item_product3_pdv_p5'];
                              $_SESSION['item_product3_pdv_p6'] = $resultat['item_product3_pdv_p6'];
                              $_SESSION['item_product4_licence_p1'] = $resultat['item_product4_licence_p1'];
                              $_SESSION['item_product4_licence_p2'] = $resultat['item_product4_licence_p2'];
                              $_SESSION['item_product4_licence_p3'] = $resultat['item_product4_licence_p3'];
                              $_SESSION['item_product4_licence_p4'] = $resultat['item_product4_licence_p4'];
                              $_SESSION['item_product4_licence_p5'] = $resultat['item_product4_licence_p5'];
                              $_SESSION['item_product4_licence_p6'] = $resultat['item_product4_licence_p6'];
                              $_SESSION['item_product4_production_p1'] = $resultat['item_product4_production_p1'];
                              $_SESSION['item_product4_production_p2'] = $resultat['item_product4_production_p2'];
                              $_SESSION['item_product4_production_p3'] = $resultat['item_product4_production_p3'];
                              $_SESSION['item_product4_production_p4'] = $resultat['item_product4_production_p4'];
                              $_SESSION['item_product4_production_p5'] = $resultat['item_product4_production_p5'];
                              $_SESSION['item_product4_production_p6'] = $resultat['item_product4_production_p6'];
                              $_SESSION['item_product4_qualite_p1'] = $resultat['item_product4_qualite_p1'];
                              $_SESSION['item_product4_qualite_p2'] = $resultat['item_product4_qualite_p2'];
                              $_SESSION['item_product4_qualite_p3'] = $resultat['item_product4_qualite_p3'];
                              $_SESSION['item_product4_qualite_p4'] = $resultat['item_product4_qualite_p4'];
                              $_SESSION['item_product4_qualite_p5'] = $resultat['item_product4_qualite_p5'];
                              $_SESSION['item_product4_qualite_p6'] = $resultat['item_product4_qualite_p6'];
                              $_SESSION['item_product4_soustraitance_p1'] = $resultat['item_product4_soustraitance_p1'];
                              $_SESSION['item_product4_soustraitance_p2'] = $resultat['item_product4_soustraitance_p2'];
                              $_SESSION['item_product4_soustraitance_p3'] = $resultat['item_product4_soustraitance_p3'];
                              $_SESSION['item_product4_soustraitance_p4'] = $resultat['item_product4_soustraitance_p4'];
                              $_SESSION['item_product4_soustraitance_p5'] = $resultat['item_product4_soustraitance_p5'];
                              $_SESSION['item_product4_soustraitance_p6'] = $resultat['item_product4_soustraitance_p6'];
                              $_SESSION['item_product4_budgetcom_p1'] = $resultat['item_product4_budgetcom_p1'];
                              $_SESSION['item_product4_budgetcom_p2'] = $resultat['item_product4_budgetcom_p2'];
                              $_SESSION['item_product4_budgetcom_p3'] = $resultat['item_product4_budgetcom_p3'];
                              $_SESSION['item_product4_budgetcom_p4'] = $resultat['item_product4_budgetcom_p4'];
                              $_SESSION['item_product4_budgetcom_p5'] = $resultat['item_product4_budgetcom_p5'];
                              $_SESSION['item_product4_budgetcom_p6'] = $resultat['item_product4_budgetcom_p6'];
                              $_SESSION['item_product4_commerciaux_p1'] = $resultat['item_product4_commerciaux_p1'];
                              $_SESSION['item_product4_commerciaux_p2'] = $resultat['item_product4_commerciaux_p2'];
                              $_SESSION['item_product4_commerciaux_p3'] = $resultat['item_product4_commerciaux_p3'];
                              $_SESSION['item_product4_commerciaux_p4'] = $resultat['item_product4_commerciaux_p4'];
                              $_SESSION['item_product4_commerciaux_p5'] = $resultat['item_product4_commerciaux_p5'];
                              $_SESSION['item_product4_commerciaux_p6'] = $resultat['item_product4_commerciaux_p6'];
                              $_SESSION['item_product4_indicecommerciaux_p1'] = $resultat['item_product4_indicecommerciaux_p1'];
                              $_SESSION['item_product4_indicecommerciaux_p2'] = $resultat['item_product4_indicecommerciaux_p2'];
                              $_SESSION['item_product4_indicecommerciaux_p3'] = $resultat['item_product4_indicecommerciaux_p3'];
                              $_SESSION['item_product4_indicecommerciaux_p4'] = $resultat['item_product4_indicecommerciaux_p4'];
                              $_SESSION['item_product4_indicecommerciaux_p5'] = $resultat['item_product4_indicecommerciaux_p5'];
                              $_SESSION['item_product4_indicecommerciaux_p6'] = $resultat['item_product4_indicecommerciaux_p6'];
                              $_SESSION['item_product4_creditclient_p1'] = $resultat['item_product4_creditclient_p1'];
                              $_SESSION['item_product4_creditclient_p2'] = $resultat['item_product4_creditclient_p2'];
                              $_SESSION['item_product4_creditclient_p3'] = $resultat['item_product4_creditclient_p3'];
                              $_SESSION['item_product4_creditclient_p4'] = $resultat['item_product4_creditclient_p4'];
                              $_SESSION['item_product4_creditclient_p5'] = $resultat['item_product4_creditclient_p5'];
                              $_SESSION['item_product4_creditclient_p6'] = $resultat['item_product4_creditclient_p6'];
                              $_SESSION['item_product4_pdv_p1'] = $resultat['item_product4_pdv_p1'];
                              $_SESSION['item_product4_pdv_p2'] = $resultat['item_product4_pdv_p2'];
                              $_SESSION['item_product4_pdv_p3'] = $resultat['item_product4_pdv_p3'];
                              $_SESSION['item_product4_pdv_p4'] = $resultat['item_product4_pdv_p4'];
                              $_SESSION['item_product4_pdv_p5'] = $resultat['item_product4_pdv_p5'];
                              $_SESSION['item_product4_pdv_p6'] = $resultat['item_product4_pdv_p6'];
                              $_SESSION['item_product5_licence_p1'] = $resultat['item_product5_licence_p1'];
                              $_SESSION['item_product5_licence_p2'] = $resultat['item_product5_licence_p2'];
                              $_SESSION['item_product5_licence_p3'] = $resultat['item_product5_licence_p3'];
                              $_SESSION['item_product5_licence_p4'] = $resultat['item_product5_licence_p4'];
                              $_SESSION['item_product5_licence_p5'] = $resultat['item_product5_licence_p5'];
                              $_SESSION['item_product5_licence_p6'] = $resultat['item_product5_licence_p6'];
                              $_SESSION['item_product5_production_p1'] = $resultat['item_product5_production_p1'];
                              $_SESSION['item_product5_production_p2'] = $resultat['item_product5_production_p2'];
                              $_SESSION['item_product5_production_p3'] = $resultat['item_product5_production_p3'];
                              $_SESSION['item_product5_production_p4'] = $resultat['item_product5_production_p4'];
                              $_SESSION['item_product5_production_p5'] = $resultat['item_product5_production_p5'];
                              $_SESSION['item_product5_production_p6'] = $resultat['item_product5_production_p6'];
                              $_SESSION['item_product5_qualite_p1'] = $resultat['item_product5_qualite_p1'];
                              $_SESSION['item_product5_qualite_p2'] = $resultat['item_product5_qualite_p2'];
                              $_SESSION['item_product5_qualite_p3'] = $resultat['item_product5_qualite_p3'];
                              $_SESSION['item_product5_qualite_p4'] = $resultat['item_product5_qualite_p4'];
                              $_SESSION['item_product5_qualite_p5'] = $resultat['item_product5_qualite_p5'];
                              $_SESSION['item_product5_qualite_p6'] = $resultat['item_product5_qualite_p6'];
                              $_SESSION['item_product5_soustraitance_p1'] = $resultat['item_product5_soustraitance_p1'];
                              $_SESSION['item_product5_soustraitance_p2'] = $resultat['item_product5_soustraitance_p2'];
                              $_SESSION['item_product5_soustraitance_p3'] = $resultat['item_product5_soustraitance_p3'];
                              $_SESSION['item_product5_soustraitance_p4'] = $resultat['item_product5_soustraitance_p4'];
                              $_SESSION['item_product5_soustraitance_p5'] = $resultat['item_product5_soustraitance_p5'];
                              $_SESSION['item_product5_soustraitance_p6'] = $resultat['item_product5_soustraitance_p6'];
                              $_SESSION['item_product5_budgetcom_p1'] = $resultat['item_product5_budgetcom_p1'];
                              $_SESSION['item_product5_budgetcom_p2'] = $resultat['item_product5_budgetcom_p2'];
                              $_SESSION['item_product5_budgetcom_p3'] = $resultat['item_product5_budgetcom_p3'];
                              $_SESSION['item_product5_budgetcom_p4'] = $resultat['item_product5_budgetcom_p4'];
                              $_SESSION['item_product5_budgetcom_p5'] = $resultat['item_product5_budgetcom_p5'];
                              $_SESSION['item_product5_budgetcom_p6'] = $resultat['item_product5_budgetcom_p6'];
                              $_SESSION['item_product5_commerciaux_p1'] = $resultat['item_product5_commerciaux_p1'];
                              $_SESSION['item_product5_commerciaux_p2'] = $resultat['item_product5_commerciaux_p2'];
                              $_SESSION['item_product5_commerciaux_p3'] = $resultat['item_product5_commerciaux_p3'];
                              $_SESSION['item_product5_commerciaux_p4'] = $resultat['item_product5_commerciaux_p4'];
                              $_SESSION['item_product5_commerciaux_p5'] = $resultat['item_product5_commerciaux_p5'];
                              $_SESSION['item_product5_commerciaux_p6'] = $resultat['item_product5_commerciaux_p6'];
                              $_SESSION['item_product5_indicecommerciaux_p1'] = $resultat['item_product5_indicecommerciaux_p1'];
                              $_SESSION['item_product5_indicecommerciaux_p2'] = $resultat['item_product5_indicecommerciaux_p2'];
                              $_SESSION['item_product5_indicecommerciaux_p3'] = $resultat['item_product5_indicecommerciaux_p3'];
                              $_SESSION['item_product5_indicecommerciaux_p4'] = $resultat['item_product5_indicecommerciaux_p4'];
                              $_SESSION['item_product5_indicecommerciaux_p5'] = $resultat['item_product5_indicecommerciaux_p5'];
                              $_SESSION['item_product5_indicecommerciaux_p6'] = $resultat['item_product5_indicecommerciaux_p6'];
                              $_SESSION['item_product5_creditclient_p1'] = $resultat['item_product5_creditclient_p1'];
                              $_SESSION['item_product5_creditclient_p2'] = $resultat['item_product5_creditclient_p2'];
                              $_SESSION['item_product5_creditclient_p3'] = $resultat['item_product5_creditclient_p3'];
                              $_SESSION['item_product5_creditclient_p4'] = $resultat['item_product5_creditclient_p4'];
                              $_SESSION['item_product5_creditclient_p5'] = $resultat['item_product5_creditclient_p5'];
                              $_SESSION['item_product5_creditclient_p6'] = $resultat['item_product5_creditclient_p6'];
                              $_SESSION['item_product5_pdv_p1'] = $resultat['item_product5_pdv_p1'];
                              $_SESSION['item_product5_pdv_p2'] = $resultat['item_product5_pdv_p2'];
                              $_SESSION['item_product5_pdv_p3'] = $resultat['item_product5_pdv_p3'];
                              $_SESSION['item_product5_pdv_p4'] = $resultat['item_product5_pdv_p4'];
                              $_SESSION['item_product5_pdv_p5'] = $resultat['item_product5_pdv_p5'];
                              $_SESSION['item_product5_pdv_p6'] = $resultat['item_product5_pdv_p6'];
                              $_SESSION['param_cc_p1'] = $resultat['param_cc_p1'];
                              $_SESSION['param_cc_p2'] = $resultat['param_cc_p2'];
                              $_SESSION['param_cc_p3'] = $resultat['param_cc_p3'];
                              $_SESSION['param_cc_p4'] = $resultat['param_cc_p4'];
                              $_SESSION['param_cc_p5'] = $resultat['param_cc_p5'];
                              $_SESSION['param_pdv_p1'] = $resultat['param_pdv_p1'];
                              $_SESSION['param_pdv_p2'] = $resultat['param_pdv_p2'];
                              $_SESSION['param_pdv_p3'] = $resultat['param_pdv_p3'];
                              $_SESSION['param_pdv_p4'] = $resultat['param_pdv_p4'];
                              $_SESSION['param_pdv_p5'] = $resultat['param_pdv_p5'];
                              $_SESSION['param_pdv_mini_p1'] = $resultat['param_pdv_mini_p1'];
                              $_SESSION['param_pdv_mini_p2'] = $resultat['param_pdv_mini_p2'];
                              $_SESSION['param_pdv_mini_p3'] = $resultat['param_pdv_mini_p3'];
                              $_SESSION['param_pdv_mini_p4'] = $resultat['param_pdv_mini_p4'];
                              $_SESSION['param_pdv_mini_p5'] = $resultat['param_pdv_mini_p5'];
                              $_SESSION['param_pdv_maxi_p1'] = $resultat['param_pdv_maxi_p1'];
                              $_SESSION['param_pdv_maxi_p2'] = $resultat['param_pdv_maxi_p2'];
                              $_SESSION['param_pdv_maxi_p3'] = $resultat['param_pdv_maxi_p3'];
                              $_SESSION['param_pdv_maxi_p4'] = $resultat['param_pdv_maxi_p4'];
                              $_SESSION['param_pdv_maxi_p5'] = $resultat['param_pdv_maxi_p5'];









                               $req->closeCursor();




$req = $bdd->prepare('SELECT * FROM p0 WHERE ID = ?');
$req->execute(array(100));
$resultat = $req->fetch();


                              $_SESSION['nbmachine1_p0'] = $resultat['nbmachine1'];
                              $_SESSION['nbmachine2_p0'] = $resultat['nbmachine2'];
                              $_SESSION['nbmachine3_p0'] = $resultat['nbmachine3'];
                              $_SESSION['nbouvrier_p0'] = $resultat['nbouvrier'];
                              $_SESSION['nbcommerciaux_p0'] = $resultat['nbcommerciaux'];
                              $_SESSION['nbequipe_p0'] = $resultat['nbequipe'];
 

                              $req->closeCursor();
                              


   ?>


<?php echo $_SESSION['nbequipe_p0']; ?>

  <header>
    <?php include("header.php"); ?> 
  </header>
  


<section>

  <div class=Bgauche>
    <aside>
      <?php if (isset($_POST['reset'])) {	include ("aside_log_reset.php"); }
          	else { include("aside_log_area.php");	} ?>
    </aside>

 

 <nav>
<?php 
 	if ( isset($_SESSION['id']))
 	{
 	echo '<div class=\'log_in_menu\'>';
	 include("log_in_menu.php");
	'</div>';
	}
?>
 </nav>
 </div>
  
 <article>

<?php 
	
 	 include("page_accueil.php");
	

?>



 </article>
 
  
  
</section>

        

<!--
<footer>
Bas de page         
</footer>
-->    




</body>
</html>
