 

 <div class=log_area> 
   Log_off.php



<?php 

if (isset($_POST['equipe']) && isset($_POST['password']))

{
  include("log_in.php");
}

else
{
    include("log_off_2.php");
}



?>


</div>

