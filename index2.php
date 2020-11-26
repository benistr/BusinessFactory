<?php 
 
 if (isset($_GET['session']))

	{
	 	if  ($_GET['session'] == 'ing2' )

	 	{
	 
	  header('Location: site/index.php');
	  	}

	 	else
	 	{
			echo 'Votre session a expirée';
	 	}
		
	}

else
{
	  header('Location: https://www.businessfacto.com/');
	  exit();

}
?>