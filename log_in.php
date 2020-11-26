<div class=log_area> 
   Log_in.php


<?php


if ( isset($_SESSION['id']))

  {
  include("log_in_oui.php");
  }

      else 
        
          try
          {
          $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
          }
          catch(Exception $e)
          {
          die('Erreur : '.$e->getMessage());
          }

          //  Récupération de l'utilisateur et de son pass hashé
          $req = $bdd->prepare('SELECT ID, Pw FROM equipes WHERE Equipe = ?');
          $req->execute(array($_POST['equipe']));
          $resultat = $req->fetch();

              if (!$resultat)
                {
                include("log_in_non.php");
                
                }

                  else
                        
                        {
                          if ( $_POST['password'] == $resultat['Pw'] )
                           {
                              $_SESSION['id'] = $resultat['ID'];
                              $_SESSION['equipe'] = $_POST['equipe'];
                              echo "Vous êtes connecté !";
                              include("log_in_oui.php");
                              $req->closeCursor();
                              
                            }
                            
                            else
                             {
                              include("log_in_non.php");
                              $req->closeCursor();
                             }
                        }
          


// $req = $bdd->prepare('SELECT * FROM equipes WHERE Equipe = ?');
//     $req->execute(array($_POST['equipe']));
    

//   while ( $extract = $req->fetch())

      
 //        if ( $_POST['password'] == $extract['Pw'] )
    //        {
//	         include("log_in_oui.php");
  //           $req->closeCursor();
    //        }
      //          else
        //            {
          //           include("log_in_non.php");
            //         $req->closeCursor();
              //      }
  

 ?>
 </div>