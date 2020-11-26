<?php

try
{
    $bdd = new PDO('mysql:host=businessyy007.mysql.db;dbname=businessyy007;charset=utf8', 'businessyy007', 'aA0678796869');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>