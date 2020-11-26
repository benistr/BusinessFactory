

<!--ENVOI DES VARIABLES _SESSION VERS LA BDD-->

<?php 
$req = $bdd->prepare('UPDATE p3 SET 

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
'dividendes' => $_SESSION['dividendes_p3'],
'montant' => $_SESSION['montant_p3'],
'equipement1achat' => $_SESSION['equipement1achat_p3'],
'equipement2achat' => $_SESSION['equipement2achat_p3'],
'equipement3achat' => $_SESSION['equipement3achat_p3'],
'budgetmaintenance' => $_SESSION['budgetmaintenance_p3'],
'embaucheouvrier' => $_SESSION['embaucheouvrier_p3'],
'licenciementouvrier' => $_SESSION['licenciementouvrier_p3'],
'indiceouvrier' => $_SESSION['indiceouvrier_p3'],
'budgetsocial' => $_SESSION['budgetsocial_p3'],
/* 'communicationglobale' => $_SESSION['communicationglobale_p3'],
'polyvalents' => $_SESSION['polyvalents_p3'], */
'product1licence' => $_SESSION['product1licence_p3'],
'product1production' => $_SESSION['product1production_p3'],
'product1qualite' => $_SESSION['product1qualite_p3'],
'product1soustraitance' => $_SESSION['product1soustraitance_p3'],
'product1pdv' => $_SESSION['product1pdv_p3'],
'product1communication' => $_SESSION['product1communication_p3'],
'product1commerciaux' => $_SESSION['product1commerciaux_p3'],
'product1indicefdv' => $_SESSION['product1indicefdv_p3'],
'product1icreditclient' => $_SESSION['product1icreditclient_p3'],
'product2licence' => $_SESSION['product2licence_p3'],
'product2production' => $_SESSION['product2production_p3'],
'product2qualite' => $_SESSION['product2qualite_p3'],
'product2soustraitance' => $_SESSION['product2soustraitance_p3'],
'product2pdv' => $_SESSION['product2pdv_p3'],
'product2communication' => $_SESSION['product2communication_p3'],
'product2commerciaux' => $_SESSION['product2commerciaux_p3'],
'product2indicefdv' => $_SESSION['product2indicefdv_p3'],
'product2icreditclient' => $_SESSION['product2icreditclient_p3'],
'product3licence' => $_SESSION['product3licence_p3'],
'product3production' => $_SESSION['product3production_p3'],
'product3qualite' => $_SESSION['product3qualite_p3'],
'product3soustraitance' => $_SESSION['product3soustraitance_p3'],
'product3pdv' => $_SESSION['product3pdv_p3'],
'product3communication' => $_SESSION['product3communication_p3'],
'product3commerciaux' => $_SESSION['product3commerciaux_p3'],
'product3indicefdv' => $_SESSION['product3indicefdv_p3'],
'product3icreditclient' => $_SESSION['product3icreditclient_p3'],
'product4licence' => $_SESSION['product4licence_p3'],
'product4production' => $_SESSION['product4production_p3'],
'product4qualite' => $_SESSION['product4qualite_p3'],
'product4soustraitance' => $_SESSION['product4soustraitance_p3'],
'product4pdv' => $_SESSION['product4pdv_p3'],
'product4communication' => $_SESSION['product4communication_p3'],
'product4commerciaux' => $_SESSION['product4commerciaux_p3'],
'product4indicefdv' => $_SESSION['product4indicefdv_p3'],
'product4icreditclient' => $_SESSION['product4icreditclient_p3'],
'product5licence' => $_SESSION['product5licence_p3'],
'product5production' => $_SESSION['product5production_p3'],
'product5qualite' => $_SESSION['product5qualite_p3'],
'product5soustraitance' => $_SESSION['product5soustraitance_p3'],
'product5pdv' => $_SESSION['product5pdv_p3'],
'product5communication' => $_SESSION['product5communication_p3'],
'product5commerciaux' => $_SESSION['product5commerciaux_p3'],
'product5indicefdv' => $_SESSION['product5indicefdv_p3'],
'product5icreditclient' => $_SESSION['product5icreditclient_p3'],
'ID' => $_SESSION['id']
));
?>
