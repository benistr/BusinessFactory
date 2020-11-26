

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->

<?php 
$req = $bdd->prepare('UPDATE p2 SET 

dividendes = :dividendes,
montant = :montant, 
equipement1achat = :equipement1achat,
equipement2achat = :equipement2achat,
equipement3achat = :equipement3achat,
budgetmaintenance = :budgetmaintenance,
embaucheouvrier = :embaucheouvrier,
licenciementouvrier = :licenciementouvrier,
indiceouvrier = :indiceouvrier,
budgetsocial = :budgetsocial,
/* communicationglobale = :communicationglobale,
polyvalents = :polyvalents, */
product1licence = :product1licence,
product1production = :product1production,
product1qualite = :product1qualite,
product1soustraitance= :product1soustraitance,
product1pdv = :product1pdv,
product1communication = :product1communication,
product1commerciaux = :product1commerciaux,
product1indicefdv = :product1indicefdv,
product1icreditclient = :product1icreditclient,
product2licence = :product2licence,
product2production = :product2production,
product2qualite = :product2qualite,
product2soustraitance= :product2soustraitance,
product2pdv = :product2pdv,
product2communication = :product2communication,
product2commerciaux = :product2commerciaux,
product2indicefdv = :product2indicefdv,
product2icreditclient = :product2icreditclient,
product3licence = :product3licence,
product3production = :product3production,
product3qualite = :product3qualite,
product3soustraitance= :product3soustraitance,
product3pdv = :product3pdv,
product3communication = :product3communication,
product3commerciaux = :product3commerciaux,
product3indicefdv = :product3indicefdv,
product3icreditclient = :product3icreditclient,
product4licence = :product4licence,
product4production = :product4production,
product4qualite = :product4qualite,
product4soustraitance= :product4soustraitance,
product4pdv = :product4pdv,
product4communication = :product4communication,
product4commerciaux = :product4commerciaux,
product4indicefdv = :product4indicefdv,
product4icreditclient = :product4icreditclient,
product5licence = :product5licence,
product5production = :product5production,
product5qualite = :product5qualite,
product5soustraitance= :product5soustraitance,
product5pdv = :product5pdv,
product5communication = :product5communication,
product5commerciaux = :product5commerciaux,
product5indicefdv = :product5indicefdv,
product5icreditclient = :product5icreditclient

WHERE ID = :ID'); 


$req->execute(array(
'dividendes' => $_SESSION['dividendes_p2'],
'montant' => $_SESSION['montant_p2'],
'equipement1achat' => $_SESSION['equipement1achat_p2'],
'equipement2achat' => $_SESSION['equipement2achat_p2'],
'equipement3achat' => $_SESSION['equipement3achat_p2'],
'budgetmaintenance' => $_SESSION['budgetmaintenance_p2'],
'embaucheouvrier' => $_SESSION['embaucheouvrier_p2'],
'licenciementouvrier' => $_SESSION['licenciementouvrier_p2'],
'indiceouvrier' => $_SESSION['indiceouvrier_p2'],
'budgetsocial' => $_SESSION['budgetsocial_p2'],
/* 'communicationglobale' => $_SESSION['communicationglobale_p2'],
'polyvalents' => $_SESSION['polyvalents_p2'], */
'product1licence' => $_SESSION['product1licence_p2'],
'product1production' => $_SESSION['product1production_p2'],
'product1qualite' => $_SESSION['product1qualite_p2'],
'product1soustraitance' => $_SESSION['product1soustraitance_p2'],
'product1pdv' => $_SESSION['product1pdv_p2'],
'product1communication' => $_SESSION['product1communication_p2'],
'product1commerciaux' => $_SESSION['product1commerciaux_p2'],
'product1indicefdv' => $_SESSION['product1indicefdv_p2'],
'product1icreditclient' => $_SESSION['product1icreditclient_p2'],
'product2licence' => $_SESSION['product2licence_p2'],
'product2production' => $_SESSION['product2production_p2'],
'product2qualite' => $_SESSION['product2qualite_p2'],
'product2soustraitance' => $_SESSION['product2soustraitance_p2'],
'product2pdv' => $_SESSION['product2pdv_p2'],
'product2communication' => $_SESSION['product2communication_p2'],
'product2commerciaux' => $_SESSION['product2commerciaux_p2'],
'product2indicefdv' => $_SESSION['product2indicefdv_p2'],
'product2icreditclient' => $_SESSION['product2icreditclient_p2'],
'product3licence' => $_SESSION['product3licence_p2'],
'product3production' => $_SESSION['product3production_p2'],
'product3qualite' => $_SESSION['product3qualite_p2'],
'product3soustraitance' => $_SESSION['product3soustraitance_p2'],
'product3pdv' => $_SESSION['product3pdv_p2'],
'product3communication' => $_SESSION['product3communication_p2'],
'product3commerciaux' => $_SESSION['product3commerciaux_p2'],
'product3indicefdv' => $_SESSION['product3indicefdv_p2'],
'product3icreditclient' => $_SESSION['product3icreditclient_p2'],
'product4licence' => $_SESSION['product4licence_p2'],
'product4production' => $_SESSION['product4production_p2'],
'product4qualite' => $_SESSION['product4qualite_p2'],
'product4soustraitance' => $_SESSION['product4soustraitance_p2'],
'product4pdv' => $_SESSION['product4pdv_p2'],
'product4communication' => $_SESSION['product4communication_p2'],
'product4commerciaux' => $_SESSION['product4commerciaux_p2'],
'product4indicefdv' => $_SESSION['product4indicefdv_p2'],
'product4icreditclient' => $_SESSION['product4icreditclient_p2'],
'product5licence' => $_SESSION['product5licence_p2'],
'product5production' => $_SESSION['product5production_p2'],
'product5qualite' => $_SESSION['product5qualite_p2'],
'product5soustraitance' => $_SESSION['product5soustraitance_p2'],
'product5pdv' => $_SESSION['product5pdv_p2'],
'product5communication' => $_SESSION['product5communication_p2'],
'product5commerciaux' => $_SESSION['product5commerciaux_p2'],
'product5indicefdv' => $_SESSION['product5indicefdv_p2'],
'product5icreditclient' => $_SESSION['product5icreditclient_p2'],
'ID' => $_SESSION['id']
));
?>
