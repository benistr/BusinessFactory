<?php

  include("connect_bdd.php");

          $req = $bdd->prepare('SELECT * FROM equipes WHERE Equipe = ?');
          $req->execute(array($_POST['equipe']));
          $resultat = $req->fetch();

              if (!$resultat)
                {
                $req->closeCursor();
                include("aside_log_refus.php");
                
                }

                  else
                        
                        {
                          if ( $_POST['password'] == $resultat['Pw'] )
                           {
                              $_SESSION['id'] = $resultat['ID'];
                              $_SESSION['equipe'] = $_POST['equipe'];
                              $_SESSION['nom'] = $resultat['Nom'];
                              $_SESSION['slogan'] = $resultat['Slogan'];
                              $_SESSION['tel'] = $resultat['Tel'];
                              $_SESSION['mail'] = $resultat['Mail'];
                              $_SESSION['dir1'] = $resultat['Dirgeneral'];
                              $_SESSION['dir2'] = $resultat['Dirfinancier'];
                              $_SESSION['dir3'] = $resultat['Dirrh'];
                              $_SESSION['dir4'] = $resultat['Dirmarketing'];
                              $_SESSION['dir5'] = $resultat['Dircommercial'];
                              $_SESSION['dir6'] = $resultat['Dirproduction'];
                              $_SESSION['dir7'] = $resultat['Dirjuridique'];
                              $req->closeCursor();

$req = $bdd->prepare('SELECT * FROM p1 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p1'] = $resultat['dividendes'];
$_SESSION['montant_p1'] = $resultat['montant'];
$_SESSION['equipement1achat_p1'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p1']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p1']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p1'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p1'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p1'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p1'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p1']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p1']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p1']  = $resultat['polyvalents'];
$_SESSION['product1licence_p1']  = $resultat['product1licence'];
$_SESSION['product1production_p1']  = $resultat['product1production'];
$_SESSION['product1qualite_p1']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p1'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p1']  = $resultat['product1pdv'];
$_SESSION['product1communication_p1'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p1'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p1'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p1'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p1']  = $resultat['product2licence'];
$_SESSION['product2production_p1']  = $resultat['product2production'];
$_SESSION['product2qualite_p1']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p1'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p1']  = $resultat['product2pdv'];
$_SESSION['product2communication_p1'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p1'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p1'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p1'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p1']  = $resultat['product3licence'];
$_SESSION['product3production_p1']  = $resultat['product3production'];
$_SESSION['product3qualite_p1']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p1'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p1']  = $resultat['product3pdv'];
$_SESSION['product3communication_p1'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p1'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p1'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p1'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p1']  = $resultat['product4licence'];
$_SESSION['product4production_p1']  = $resultat['product4production'];
$_SESSION['product4qualite_p1']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p1'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p1']  = $resultat['product4pdv'];
$_SESSION['product4communication_p1'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p1'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p1'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p1'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p1']  = $resultat['product5licence'];
$_SESSION['product5production_p1']  = $resultat['product5production'];
$_SESSION['product5qualite_p1']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p1'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p1']  = $resultat['product5pdv'];
$_SESSION['product5communication_p1'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p1'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p1'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p1'] = $resultat['product5icreditclient'];
$req->closeCursor();

$req = $bdd->prepare('SELECT * FROM p2 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p2'] = $resultat['dividendes'];
$_SESSION['montant_p2'] = $resultat['montant'];
$_SESSION['equipement1achat_p2'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p2']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p2']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p2'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p2'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p2'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p2'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p2']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p2']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p2']  = $resultat['polyvalents'];
$_SESSION['product1licence_p2']  = $resultat['product1licence'];
$_SESSION['product1production_p2']  = $resultat['product1production'];
$_SESSION['product1qualite_p2']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p2'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p2']  = $resultat['product1pdv'];
$_SESSION['product1communication_p2'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p2'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p2'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p2'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p2']  = $resultat['product2licence'];
$_SESSION['product2production_p2']  = $resultat['product2production'];
$_SESSION['product2qualite_p2']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p2'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p2']  = $resultat['product2pdv'];
$_SESSION['product2communication_p2'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p2'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p2'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p2'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p2']  = $resultat['product3licence'];
$_SESSION['product3production_p2']  = $resultat['product3production'];
$_SESSION['product3qualite_p2']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p2'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p2']  = $resultat['product3pdv'];
$_SESSION['product3communication_p2'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p2'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p2'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p2'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p2']  = $resultat['product4licence'];
$_SESSION['product4production_p2']  = $resultat['product4production'];
$_SESSION['product4qualite_p2']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p2'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p2']  = $resultat['product4pdv'];
$_SESSION['product4communication_p2'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p2'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p2'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p2'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p2']  = $resultat['product5licence'];
$_SESSION['product5production_p2']  = $resultat['product5production'];
$_SESSION['product5qualite_p2']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p2'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p2']  = $resultat['product5pdv'];
$_SESSION['product5communication_p2'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p2'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p2'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p2'] = $resultat['product5icreditclient'];
$req->closeCursor();


$req = $bdd->prepare('SELECT * FROM p3 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p3'] = $resultat['dividendes'];
$_SESSION['montant_p3'] = $resultat['montant'];
$_SESSION['equipement1achat_p3'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p3']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p3']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p3'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p3'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p3'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p3'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p3']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p3']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p3']  = $resultat['polyvalents'];
$_SESSION['product1licence_p3']  = $resultat['product1licence'];
$_SESSION['product1production_p3']  = $resultat['product1production'];
$_SESSION['product1qualite_p3']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p3'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p3']  = $resultat['product1pdv'];
$_SESSION['product1communication_p3'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p3'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p3'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p3'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p3']  = $resultat['product2licence'];
$_SESSION['product2production_p3']  = $resultat['product2production'];
$_SESSION['product2qualite_p3']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p3'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p3']  = $resultat['product2pdv'];
$_SESSION['product2communication_p3'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p3'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p3'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p3'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p3']  = $resultat['product3licence'];
$_SESSION['product3production_p3']  = $resultat['product3production'];
$_SESSION['product3qualite_p3']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p3'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p3']  = $resultat['product3pdv'];
$_SESSION['product3communication_p3'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p3'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p3'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p3'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p3']  = $resultat['product4licence'];
$_SESSION['product4production_p3']  = $resultat['product4production'];
$_SESSION['product4qualite_p3']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p3'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p3']  = $resultat['product4pdv'];
$_SESSION['product4communication_p3'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p3'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p3'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p3'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p3']  = $resultat['product5licence'];
$_SESSION['product5production_p3']  = $resultat['product5production'];
$_SESSION['product5qualite_p3']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p3'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p3']  = $resultat['product5pdv'];
$_SESSION['product5communication_p3'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p3'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p3'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p3'] = $resultat['product5icreditclient'];
$req->closeCursor();



$req = $bdd->prepare('SELECT * FROM p4 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p4'] = $resultat['dividendes'];
$_SESSION['montant_p4'] = $resultat['montant'];
$_SESSION['equipement1achat_p4'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p4']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p4']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p4'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p4'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p4'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p4'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p4']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p4']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p4']  = $resultat['polyvalents'];
$_SESSION['product1licence_p4']  = $resultat['product1licence'];
$_SESSION['product1production_p4']  = $resultat['product1production'];
$_SESSION['product1qualite_p4']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p4'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p4']  = $resultat['product1pdv'];
$_SESSION['product1communication_p4'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p4'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p4'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p4'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p4']  = $resultat['product2licence'];
$_SESSION['product2production_p4']  = $resultat['product2production'];
$_SESSION['product2qualite_p4']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p4'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p4']  = $resultat['product2pdv'];
$_SESSION['product2communication_p4'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p4'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p4'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p4'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p4']  = $resultat['product3licence'];
$_SESSION['product3production_p4']  = $resultat['product3production'];
$_SESSION['product3qualite_p4']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p4'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p4']  = $resultat['product3pdv'];
$_SESSION['product3communication_p4'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p4'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p4'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p4'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p4']  = $resultat['product4licence'];
$_SESSION['product4production_p4']  = $resultat['product4production'];
$_SESSION['product4qualite_p4']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p4'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p4']  = $resultat['product4pdv'];
$_SESSION['product4communication_p4'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p4'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p4'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p4'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p4']  = $resultat['product5licence'];
$_SESSION['product5production_p4']  = $resultat['product5production'];
$_SESSION['product5qualite_p4']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p4'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p4']  = $resultat['product5pdv'];
$_SESSION['product5communication_p4'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p4'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p4'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p4'] = $resultat['product5icreditclient'];
$req->closeCursor();

                  
$req = $bdd->prepare('SELECT * FROM p5 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p5'] = $resultat['dividendes'];
$_SESSION['montant_p5'] = $resultat['montant'];
$_SESSION['equipement1achat_p5'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p5']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p5']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p5'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p5'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p5'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p5'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p5']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p5']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p5']  = $resultat['polyvalents'];
$_SESSION['product1licence_p5']  = $resultat['product1licence'];
$_SESSION['product1production_p5']  = $resultat['product1production'];
$_SESSION['product1qualite_p5']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p5'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p5']  = $resultat['product1pdv'];
$_SESSION['product1communication_p5'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p5'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p5'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p5'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p5']  = $resultat['product2licence'];
$_SESSION['product2production_p5']  = $resultat['product2production'];
$_SESSION['product2qualite_p5']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p5'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p5']  = $resultat['product2pdv'];
$_SESSION['product2communication_p5'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p5'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p5'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p5'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p5']  = $resultat['product3licence'];
$_SESSION['product3production_p5']  = $resultat['product3production'];
$_SESSION['product3qualite_p5']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p5'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p5']  = $resultat['product3pdv'];
$_SESSION['product3communication_p5'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p5'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p5'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p5'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p5']  = $resultat['product4licence'];
$_SESSION['product4production_p5']  = $resultat['product4production'];
$_SESSION['product4qualite_p5']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p5'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p5']  = $resultat['product4pdv'];
$_SESSION['product4communication_p5'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p5'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p5'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p5'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p5']  = $resultat['product5licence'];
$_SESSION['product5production_p5']  = $resultat['product5production'];
$_SESSION['product5qualite_p5']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p5'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p5']  = $resultat['product5pdv'];
$_SESSION['product5communication_p5'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p5'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p5'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p5'] = $resultat['product5icreditclient'];
$req->closeCursor();


$req = $bdd->prepare('SELECT * FROM p6 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();
$_SESSION['dividendes_p6'] = $resultat['dividendes'];
$_SESSION['montant_p6'] = $resultat['montant'];
$_SESSION['equipement1achat_p6'] = $resultat['equipement1achat'];
$_SESSION['equipement2achat_p6']  = $resultat['equipement2achat'];
$_SESSION['equipement3achat_p6']  = $resultat['equipement3achat'];
$_SESSION['budgetmaintenance_p6'] = $resultat['budgetmaintenance'];
$_SESSION['embaucheouvrier_p6'] = $resultat['embaucheouvrier'];
$_SESSION['licenciementouvrier_p6'] = $resultat['licenciementouvrier'];
$_SESSION['indiceouvrier_p6'] = $resultat['indiceouvrier'];
$_SESSION['budgetsocial_p6']  = $resultat['budgetsocial'];
$_SESSION['communicationglobale_p6']  = $resultat['communicationglobale'];
$_SESSION['polyvalents_p6']  = $resultat['polyvalents'];
$_SESSION['product1licence_p6']  = $resultat['product1licence'];
$_SESSION['product1production_p6']  = $resultat['product1production'];
$_SESSION['product1qualite_p6']  = $resultat['product1qualite'];
$_SESSION['product1soustraitance_p6'] = $resultat['product1soustraitance'];
$_SESSION['product1pdv_p6']  = $resultat['product1pdv'];
$_SESSION['product1communication_p6'] = $resultat['product1communication'];
$_SESSION['product1commerciaux_p6'] = $resultat['product1commerciaux'];
$_SESSION['product1indicefdv_p6'] = $resultat['product1indicefdv'];
$_SESSION['product1icreditclient_p6'] = $resultat['product1icreditclient'];
$_SESSION['product2licence_p6']  = $resultat['product2licence'];
$_SESSION['product2production_p6']  = $resultat['product2production'];
$_SESSION['product2qualite_p6']  = $resultat['product2qualite'];
$_SESSION['product2soustraitance_p6'] = $resultat['product2soustraitance'];
$_SESSION['product2pdv_p6']  = $resultat['product2pdv'];
$_SESSION['product2communication_p6'] = $resultat['product2communication'];
$_SESSION['product2commerciaux_p6'] = $resultat['product2commerciaux'];
$_SESSION['product2indicefdv_p6'] = $resultat['product2indicefdv'];
$_SESSION['product2icreditclient_p6'] = $resultat['product2icreditclient'];
$_SESSION['product3licence_p6']  = $resultat['product3licence'];
$_SESSION['product3production_p6']  = $resultat['product3production'];
$_SESSION['product3qualite_p6']  = $resultat['product3qualite'];
$_SESSION['product3soustraitance_p6'] = $resultat['product3soustraitance'];
$_SESSION['product3pdv_p6']  = $resultat['product3pdv'];
$_SESSION['product3communication_p6'] = $resultat['product3communication'];
$_SESSION['product3commerciaux_p6'] = $resultat['product3commerciaux'];
$_SESSION['product3indicefdv_p6'] = $resultat['product3indicefdv'];
$_SESSION['product3icreditclient_p6'] = $resultat['product3icreditclient'];
$_SESSION['product4licence_p6']  = $resultat['product4licence'];
$_SESSION['product4production_p6']  = $resultat['product4production'];
$_SESSION['product4qualite_p6']  = $resultat['product4qualite'];
$_SESSION['product4soustraitance_p6'] = $resultat['product4soustraitance'];
$_SESSION['product4pdv_p6']  = $resultat['product4pdv'];
$_SESSION['product4communication_p6'] = $resultat['product4communication'];
$_SESSION['product4commerciaux_p6'] = $resultat['product4commerciaux'];
$_SESSION['product4indicefdv_p6'] = $resultat['product4indicefdv'];
$_SESSION['product4icreditclient_p6'] = $resultat['product4icreditclient'];
$_SESSION['product5licence_p6']  = $resultat['product5licence'];
$_SESSION['product5production_p6']  = $resultat['product5production'];
$_SESSION['product5qualite_p6']  = $resultat['product5qualite'];
$_SESSION['product5soustraitance_p6'] = $resultat['product5soustraitance'];
$_SESSION['product5pdv_p6']  = $resultat['product5pdv'];
$_SESSION['product5communication_p6'] = $resultat['product5communication'];
$_SESSION['product5commerciaux_p6'] = $resultat['product5commerciaux'];
$_SESSION['product5indicefdv_p6'] = $resultat['product5indicefdv'];
$_SESSION['product5icreditclient_p6'] = $resultat['product5icreditclient'];
$req->closeCursor();

$req = $bdd->prepare('SELECT * FROM equipes2 WHERE Equipe = ?');
$req->execute(array($_POST['equipe']));
$resultat = $req->fetch();




                              $_SESSION['1dir1'] = $resultat['Dirgeneral'];
                              $_SESSION['1dir2'] = $resultat['Dirfinancier'];
                              $_SESSION['1dir3'] = $resultat['Dirrh'];
                              $_SESSION['1dir4'] = $resultat['Dirmarketing'];
                              $_SESSION['1dir5'] = $resultat['Dircommercial'];
                              $_SESSION['1dir6'] = $resultat['Dirproduction'];
                              $_SESSION['1dir7'] = $resultat['Dirjuridique'];
                              $req->closeCursor();

$req = $bdd->prepare('SELECT * FROM admin WHERE ID = ?');
$req->execute(array(100));
$resultat = $req->fetch();




                              $_SESSION['product1'] = $resultat['product1'];
                              $_SESSION['product2'] = $resultat['product2'];
                              $_SESSION['product3'] = $resultat['product3'];
                              $_SESSION['product4'] = $resultat['product4'];
                              $_SESSION['product5'] = $resultat['product5'];
                              $req->closeCursor();


         //  include("aside_log_id.php");
         header('Location: index.php');
                              
                                    }
                                     else
                                    {
                                       $req->closeCursor();
                                       include("aside_log_refus.php");
                                        
                                    }
                              }

   ?>