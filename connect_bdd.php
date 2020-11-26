<?php

		try
          {
          $bdd = new PDO('mysql:host=localhost;dbname=profs;charset=utf8', 'root', 'Ereul9Aeng');
          }
          catch(Exception $e)
          {
          die('Erreur : '.$e->getMessage());
          }
?>